@extends('layouts.default')

@section('content')
<ul>
  @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
  @endforeach
</ul>

  <form method="POST" action="{{(isset($data[1])) ? route('update', $step['id']) : route('send', $step['id'])}}">
    @if(isset($data[1]))
      @method('PUT')
    @endif
    @csrf

  <div class="step">
    <div class="container">
      @include('step.components.steps', ['current' => $step['id']])
      
    
      <h2>{{$step['name']}}</h2>
      @foreach ($step['group'] as $group)
      <div class="group">
        <h3>{{$group['name']}}</h3>
        @foreach ($group['field'] as $field)
            @include('step.components.field', ['title' => $field['name'], 'required' => $field['required'], 'id' => $field['id'], 'type' => $field['type'], 'options' => $field['option']])
        @endforeach
      </div>
      @endforeach
      
      @if ($step['id'] == 1)
        <div class="grey">
          <div class="flex">
            <div class="checkbox">
              <input type="checkbox" name="checkbox" id="checkbox" required>
              <label for="checkbox"></label>
            </div>
            <label class="label" for="checkbox">
              Ich stimme zu, dass meine Angaben und Daten für eine Registrierung bei PARCEL.ONE elektronisch erhoben und gespeichert werden.<br>Hinweis: Sie können Ihre Einwilligung jederzeit für die Zukunft per E-Mail an info@parcel.one widerrufen.
            </label>
          </div>
        </div>
      @elseif($step['id'] == 6)
        <div class="grey"  style="margin-bottom: 20px;">
          <div class="flex">
            <div class="checkbox">
              <input type="checkbox" name="checkbox" id="checkbox" required>
              <label for="checkbox"></label>
            </div>
            <label class="label" for="checkbox">
              Hiermit beauftrage ich die PARCEL.ONE GmbH für die Abwicklung des Versandes. Ich stimme den Konditionen und den Richtlinien des Angebotes zu. Ich habe die aktuell gültigen <a href="https://parcel.one/wp-content/uploads/2020/03/P1-Versandbedingungen-AGB.pdf" style="text-decoration:none; color: #3E4C69" target="_blank"><b>AGB</b></a> der PARCEL.ONE GmbH gelesen, verstanden und stimme diesen zu.
            </label>
          </div>
        </div>
      @elseif($step['id'] == 5)
        <div class="grey" style="margin-bottom: 20px;">
          <h4>SEPA-Basis-Lastschrift-Mandat an den Zahlungsempfänger</h4>
          <div class="flex">
            <div class="checkbox" style="margin-top: 12px;">
              <input type="checkbox" name="checkbox" id="checkbox" required>
              <label for="checkbox"></label>
            </div>
            <label class="label" for="checkbox">
              <p><b>Gläubiger-Identifikationsnummer des Zahlungsempfängers:</b> DE67ONE00002014326</p>

              <p><b>Mandatsreferenz:</b> KD{{Auth::id()}}</p>

              <p>Ich/Wir ermächtige(n) den oben genannten Zahlungsempfänger, Zahlungen von meinem/unserem Konto mittels Lastschrift einzuziehen. Zugleich weise ich meinen/weisen wir unseren oben genannten Zahlungsdienstleister an, die vom oben genannten Zahlungsempfänger auf mein/unser Konto gezogenen Lastschriften einzulösen.</p>

              <p><b>Hinweis:</b> Dieses Lastschriftmandat dient dem Einzug von Lastschriften. Ich bin/Wir sind nicht berechtigt, nach der erfolgten Einlösung eine Erstattung des belasteten Betrages zu verlangen. Ich bin/Wir sind berechtigt, meinen/unseren Zahlungsdienstleister bis zum Fälligkeitstag anzuweisen, Lastschriften nicht einzulösen.</p>

              <p><b>Bestätigung des SEPA-Basis-Lastschrift-Mandats gegenüber dem Zahlungsdienstleister d. Zahlers:</b> Ich bestätige/Wir bestätigen gegenüber meinem/unseren oben genannten Zahlungsdienstleister die Erteilung des oben aufgeführten SEPA-Basis-Lastschrift-Mandat an den oben genannten Zahlungsempfänger.</p>
            </label>
          </div>
        </div>
      @endif
      <button class="btn btn-submit mt-50">
        @if ($step['id'] == 5)
          Basis-Lastschrift-MANDAT erteilen
        @else
          Absenden
        @endif
      </button>
    </div>
  </div>
</form>
@endsection
