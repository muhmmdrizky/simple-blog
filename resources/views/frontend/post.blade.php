@extends('layouts.main')

@section('title', 'Read')

@section('container')

<div class="container">
  <div class="row justify-content-center mb-5">
    <div class="col-md-8">
      <h1 class="mb-3"> {{ $post->title }} </h1>
      <p>
        By: <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a>
        Category: <a href="/posts?category={{ $post->category->slug }}"> {{ $post->category->name }}</a>
      </p>

      @if ($post->image)
      <div class="max-height:350px; overflow:hidden;">
        <img class="img-fluid" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
      </div>
      @else
      <img class="img-fluid" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}">
      @endif

      <article class="my-3 fs-5">
        {!! $post->body !!}
      </article>
      <p>
        <a href="/posts">Back to Blog</a>
      </p>
    </div>
  </div>
</div>

@endsection