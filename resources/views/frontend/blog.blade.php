@extends('layouts.main')

@section('title', 'Blog')

@section('container')

  @foreach ($posts as $post)
  <article class="mb-5">
      <h1>
        <a href="/blog/{{ $post["slug"] }}">
          {{ $post["title"] }} 
        </a>
      </h1>
      <h5>By: {{ $post["author"] }} </h5>
      <p>{{ $post["body"] }} </p>
  </article>
  @endforeach

@endsection