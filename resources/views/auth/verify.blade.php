@extends('auth.login')
@section('content')
<div class="verified">
	<div class="flex">
		<h3>E-Mail-Adresse nicht bestätigt!</h3>
		<p>Deine E-Mail-Adresse ist nicht bestätigt. <br>Prüfe deine E-Mails und bestätige <br> dort deine Registrierung.</p>
        <form class="d-inline" method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Anmelden</button>.
        </form>
	</div>
</div>
@endsection
