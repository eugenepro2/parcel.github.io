@if(isset($data[0]))
  @foreach($data as $form_field)
    @if($form_field->field_id == $id)
      @php($value = $form_field->value)
    @endif
  @endforeach
@endif


@if ($type == 'text' || $type == 'email' || $type == 'number' || $type == 'date')

  <div class="field" id="field-{{$id}}">
    <label for="{{$id}}">{{$title}}</label>
    <input type="{{$type}}" id="{{$id}}" name="field-{{$id}}" @if ($required) required @endif
    class="@if ($errors->has(`field-{$id}`)) error @endif"
                value="{{(isset($value) ? $value : '')}}">
  </div>
  {{-- @if ($title == 'IBAN *')
    <button class="btn btn-submit iban">
      IBAN prüfen
    </button>      
  @endif --}}
@elseif($type == 'select')
  <div class="field" id="field-{{$id}}">
    <label for="{{$id}}">{{$title}}</label>
    <select name="field-{{$id}}" id="{{$id}}" @if ($required) required @endif class="@if ($errors->has(`field-{$id}`)) error @endif">
      <option value=""></option>
      @foreach ($options as $option)
        @if(isset($value) and $value == $option['id'])
        <option selected value="{{$option['id']}}">{{$option['name']}}</option>
        @else
        <option value="{{$option['id']}}">{{$option['name']}}</option>
        @endif
      @endforeach
    </select>
  </div>   
@endif
