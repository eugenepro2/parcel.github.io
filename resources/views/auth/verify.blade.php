@extends('auth.login')
@section('content')
<div class="verified">
	<div class="flex">
		<h3>E-Mail-Adresse bestätigt!</h3>
        <form class="d-inline" method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Anmelden</button>
        </form>
	</div>
</div>
@endsection
