@php($countries = include('../resources/views/step/components/countries.php'))
@if(isset($data[1]))
  @foreach($data as $form_field)
    @if($form_field->field_id == $id)
      @php($field_value = $form_field->value)
    @endif
  @endforeach
@endif

@if ($type == 'text' || $type == 'email' || $type == 'number' || $type == 'date')
  @if ($step->id == 5)
    @if ($id == 47)
    <p class="error" style="display: none">Bitte prüfen Sie Ihre IBAN</p>
    @endif
  @endif
  <div class="field" id="field-{{$id}}">
    <label for="{{$id}}">{{$title}}</label>
    <input 
      type="{{$type}}"
      id="{{$id}}"
      name="field-{{$id}}" 
      @if ($required) required @endif
      class="@if ($errors->has(`field-{$id}`)) error @endif"

      {{-- Set value from first step in five step --}}
      @if ($step->id == 5)
        @if ($id == 40 or $id == 41 or $id == 42 or $id == 43 or $id == 44)
          value="{{(isset($data[0])) ? $data[0]->value : $data_step_1[0]->value}}"
        @else
          value="{{(isset($field_value) ? $field_value : '')}}"
        @endif
      @else
        value="{{(isset($field_value) ? $field_value : '')}}"
      @endif
      >
  </div>
  @if ($step->id == 5)
    @if ($id == 47)
    <a class="btn btn-submit iban">
      IBAN prüfen
    </a>
    @endif
  @endif

@elseif($type == 'select')
  <div class="field" id="field-{{$id}}">
    <label for="{{$id}}">{{$title}}</label>
    <select name="field-{{$id}}" id="{{$id}}" @if ($required) required @endif class="@if ($errors->has(`field-{$id}`)) error @endif">
      <option value=""></option>

      @if($id == 6 or $id == 45)
        @foreach($countries as $key => $value)
          @if(isset($field_value) and $field_value == $key or isset($data_step_1[0]) and $data_step_1[5]->value == $key)
            <option selected value="{{$key}}">{{$value['name']}}</option>
          @else
            <option value="{{$key}}">{{$value['name']}}</option>
          @endif
        @endforeach
      @else
        @foreach ($options as $option)
          @if(isset($field_value) and $field_value == $option['id'])
            <option id="option-{{$option['id']}}" selected value="{{$option['id']}}">{{$option['name']}}</option>
          @else
            <option id="option-{{$option['id']}}" value="{{$option['id']}}">{{$option['name']}}</option>
          @endif
        @endforeach
      @endif
      
    </select>
  </div>   
@endif
