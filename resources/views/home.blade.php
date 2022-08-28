@extends('layouts.main')


@section('container')   

  @if(session()->has('message'))
    <div class="alert alert-dismissible alert-success">
      {{ session('message') }}
      <button class="close" data-dismiss="alert">&times;</button>
    </div>
  @endif

@endsection