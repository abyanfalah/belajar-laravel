@extends('layouts.main')


@section('container')            

<div class="card shadow mb-3">
    <div class="card-body">
        <h3>{{ $post["judul"] }}</h3>    
        <small class="text-muted">Oleh: {{ $post["author"] }}</small>
        <p>{{ $post["body"] }}</p>
    </div>
</div>

<a href="/post">Kembali ke daftar postingan</a>


@endsection