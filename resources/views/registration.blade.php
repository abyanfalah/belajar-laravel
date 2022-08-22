@extends('layouts.login')

@section('form')


<form action="/register" method="post" class="form-signin col-md-5 mx-auto">
   <h1 class="h3 mb-3 font-weight-normal text-center">Register</h1>

   <label class="sr-only">Name</label>
   <input type="text" name="name" class="form-control" placeholder="Name" required autofocus>

   <label class="sr-only">Username</label>
   <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>

	<label for="inputEmail" class="sr-only">Email address</label>
   <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

   <label for="" class="sr-only">Password</label>
   <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>

   <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
</form>
<div class="d-block text-center">
   <small>
      Already have account?
      <a href="/login">Login</a>
   </small>
</div>
@endsection