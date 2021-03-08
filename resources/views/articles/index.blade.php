@extends('layouts.app')

@section('content')

<!-- Start Article -->
<div class="container">
    @foreach ($articles as $article)
    <div>
        <div class="title">
            <h3><a href="{{ $article->path() }}">{{ $article->title }}</a></h3>

        </div>
        <img src="{{ $article->image }}" alt="{{ $article->title }}" class="img-fluid" />
        <p>{{ $article->excerpt }}</p>
    </div>
    @endforeach
</div>
<!-- End Article -->

@endsection
