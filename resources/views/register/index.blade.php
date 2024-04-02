@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-registration w-100 m-auto">

      <!-- Create Post Form -->
      <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
      <form action="/register" method="post">
        @csrf
        <div class="form-floating">
          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" placeholder="Name" required>
          <label for="name">Name</label>
          @error('name')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" id="username" placeholder="Username" required>
          <label for="username">Username</label>
          @error('username')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" placeholder="Email" required>
          <label for="email">Email address</label>
          @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
          <label for="password">Password</label>
          @error('password')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <button class="btn btn-dark w-100 py-2 mt-3" type="submit">Register</button>
      </form>
      <small class="d-block text-center mt-3">Already have account? <a href="/login">Login</a></small>
    </main>
  </div>
</div>

@endsection