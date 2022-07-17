@extends('layouts.main')

@section('container')
    <h1>Halaman {{ $title }}</h1>
    <div class="card">
        <div class="card-body">
            <h3>{{ $nama }}</h3>
            <img src="/img/{{ $nama }}.jpg" alt="" width="200" class="rounded-circle">
        </div>
    </div>
@endsection