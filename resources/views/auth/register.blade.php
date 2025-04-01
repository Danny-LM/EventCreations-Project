@extends('layouts.app')

@section('content')
<link href="{{ asset('css/form.css') }}" rel="stylesheet">

<div class='container'>
    <h1>Sign Up</h1>
    <div class="row g-2">
        <div class="col-md">
            <form action="{{ route('register') }}" method="POST">
                @csrf

                <!-- Nombre de usuario -->
                <div class="form-floating">
                    <input type="text" 
                           class="form-control @error('username') is-invalid @enderror" 
                           id="username" 
                           name="username" 
                           value="{{ old('username') }}" 
                           placeholder="" 
                           required 
                           minlength="3" 
                           maxlength="255" 
                           pattern="[A-Za-z0-9_]+" 
                           title="Solo se permiten letras, números y guiones bajos">
                    <label for="username">Your username</label>
                    @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Correo electrónico -->
                <div class="form-floating">
                    <input type="email" 
                           class="form-control @error('email') is-invalid @enderror" 
                           id="email" 
                           name="email" 
                           value="{{ old('email') }}" 
                           placeholder="" 
                           required 
                           pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" 
                           title="Debe ser un correo electrónico válido">
                    <label for="email">Your email</label>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Contraseña -->
                <div class="form-floating">
                    <input type="password" 
                           class="form-control @error('password') is-invalid @enderror" 
                           id="pass" 
                           name="password" 
                           placeholder="" 
                           required 
                           minlength="8" 
                           title="La contraseña debe tener al menos 8 caracteres">
                    <label for="pass">Your Password</label>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Confirmar contraseña -->
                <div class="form-floating">
                    <input type="password" 
                           class="form-control @error('password_confirmation') is-invalid @enderror" 
                           id="confirm_pass" 
                           name="password_confirmation" 
                           placeholder="" 
                           required>
                    <label for="confirm_pass">Confirm Password</label>
                    @error('password_confirmation')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-floating">
      <button  class="form-control">sign in</button></div>
      <center>
      <div class='line'>
        <span class='text'>OR</span>
    </div></center>
            </form>
        </div>
    </div>
</div>
@endsection



<!-- David version -->

<!--
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
      <button  class="form-control">Log in</button></div>
      <center>
      <div class='line'>
        <span class='text'>OR</span>
    </div></center>*/
>>>>>>> 46935727354d1fa68175abbbd3f2d672e3d3e5bb
/*