@extends('layout')

@section('content')

<div class="container">
    <div class="title">
        <h2>{{ $article->title }}</h2>
        <span class="text-muted">Mauris vulputate dolor sit amet nibh</span> </div>
    </div>
    <img src="/images/banner.jpg" alt="" class="img-fluid" />
    <p>{{ $article->body }}</p>
</div>
@endsection
