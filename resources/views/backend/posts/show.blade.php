@extends('backend.layouts.main')

@section('container')

<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">
      <h1 class="mb-3"> {{ $post->title }} </h1>

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
        <a class="btn btn-dark" href="/dashboard/posts">Back to my Posts</a>
        <a class="btn btn-success" href="/dashboard/posts/{{ $post->slug }}/edit">Edit</a>
      </p>
      <form action="/dashboard/posts/{{ $post->slug }}" method="post">
        @method('delete')
        @csrf
        <button class="btn btn-danger" onclick=" return confirm('Are you sure?')">Delete</button>
      </form>
    </div>
  </div>
</div>

@endsection