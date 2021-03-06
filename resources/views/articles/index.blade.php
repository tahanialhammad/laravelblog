@extends('layouts.app')

@section('content')

<!-- Start Article -->
<div class="container card-group article">
    @foreach ($articles as $article)
    <div class="col-md-6 p-2">
        <div class="card bg-dark text-white" >
        <div class="overlay"></div>
            <img src="{{ $article->image }}" class="card-img" style="height: 15rem;" alt="{{ $article->title }}">
            <div class="card-img-overlay" style="z-index: 3;">
                <h3><a href="{{ $article->path() }}">{{ $article->title }}</a></h3>
                <p class="card-text">{{ $article->excerpt }}</p>
                <p class="card-text text-muted">Last updated {{$article->updated_at}}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
<!-- End Article -->

@endsection
