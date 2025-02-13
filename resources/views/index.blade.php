@extends('layouts.master')
@section('content')

/*Rectangulo de fondo inicial*/ 
<style>
  .rectangle {
    width: 200px;
    height: 100px;
    background-color: 221D4F;
    margin: 0 auto;
  }
  </style>

<section class="section" id="Hero-Section">
  <div class="container">
    <h1 class="">
    <br>
    <div class="rectangle"></div> 
    <br>
      "Create unique moments<br>
      quickly and easily."
      <br>
      <br>
    </h1>
    <p class="">

    With Event Creations, turn your ideas into unforgettable events <br>
    with smart organization and unlimited creativity.
      <br>
      <br>
    </p>
  </div>
  <div class="container"> 
  <button class="btn-rounded"style="margin: 10px; border-radius: 8px;"onclick="window.location.href='{{ route('register') }}'">Create Account</button>
  <button class="btn-rounded"style="border-radius: 8px;">About Us</button>

  </div>
</section>
<br>
<br>
<br>
<section class="section" id="Section-2">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi possimus aut, animi distinctio et officiis sequi ex iure ut fugit, harum repellat, nihil nostrum esse inventore itaque! Ipsam, cum magnam?
      </div>
    </div>
  </div>
</section>
<section class="section" id="Section-3">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi possimus aut, animi distinctio et officiis sequi ex iure ut fugit, harum repellat, nihil nostrum esse inventore itaque! Ipsam, cum magnam?
      </div>
    </div>
  </div>
</section>
<section class="section" id="Section-4">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi possimus aut, animi distinctio et officiis sequi ex iure ut fugit, harum repellat, nihil nostrum esse inventore itaque! Ipsam, cum magnam?
      </div>
    </div>
  </div>
</section>
<section class="section" id="Section-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi possimus aut, animi distinctio et officiis sequi ex iure ut fugit, harum repellat, nihil nostrum esse inventore itaque! Ipsam, cum magnam?
      </div>
    </div>
  </div>
</section>
<section class="section" id="Section-6">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi possimus aut, animi distinctio et officiis sequi ex iure ut fugit, harum repellat, nihil nostrum esse inventore itaque! Ipsam, cum magnam?
      </div>
    </div>
  </div>
</section>
<section class="section" id="Section-7">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi possimus aut, animi distinctio et officiis sequi ex iure ut fugit, harum repellat, nihil nostrum esse inventore itaque! Ipsam, cum magnam?
      </div>
    </div>
  </div>
</section>
@endsection