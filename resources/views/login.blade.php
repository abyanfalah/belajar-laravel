@extends('layouts.login')

@section('form')
    <form class="form-signin col-md-5 mx-auto" action="/login" method="post">
        @csrf

        @if (session('registration_message'))
            <div class="alert alert-success alert-dismissable text-center" style="max-width: 330px">
                {{ session('registration_message') }}
                <button class="close" data-dismiss="alert">&times;</button>
            </div>
        @endif

        @if (session('loginMessage'))
            <div class="alert alert-danger alert-dismissable text-center" style="max-width: 330px">
                {{ session('loginMessage') }}
                <button class="close" data-dismiss="alert">&times;</button>
            </div>
        @endif
        <h1 class="h3 mb-3 font-weight-normal text-center">Welcome back!</h1>

        <label for="inputEmail" class="sr-only">Username</label>
        <input name="username" type="text" class="form-control @error('username') is-invalid @enderror"
            placeholder="Username" autofocus>
        @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror



        <label for="inputPassword" class="sr-only">Password</label>
        <input name="password" type="password" id="inputPassword"
            class="form-control @error('password') is-invalid @enderror" placeholder="Password">
        @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror



        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    </form>
    <div class="d-block text-center">
        <small>
            Unregistered?
            <a href="/registration">Register here!</a>
        </small>
    </div>
@endsection
