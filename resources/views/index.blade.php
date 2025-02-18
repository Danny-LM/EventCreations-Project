@extends('layouts.master')
@section('content')


<section class="section" id="Hero-Section">
  <div class="container">
    <div class="container">
      <h1 class="h1-text">
        "Create unique moments<br>quickly and easily."
      </h1>
      <p class="paragraph-text">
        With Event Creations, turn your ideas into unforgettable events<br>with smart organization and unlimited creativity.
      </p>
      <div class="container">
        <button class="btn btn-primary" onclick="window.location.href='{{ route('register') }}'">Create Account</button>
        <button class="btn btn-secondary">About Us</button>
      </div>
    </div>
    <div class="container">
      <img src="https://placehold.jp/250x250.png" alt="" class="">
    </div>
</div>
</section>
<h2 class=""style="text-align: center;">
    <br>
     <br>
      <em>Create your dream event with our tools!</em><br>
      
      </h2>
<!-- Para corregir bien lo de arriba (luego)
<section class="section" id="Hero-Section">
  <div class="container">
    <h1 class="">
      "Create unique moments<br>
      quickly and easily."
    </h1>
    <p class="">
      The ideal platform to plan and organize your events efficiently!
    </p>
  </div>
  <div class="container">
    <button class="">Create Account</button>
    <button class="">About Us</button>
  </div>
</section> -->

<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>


  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>


  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>


  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
<!-- ---------------------------------------------------------------seccion media----------------------------------------------------->


<!-- ---------------------------------------------------------------seccion de precios----------------------------------------------------->
<!-- Sección de Precios -->
 <br>

<section class="section" id="pricing-section">
  <div class="container mb-5">
    <h2 class="text-center mb-5">Nuestros Planes</h2>
    <div class="row justify-content-center"> <!-- Asegura que las columnas se centren -->
    
    
    <!-- Plan Básico -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card shadow-sm">
          <div class="card-body text-center">
            <h5 class="card-title">Plan Básico</h5>
            <p class="card-text">Ideal para pequeños proyectos.</p>
            <h3>$10 / mes</h3>
            <a href="#" class="btn btn-primary mt-3">Get Started</a>
          </div>
        </div>
      </div>

      <!-- Plan Básico -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card shadow-sm">
          <div class="card-body text-center">
            <h5 class="card-title">Plan Básico</h5>
            <p class="card-text">Ideal para pequeños proyectos.</p>
            <h3>$10 / mes</h3>
            <a href="#" class="btn btn-primary mt-3">Get Started</a>
          </div>
        </div>
      </div>
@endsection
