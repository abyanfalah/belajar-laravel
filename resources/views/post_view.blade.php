@extends('layouts.main')


@section('container')            

<div class="card shadow mb-3">
    <div class="card-body">
        <h3>{{ $post->title }}</h3>    
        <small class="text-muted">
            By: 
            <a href="/post/author/{{ $post->user->name }}">{{ $post->user->name }}</a>
            in: 
            <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></small>
        <p>{{ $post->body }}</p>
    </div>
</div>

<a href="/post">Kembali ke daftar postingan</a>


@endsection