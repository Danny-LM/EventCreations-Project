@extends('layouts.master')
@section('content')

<style>
     /* Sección principal */
     #Hero-Section {
    text-align: center;
    padding: 60px 20px;
    background-color: #221D4F;
    color: white;
     }
  .rectangle {
    width: 1342px;
    height: 100px;
    background-color: #221D4F;
    margin: 0 auto;
  .content-background{
    background-color:rgb(0, 0, 0)
  }
  }
  </style>


<section class="section" id="Hero-Section">
  <div class="container">
    <h1 class=""style="text-align: left;">
    <br>
    <div class="rectangle,"></div> 
    <br>
      "Create unique moments<br>
      quickly and easily."
      <br>
      <br>
    </h1>
    <p class=""style="text-align: left;">

      "With Event Creations, turn your ideas into unforgettable events <br>
      with smart organization and unlimited creativity.
      <br>
      <br>
    </p>
  </div>
  <div class="container"style="text-align: left;"> 
  <button class="btn-rounded" 
        style="margin: 40px; border-radius: 30px; padding: 5px 40px; background: rgb(165, 105, 200);
        color: white; font-wight:bolt;" 
        onclick="window.location.href='{{ route('register') }}'">
  Create Account
</button>

<button class="btn-rounded" style="border-radius: 40px; padding: 5px 40px;">
  About Us
</button>

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