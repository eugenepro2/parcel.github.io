<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lastschrift</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fff">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" media="all" href="{{ asset('docs/css/app.css') }}">
    <style>.out{max-width: 780px; margin: 0 auto}</style>
  </head>
  <body>
    <!--BEGIN out-->
    <div class="out">
      <section class="lastschrift">
        <h1 class="title lastschrift__title">SEPA-Lastschrift-Mandat</h1>
        <div class="row lastschrift__row">
          <div class="frame frame_sm">
            <h2 class="subtitle">Name und Anschrift des Zahlers</h2>
            @foreach($fields as $field)
              @if($field['field_id'] == 34)
              <input type="text" value="{{$field['value']}}">
              @elseif($field['field_id'] == 35)
              <input type="text" value="{{$field['value']}}">
              @elseif($field['field_id'] == 36)
              <input type="text" value="{{$field['value']}}">
              @endif
            @endforeach
            @foreach($fields as $field)
              @if($field['field_id'] == 4)
                <input type="text" value="{{$field['value']}}">
              @endif
            @endforeach
          </div>
          <div class="frame frame_lg">
            <h2 class="subtitle">Name des Zahlungsdienstleisters des Zahlers</h2>
            @foreach($fields as $field)
              @if($field['field_id'] == 37)
                <input type="text" value="{{$field['value']}}">
              @endif
            @endforeach
            <div class="row frame__row">
              <div class="col">
                <h2 class="subtitle">BIC</h2>
                @foreach($fields as $field)
                  @if($field['field_id'] == 38)
                    <input type="text" value="{{$field['value']}}">
                  @endif
                @endforeach
              </div>
              <div class="col">
                <h2 class="subtitle">IBAN</h2>
                @foreach($fields as $field)
                  @if($field['field_id'] == 39)
                    <input type="text" value="{{$field['value']}}">
                  @endif
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <div class="row lastschrift__row">
          <div class="frame frame_sm">
            <h2 class="subtitle">Name und Anschrift des Zahlungsempfängers</h2>
            <p class="text">PARCEL.ONE GmbH</p>
            <p class="text">Am Pfahlgraben 4-10</p>
            <p class="text">35415 Pohlheim-Garbenteich</p>
          </div>
          <div class="frame frame_lg">
            <h2 class="subtitle">Name des Zahlungsdienstleisters des Zahlers</h2>
            <p class="text">DE67ONE00002014326</p>
            <div class="row frame__row">
              <div class="col">
                <h2 class="subtitle">Mandatsreferenz</h2>
                <p class="text">KD{{Auth::id()}}</p>
              </div>
              <div class="col">
                <p class="text text-checkbox">Mandat für einmalige Zahlungen</p>
                <p class="text text-checkbox text-checkbox_true">Mandat für wiederkehrende Zahlungen</p>
              </div>
            </div>
          </div>
        </div>
        <h2 class="subtitle lastschrift__subtitle">SEPA-Lastschrift</h2>
        <p class="text"><b>1.1 SEPA-Lastschrift-Mandat an den Zahlungsempfänger</b></p>
        <p class="text lastschrift__text">Ich ermächtige (Wir ermächtigen) PARCEL.ONE GmbH, Zahlungen von meinem (unserem) Konto mittels Lastschrift einzuziehen. Zugleich weise ich mein (weisen wir unser) Kreditinstitut an, die von PARCEL.ONE GmbH auf mein (unser) Konto gezogenen Lastschriften einzulösen.</p>
        <p class="text lastschrift__text"><b>Hinweis:</b>Ich kann (Wir können) innerhalb von acht Wochen, beginnend mit dem Belastungsdatum, die Erstattung des belasteten Betrages verlanden. Es gelten dabei die mit meinem (unserem) Kreditinstitut vereinbarten Bedingungen.</p>
        <p class="text"><b>1.1 Bestätigung des SEPA-Mandats gegenüber dem Zahlungsdienstleister d. Zahlers</b></p>
        <p class="text lastschrift__text">Ich bestätige/Wir bestätigen gegenüber meinem/unseren oben genannten Zahlungsdienstleister die Erteilung des oben aufgeführten SEPA-Lastschriftmandats an den oben genannten Zahlungsempfänger.</p>
        <div class="row lastschrift__bottom">
          <div class="frame frame_md">
            <h2 class="subtitle">Unterschrift(en) des/der Kontoinhabers/Kontoinhaber</h2>
            <p class="text">Dokument wurde elektronisch signiert</p>
            <p class="text">IP-Adresse: {{$_SERVER['REMOTE_ADDR']}}</p>
          </div>
          <div class="frame frame_md">
            <h2 class="subtitle">Ort, Datum</h2>
            @foreach($fields as $field)
              @if($field['field_id'] == 3)
                <p class="text">{{$field['value']}}, {{date('d.m.Y')}}</p>
              @endif
            @endforeach
          </div>
        </div>
      </section>
    </div>
    <!--END out-->
    <!--LOAD SCRIPTS-->
    <script type="text/javascript" src="{{ asset('docs/js/app.js') }}"></script>
  </body>
</html>
