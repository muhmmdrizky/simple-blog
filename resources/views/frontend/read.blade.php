@extends('layouts.main')

@section('title', 'Read')

@section('container')
<article>
  <h1> {{ $post['title'] }} </h1>
  <h5> {{ $post['author'] }} </h5>
  <p> {{ $post['body'] }} </p>
</article>
<a href="/blog">Back to Blog</a>
@endsection
