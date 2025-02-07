@extends('layouts.master')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="https://placehold.jp/1600x500.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="https://placehold.jp/1600x500.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="https://placehold.jp/1600x500.png" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    <div class='container'>
        <div class="rows">
            <div class='col-3'>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat id nemo alias debitis optio numquam eligendi voluptatem doloribus natus! Adipisci cupiditate quidem voluptate voluptates, accusamus totam numquam minus harum eius!
            </div>
            <div class='col-3'>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat id nemo alias debitis optio numquam eligendi voluptatem doloribus natus! Adipisci cupiditate quidem voluptate voluptates, accusamus totam numquam minus harum eius!
            </div>
            <div class='col-3'>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat id nemo alias debitis optio numquam eligendi voluptatem doloribus natus! Adipisci cupiditate quidem voluptate voluptates, accusamus totam numquam minus harum eius!
            </div>
            <div class='col-3'>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat id nemo alias debitis optio numquam eligendi voluptatem doloribus natus! Adipisci cupiditate quidem voluptate voluptates, accusamus totam numquam minus harum eius!
            </div>
        </div>
    </div>
@endsection