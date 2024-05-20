@extends('layouts.guest')

@section('title','Verified Email | Lecturna')

@section('content')
<h3 class="mb-2">Verify your email ✉️</h3>
<p class="text-start">
    A new verification link has been sent to the email address you provided during registration.
</p>
<form method="POST" action="{{ route('verification.send') }}">
@csrf
    <button type="submit" class="btn btn-primary w-100 my-3" value="Resend Verification Email">
        Resend Verification Email
    </button>
    <!-- <a class="btn btn-primary w-100 my-3" href="index.html">
        Skip for now
    </a> -->
</form>

<form method="POST" action="{{ route('logout') }}" class="text-center">
@csrf
            <button type="submit" class="btn btn-danger">
                {{ __('Log Out') }}
            </button>
</form> 
@endsection