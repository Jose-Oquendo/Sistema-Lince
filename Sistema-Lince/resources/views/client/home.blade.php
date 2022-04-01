@extends('layout/index')
@section('title', 'Bienvenido a Lince')
@section('content')
<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{ asset('img/home/presentation1.jpg') }}" class="d-block w-100 img-presentation" alt="foto">
            </div>
            <div class="carousel-item">
            <img src="{{ asset('img/home/presentation2.jpg') }}" class="d-block w-100 img-presentation" alt="...">
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
</section>
<div class="row mt-5">
    <div class="col-md-6">
        <div class="card bg-dark text-white" style="height: 100px;">
            <a href="#"><img src="..." class="card-img" alt="..."></a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card bg-dark text-white" style="height: 100px;">
            <a href="#"><img src="..." class="card-img" alt="..."></a>
        </div>
    </div>
</div>
<div class="row my-3">
    <div class="col-md-4">
        <div class="card bg-dark text-white" style="height: 100px;">
            <a href="#"><img src="..." class="card-img" alt="..."></a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-dark text-white" style="height: 100px;">
            <a href="#"><img src="..." class="card-img" alt="..."></a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-dark text-white" style="height: 100px;">
            <a href="#"><img src="..." class="card-img" alt="..."></a>
        </div>
    </div>
</div>
@endsection