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
    <!-- Start Features -->
    <div class="features py-3">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <i class="fas fa-home fa-2x rounded-circle"></i>
                    <h3>Greate idea</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque dolorum numquam laboriosam est quas.</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <i class="fas fa-drafting-compass fa-2x rounded-circle"></i>
                    <h3>Greate idea</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque dolorum numquam laboriosam est quas.</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <i class="fas fa-cogs fa-2x rounded-circle"></i>
                    <h3>Greate idea</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque dolorum numquam laboriosam est quas.</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <i class="far fa-lightbulb fa-2x rounded-circle"></i>
                    <h3>Greate idea</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque dolorum numquam laboriosam est quas.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features -->

    <!-- Start Overview  -->
    <div class="overview px-5 py-5 text-center">
        <div class="container">
            <h2 class="text-uppercase mb-4">Company Overview</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, incidunt veritatis dicta cumque, accusantium numquam modi delectus consequuntur itaque harum deleniti fugiat laudantium sed cupiditate quia iste laborum! Neque, harum?</p>
            <h4 class="text-capitalize fw-lighter my-4">Lets start Today</h4>
            <button class="text-uppercase btn btn-primary">View More</button>
        </div>
    </div>
    <!-- End Overview  -->

    <!-- Start Featured-Work  -->
    <div class="featured-work text-center p-5">
        <div class="container">
            <h2 class="text-uppercase mb-4">Featured Work</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, et, debitis est itaque nobis animi enim provident dolorem ullam eum officia soluta doloribus explicabo dolorum, magnam odit sint reiciendis porro.</p>

            <ul class="nav my-4 justify-content-center">
                <li class="nav-item active">
                    <a class="nav-link active" aria-current="page" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>

        </div>
        <div class="row">
            @foreach ($articles as $article)
            <div class="col-md">
                <img src="{{ $article->image }}" alt="{{ $article->title }}">
            </div>
            @endforeach
        </div>
    </div>
    <!-- End Featured-Work  -->


</div>
@endsection
