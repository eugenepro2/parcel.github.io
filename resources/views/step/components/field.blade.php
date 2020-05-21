

@if ($type == 'text' || $type == 'email' || $type == 'number' || $type == 'date')
  <div class="field" id="field-{{$id}}">
    <label for="{{$id}}">{{$title}}</label>
    <input type="{{$type}}" id="{{$id}}" name="field-{{$id}}" @if ($required) required @endif 
    class="@if ($errors->has(`field-{$id}`)) error @endif"
           value="
              @foreach($data as $dat)
                   @if($dat->field_id == 11)
                    {{$dat->value}}
                   @endif
              @endforeach
            ">
  </div>   
@elseif($type == 'select')
  <div class="field" id="field-{{$id}}">
    <label for="{{$id}}">{{$title}}</label>
    <select name="field-{{$id}}" id="{{$id}}" @if ($required) required @endif class="@if ($errors->has(`field-{$id}`)) error @endif">
      <option value=""></option>
      @foreach ($options as $option)
        <option value="{{$option['id']}}">{{$option['name']}}</option>  
      @endforeach
    </select>
  </div>   
@endif
