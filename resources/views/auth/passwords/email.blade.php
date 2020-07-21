@extends('layouts.auth')

@section('content')
<div class="email">
		@if (session('status'))
			<div class="verified">
				<div class="flex">
					<h3>E-Mail zum Wiederherstellen versendet!</h3>
					<p>Wir haben dir per E-Mail einen Link zum<br>
						Zurücksetzen versendet.</p>
					<a class="btn btn-primary" href="{{route('login')}}">Anmelden</a>
				</div>
			</div>
		@else
			<form method="POST" action="{{ route('password.email') }}">
				@csrf
				<input id="email" type="email" class="mb-50 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail">

				@error('email')
						<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
						</span>
				@enderror

				<button type="submit" class="btn btn-primary">
					Passwort zurücksetzen
				</button>
			</form>
		@endif
</div>
@endsection
