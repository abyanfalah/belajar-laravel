@extends('layouts.login')

@section('form')

  
   <form class="form-signin col-md-5 mx-auto">
      <h1 class="h3 mb-3 font-weight-normal text-center">Welcome back!</h1>
      
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
   </form>
   <div class="d-block text-center">
      <small>
         Unregistered?
         <a href="/registration">Register here!</a>
      </small>
   </div>
@endsection