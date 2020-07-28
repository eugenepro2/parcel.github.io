@extends('layouts.auth')

@section('content')
<div class="verified">
	<div class="flex">
		<h3>E-Mail-Adresse bestätigt!</h3>
		<a class="btn btn-primary" href="{{route('login')}}">Anmelden</a>
	</div>
</div>
@endsection
