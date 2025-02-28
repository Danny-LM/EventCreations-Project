@extends('layouts.app')

@section('content')
<link href="{{ asset('css/form.css') }}" rel="stylesheet">

<div class= 'container'>
<h1> Log in</h1>
 <div class="row g-2">
  <div class="col-md">
    
      <div class="form-floating">   
      <input type="text" class="form-control" id="username" placeholder=" " value="">
      <label for="username">Your username</label></div>
      
      <div class="form-floating">
      <input type="password" class="form-control" id="pass" placeholder="" value="">
      <label for="pass">Your Password</label></div>
      

      <div class="form-floating">
      <button  class="form-control">Log in</button></div>
      <center>
      <div class='line'>
        <span class='text'>OR</span>
    </div></center>

     
  </div>
 </div>
</div>
@endsection
