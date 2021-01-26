@extends('layouts.app')

@section('content')


<div class="container">
    @foreach ($articles as $article)
    <div>
        <div class="title">
        <h3><a href="{{ $article->path() }}">{{ $article->title }}</a></h3>
        </div>
        <img src="/images/banner.jpg" alt="" class="img-fluid" />
        <p>{{ $article->excerpt }}</p>
    </div>
    @endforeach
</div>

@endsection
