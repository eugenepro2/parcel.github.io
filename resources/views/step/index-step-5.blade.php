@extends('layouts.default')

@section('content')
<ul>
  @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
  @endforeach
</ul>
  <form method="POST" action="{{route('send', $step['id'])}}">
    @csrf

  <div class="step">
    <div class="container">
      @include('step.components.steps', ['current' => $step['id']])
      
    
      <h2>Lastschrift-Mandat erteilen</h2>
      <div class="group">
        <h3>Name und Anschrift des Kontoinhabers</h3>
        <div class="field" id="field-34">
          <label for="34">Name *</label>
          <input type="text" id="34" name="field-34" required
                 class="@if ($errors->has(`field-34`)) error @endif"
                 @foreach($data as $form_field)
                 @if($form_field->field_id == 1)
                 value="{{$form_field->value}}">
                @endif
                @endforeach
        </div>
        <div class="field" id="field-35">
          <label for="35">Straße, Nr. *</label>
          <input type="text" id="35" name="field-35" required
                 class="@if ($errors->has(`field-35`)) error @endif"
                 @foreach($data as $form_field)
                 @if($form_field->field_id == 2)
                 value="{{$form_field->value}}">
                @endif
                @endforeach
        </div>
        <div class="field" id="field-36">
          <label for="36">PLZ, Ort *</label>
          <input type="text" id="36" name="field-36" required
                 class="@if ($errors->has(`field-36`)) error @endif"
                 @foreach($data as $form_field)
                 @if($form_field->field_id == 3)
                 value="{{$form_field->value}}">
                  @endif
                  @endforeach
        </div>
      </div>
      <div class="group">
        <h3>Name und Anschrift des Kontoinhabers</h3>
        <p class="error" style="display: none">Bitte prüfen Sie Ihre IBAN</p>
        <div class="field" id="field-38">
          <label for="38">IBAN *</label>
          <input type="text" id="38" name="field-38" required
                 class="@if ($errors->has(`field-38`)) error @endif"
                 value="">
        </div>
        <a class="btn btn-submit iban">
          IBAN prüfen
        </a>
        </form>
        <div class="field" id="field-39">
          <label for="39">BIC *</label>
          <input type="text" id="39" name="field-39" required
                 class="@if ($errors->has(`field-39`)) error @endif"
                 value="">
        </div>
        <div class="field" id="field-37">
          <label for="37">Zahlungsdienstleister *</label>
          <input type="text" id="37" name="field-37" required
                 class="@if ($errors->has(`field-37`)) error @endif"
                 value="">
        </div>
      </div>

        <div class="grey" style="margin-bottom: 20px;">
          <h4>SEPA-Basis-Lastschrift-Mandat an den Zahlungsempfänger für wiederkehrende Zahlungen</h4>
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
      <button class="btn btn-submit mt-50">
          Basis-Lastschrift-MANDAT erteilen
      </button>
    </div>
  </div>
</form>
@endsection
