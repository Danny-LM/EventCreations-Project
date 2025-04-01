@extends('layouts.app')

@section('content')
<link href="{{ asset('css/form.css') }}" rel="stylesheet">

<div class='container'>
    <h1>Sign Up</h1>
    <div class="row g-2">
        <div class="col-md">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                
                <div class="form-floating">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder=" " value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <label for="name">Your username</label>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="" value="{{ old('email') }}" required autocomplete="email">
                    <label for="email">Your email</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-floating">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="" required autocomplete="new-password">
                    <label for="password">Your Password</label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-floating">
                    <input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="" required autocomplete="new-password">
                    <label for="password-confirm">Confirm Password</label>
                </div>

                <div class="form-floating">
                    <button type="submit" class="btn btn-primary form-control">{{ __('Register') }}</button>
                </div>

                <center>
                    <div class='line'>
                        <span class='text'>OR</span>
                    </div>
                </center>
            </form>
            
            <a href="{{ route('auth.google') }}" class="btn btn-google">
                Iniciar sesión con Google
            </a>
        </div>
    </div>
</div>
@endsection