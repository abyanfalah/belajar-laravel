@extends('layouts.main')


@section('container')
    <div class="card shadow mb-3">
        <img height="200px" src="/img/{{ mt_rand(1, 15) . '.jpg' }}" alt="img.jpg">
        <div class="card-body">
            <h3>{{ $post->title }}</h3>
            <small class="text-muted">
                By:
                <a href="/post?author={{ $post->user->username }}">{{ $post->user->name }}</a>
                in:
                <a href="/post?category={{ $post->category->slug }}">{{ $post->category->name }}</a></small>
            <p>{!! $post->body !!}</p>
        </div>
    </div>

    <a href="/post">Kembali ke daftar postingan</a>
@endsection
