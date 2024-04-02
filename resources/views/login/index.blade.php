@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-md-5">
    <main class="form-signin w-100 m-auto">
      @if (session('status'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if (session('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
      <form action="/login" method="post">
        @csrf
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" placeholder="name@example.com" autofocus required>
          <label for="email">Email address</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
        <button class="btn btn-dark w-100 py-2" type="submit">Login</button>
      </form>
      <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now!</a></small>
    </main>
  </div>
</div>

@endsection