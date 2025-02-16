@extends('layouts.master')
@section('content')

<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

<h1 style="display: flex; justify-content: center; align-items: center; height: 20vh; text-align: center;">TEST PAGE</h1>

<section class="section" id="Test-Texts">
  <div class="container">
    <h2>Test Texts</h2>

    <div>
      <h2>Heading 2</h2>
    </div>
    <div>
      <h2>Heading 2</h2>
    </div>
    <div>
      <h2>Heading 2</h2>
    </div>
    <div>
      <h2>Heading 2</h2>
    </div>
  </div>  
</section>

<section class="section" id="Test-Buttons">
  <div class="container">
    <h2>Test Buttons</h2>

    <div>
        <a href="#" class="btn-primary">Primary Button</a>
    </div>
    <br>
    <div>
        <a href="#" class="btn-secondary">Secondary Button</a>
    </div>
    <br>
    <div>
        <a href="#" class="btn-tertiary">Tertiary Button</a>
    </div>
    <br>
    <div>
        <a href="#" class="btn-quaternary">Quaternary Button</a>
    </div>
  </div>
</section>

@endsection