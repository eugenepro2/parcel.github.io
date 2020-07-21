@extends('layouts.default')

@section('content')
<div class="step">
  <div class="container">
    @include('step.components.steps', ['current' => 8])
    <h2>Go-Live</h2>
    <div class="group">
      <h3>Willkommen bei PARCEL.ONE</h3>
      <p>Lieber Kunde, für eine erfolgreiche Kundenaufschaltung für den PARCEL.ONE Versand haben wir <br> bereits alle erforderlichen Informationen erhalten. In Deinem Postfach findest du eine E-Mail mit <br> weiteren Infos.</p>
      <p>Bei Fragen oder Vertragsänderungen wende dich bitte an unseren Kunden-Support.</p>
    </div>
    <div class="group">
      <h3>Kunden-Support</h3>
      <p>Tel.: +49 (0) 6033 - 35225 - 0<br>
        Fax: +49 (0) 6033 - 35225 - 88<br>
        E-Mail: info@parcel.one<br>
        Website: www.parcel.one</p>
    </div>
  </div>
</div>
@endsection
