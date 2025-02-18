@extends('layouts.master')
@section('content')

<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

<section class="section" id="Test-Section">
  <div class="container">
    <h1>Test Buttons</h1>
    <div>
        <a href="#" class="btn-primary">Primary Button</a>
    </div>
    <div>
        <a href="#" class="btn-secondary">Secondary Button</a>
    </div>
    <div>
        <a href="#" class="btn-tertiary">Tertiary Button</a>
    </div>
    <div>
        <a href="#" class="btn-quaternary">Quaternary Button</a>
    </div>
  </div>
</section>

@endsection