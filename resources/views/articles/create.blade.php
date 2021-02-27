@extends('layouts.app')

@section('content')

<div class="container">
<h3>Create new article</h3>

<form method="POST" action="/articles">
<!-- Cross-site request forgery -->
@csrf
  <div class="mb-3">
    <label for="titleInput" class="form-label">Article Title</label>
    <input type="text" class="form-control" id="titleInput" name="title" required>
  </div>
  <div class="mb-3">
    <label for="excerpTextarea" class="form-label">Article excerpt</label>
    <textarea class="form-control" id="excerpTextarea" name="excerpt" rows="3" required></textarea>
  </div>
  <div class="mb-3">
    <label for="bodyTextarea" class="form-label">Article</label>
    <textarea class="form-control" id="bodyTextarea" name="body" rows="3" required></textarea>
  </div>

  <div class="mb-3">
    <select class="form-select" aria-label="Select Tags" name="tags[]" multiple>
        @foreach ($tags as $tag)
        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
        @endforeach
    </select>
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>

@endsection
