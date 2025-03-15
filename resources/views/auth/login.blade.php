@extends('layouts.app')

@section('content')
<link href="{{ asset('css/form.css') }}" rel="stylesheet">

<div class= 'container'>
<h1> Log in</h1>
 <div class="row g-2">
  <div class="col-md">
  <form action="{{ route('login') }}" method="POST">
  @csrf
      <div class="form-floating">   
      <input type="text" class="form-control" id="email" name="email" placeholder=" " value="">
      <label for="username">Your username</label></div>
      
      <div class="form-floating">
      <input type="password" class="form-control" id="password" name="password" placeholder="" value="">
      <label for="password">Your Password</label></div>
      

      <div class="form-floating">
      <button type="submit" class="form-control">Log in</button></div>
      <center>
      <div class='line'>
        <span class='text'>OR</span>
    </div></center>
    @if ($errors->any())
                    <div class="alert alert-danger mt-2">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>

            <center>
                <div class='line'>
                    <span class='text'>OR</span>
                </div>
            </center>
        </div>
    </div>
</div>@endsection