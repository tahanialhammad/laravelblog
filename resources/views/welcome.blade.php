@extends('layouts.app')

@section('content')

<div class="landingPage">
    <!-- Start Slider -->
    <div class="slider">
        <div id="main-slider" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#main-slider" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#main-slider" data-bs-slide-to="1"></li>
                <li data-bs-target="#main-slider" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner d-flex align-items-center">
                <h1 class="ms-5">Laravel Blog Project tijdenes<br> Bootcamp van <span>CodeGorilla</span><br>2021</h1>
                <div class="overlay"></div>
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1566450653303-2614cbb292ea?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=80" alt="" class=" w-100">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1587502537745-84b86da1204f?ixid=MXwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="d-block w-100" alt="...">
                </div>
            </div>

        </div>
    </div>
    <!-- End Slider -->
</div>


@endsection
