@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.auth')

@section('content')
<div class="verified">
	<div class="flex">
		<h3>E-Mail-Adresse bestätigt!</h3>
		<p>Deine E-Mail-Adresse ist bestätigt.<br>Du kannst sofort loslegen!</p>
		{{-- <a class="btn btn-primary" href="{{route('login')}}">Anmelden</a> --}}
	</div>
</div>
@endsection
