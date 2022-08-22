@extends('layouts.login')

@section('form')


<form action="/registration" method="post" class="form-signin col-md-5 mx-auto">
   @csrf

   <h1 class="h3 mb-3 font-weight-normal text-center">Register</h1>

   <label class="sr-only">Name</label>
   <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name"  autofocus value="{{ old('name') }}">
   @error('name')
      <div class="invalid-feedback">
         {{ $message }}
      </div>
   @enderror


   <label class="sr-only">Username</label>
   <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username"  autofocus value="{{ old('username') }}">
   @error('username')
      <div class="invalid-feedback">
         {{ $message }}
      </div>
   @enderror

	<label for="inputEmail" class="sr-only">Email address</label>
   <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address"  autofocus value="{{ old('email') }}">
   @error('email')
      <div class="invalid-feedback">
         {{ $message }}
      </div>
   @enderror

   <label for="" class="sr-only">Password</label>
   <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password"  autofocus >
   @error('password')
      <div class="invalid-feedback">
         {{ $message }}
      </div>
   @enderror

   <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
</form>
<div class="d-block text-center">
   <small>
      Already have account?
      <a href="/login">Login</a>
   </small>
</div>
@endsection