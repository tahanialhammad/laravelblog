@extends('layouts.app')

@section('content')

<div class="container">
    <div class="title">
        <h2>{{ $article->title }}</h2>
        <span class="text-muted">Posted by {{ $article->user->name }} </span>
    </div>
</div>
<img src="{{ $article->image }}" alt="{{ $article->title }}" class="img-fluid" />
<p>{{ $article->body }}</p>

<p>
    @foreach ($article->tags as $tag)
    <a href="{{ route('articles.index', [ 'tag'=> $tag->name ]) }}">{{ $tag->name }}</a>
    @endforeach
</p>

@can ('update-article', $article)
<form action="/articles/{{ $article->id }}/edit" method="GET">
    @csrf
    <button class="btn btn-primary">Upadet Article</button>
</form>

@endcan
</div>
@endsection
