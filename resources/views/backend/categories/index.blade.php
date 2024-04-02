@extends('backend.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Post Categories</h1>
</div>

@if (session('status'))
<div class="alert alert-success" role="alert">
  {{ session('message') }}
</div>
@endif

<div class="table-responsive small">
  <a href="/dashboard/categories/create" class="btn btn-dark mb-3">Create new post category</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Category Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    @foreach ($categories as $category)
    <tbody>
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $category->name }}</td>
        <td>
          <a href="/dashboard/categories/{{ $category->slug }}">Details</a>
          <a href="/dashboard/categories/{{ $category->slug }}/edit">Edit</a>
          <form action="/dashboard/categories/{{ $category->slug }}" method="post">
            @method('delete')
            @csrf
            <button onclick=" return confirm('Are you sure?')">Delete</button>
          </form>
        </td>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>

@endsection