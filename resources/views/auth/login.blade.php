@extends('layouts.auth')

@section('content')
<div class="login">
	<form method="POST" action="{{ route('login') }}">
		@csrf
		@error('email')
			<div class="badge">
				Dieser Benutzer ist nicht registriert.
			</div>
		@enderror
		@error('password')
			<div class="badge">
				Falsches Passwort. Bitte noch einmal versuchen oder auf "Passwort vergessen" klicken, um das Passwort zurückzusetzen.
			</div>
		@enderror
		@if (session('message'))
			<div class="badge">
				{!! session('message') !!}
			</div>
		@endif

		<input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-Mail">

		<input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="new-password" placeholder="Passwort">
		
		<a class="password-reset" href="{{ route('password.request') }}">
			Passwort vergessen?
		</a>

		<button type="submit" class="btn btn-primary">
			Anmelden
		</button>

		<a href="{{route('register')}}" class="btn btn-secondary">
			Registrieren
		</a>

	</form>
</div>
@endsection
