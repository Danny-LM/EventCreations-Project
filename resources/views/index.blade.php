@extends('layouts.master')
@section('content') 


<!-- ---------------------------------------------------------------seccion principal----------------------------------------------------->

<!-- HeroSection -->

<section class="section" id="hero-section">
  <div class="container">
    <div class="container">
      <h1 class="h1-text">
        "Create unique moments<br>quickly and easily."
      </h1>
      <p class="paragraph-text">
        With Event Creations, turn your ideas into unforgettable events<br>with smart organization and unlimited creativity.
      </p>
      <div class="container">
        <button class="btn-primary" style="padding: 6px 48px;" onclick="window.location.href='{{ route('register') }}'">Create Account</button>
        <button class="btn-secondary" style="padding: 6px 48px;">About Us</button>
      </div>
    </div>
    <div class="container">
      <img src="https://placehold.jp/250x250.png" alt="" class="">
    </div>
</div>
</section>

<!-- ---------------------------------------------------------------seccion de servicios----------------------------------------------------->

<seccion class="section" id="welcome">
    <br>
      <div class="Presentation" id="fpresent">
      Create your dream event with our tools!
      </div>
    <br>
</h2>
</section>

<!-- ---------------------------------------------------------------seccion tools----------------------------------------------------->
<!-- Sección de CardTools -->
<section class="section" id="tools">

<div class="cards-container">
  <div class="row g-4">
   
  <div class="col-lg-4 col-md-6">
      <div class="card card-medium">
        <div class="icon">
        <img src="/images/Calendario.svg" alt="Icono Invitations">
        </div>
        <div class="card-body">
          <h5 class="card-title">Interactive Calendar</h5>
          <p class="card-text">Plan and see your events, set reminders, and stay organized.</p>
       </div>
       </div>
 </div>


   <div class="col">
      <div class="card card-medium">
        <div class="icon">
        <img src="/images/Notas.svg" alt="Icono Invitations">
        </div>
        <div class="card-body">
          <h5 class="card-title">Note Blog</h5>
          <p class="card-text">Write notes, save ideas, and keep track of tasks.</p>
        </div>
        </div>
    </div>

    <div class="col">
      <div class="card card-medium">
        <div class="icon">
        <img src="/images/Lista.svg" alt="Icono Invitations">
        </div>
        <div class="card-body">
          <h5 class="card-title">Guest List</h5>
          <p class="card-text">Manage who's coming to your events and get confirmations.</p>
        </div>
      </div>
    </div>

  <div class="col-lg-6 col-md-6">
      <div class="card card-medium">
        <div class="icon">
        <img src="/images/Invitacion.svg" alt="Icono Invitations">
        </div>
        <div class="card-body">
          <h5 class="card-title">Send Invitations</h5>
          <p class="card-text">Send digital invitations via email or social media.</p>
        </div>
    </div>
  </div>
    <div class="col">
      <div class="card card-medium">
        <div class="icon">
        <img src="/images/Fotos.svg" alt="Icono Invitations">
        </div>
        <div class="card-body">
          <h5 class="card-title">Photo Gallery</h5>
          <p class="card-text">In the Premium version, share a link where guests can upload photos and memories.</p>
        </div>
     </div>
  </div>
</div>
</div>
</div>

</section>
<!-- ---------------------------------------------------------------seccion media----------------------------------------------------->

<!-- Sección de Presentacion-->
<section class="section" id ="media">
  <div class="presentation">
        <h1 class="h2-text">Event Creations</h1>
        <h2 class="h3-text">Every detail, perfected to you!</h2>
        <p class="alltext">Facilitate the planning of weddings, birthdays, corporate events and<br>
        more with our comprehesive tool. Manage every detail easily and<br>
        efficiently, while maintaining control at all times.</p>
          <button class="btn-readmore">Read More</button>
</div>
</section>

<!-- ---------------------------------------------------------------seccion de precios----------------------------------------------------->
<!-- Sección de Precios -->
<section class="section" id="pricing-section">
  <div class="container mb-5">
    <h2 class="text-center">Nuestros Planes</h2>
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
