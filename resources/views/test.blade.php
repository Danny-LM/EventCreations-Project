@extends('layouts.master')
@section('content')

<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

<section class="section" id="Test-Section">
  <div class="container">
    <h1>Test Buttons</h1>
    <div>
        <h2>Primary Button %</h2>
        <a href="#" class="btn-primary">Primary Button</a>
    </div>
    <div>
        <h2>Secondary Button %</h2>
    </div>
    <div>
        <h2>Tertiary Button %</h2>
    </div>
    <div>
        <h2>Quaternary Button %</h2>
    </div>
    <a href="#" class="btn-secondary">Secondary Button</a>
    <a href="#" class="btn-tertiary">Tertiary Button</a>
    <a href="#" class="btn-quaternary">Quaternary Button</a>
  </div>
</section>

@endsection