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
        @if ($id == 40)
          value="{{(isset($data[0])) ? $data[0]->value : $data_step_1[0]->value}}"
        @endif
        @if ($id == 41)
          value="{{(isset($data[0])) ? $data[1]->value : $data_step_1[1]->value}}"
        @endif
        @if ($id == 42)
          value="{{(isset($data[0])) ? $data[2]->value : $data_step_1[2]->value}}"
        @endif
        @if ($id == 43)
        value="{{(isset($data[0])) ? $data[3]->value : $data_step_1[3]->value}}"
        @endif
        @if ($id == 44)
        value="{{(isset($data[0])) ? $data[4]->value : $data_step_1[4]->value}}"
        @endif
        @if ($id == 45)
        value="{{(isset($data[0])) ? $data[5]->value : $data_step_1[5]->value}}"
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
@elseif($type == 'select' and $id == 6)
  @php($countries = include('../resources/views/step/components/countries.php'))
  <div class="field" id="field-{{$id}}">
    <label for="{{$id}}">{{$title}}</label>
    <select name="field-{{$id}}" id="{{$id}}" @if ($required) required @endif class="@if ($errors->has(`field-{$id}`)) error @endif">
      <option value=""></option>
      @foreach ($countries as $key => $value)
        @if(isset($field_value) and $field_value == $key)
          <option selected value="{{$key}}">{{$value['name']}}</option>
        @else
          <option value="{{$key}}">{{$value['name']}}</option>
        @endif
      @endforeach
    </select>
  </div>
@elseif($type == 'select')
  <div class="field" id="field-{{$id}}">
    <label for="{{$id}}">{{$title}}</label>
    <select name="field-{{$id}}" id="{{$id}}" @if ($required) required @endif class="@if ($errors->has(`field-{$id}`)) error @endif">
      <option value=""></option>
      @foreach ($options as $option)
        @if(isset($field_value) and $field_value == $option['id'])
        <option id="option-{{$option['id']}}" selected value="{{$option['id']}}">{{$option['name']}}</option>
        @else
        <option id="option-{{$option['id']}}" value="{{$option['id']}}">{{$option['name']}}</option>
        @endif
      @endforeach
    </select>
  </div>   
@endif
