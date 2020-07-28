@extends('layouts.auth')

@section('content')
<div class="register">
	<form method="POST" action="{{ route('register') }}">
		@csrf

		<input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-Mail">
		<input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Passwort">
		<input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Passwort wiederholen">
		<div class="badge">
			Passwort: Mindestlänge 8 Zeichen, 1 Zahl, 1 Großbuchstabe.
		</div>
		@if ($errors->has('email'))
			<div class="badge">
				{!! $errors->first('email') !!}
			</div>
		@endif
		@if ($errors->has('password'))
			<div class="badge">
				{!! $errors->first('password') !!}
			</div>
		@endif
		<button type="submit" class="btn btn-primary mt-50">
			Registrieren
		</button>
  </form>
</div>
@endsection
