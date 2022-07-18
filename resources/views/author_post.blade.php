@extends('layouts.main')


@section('container')            
  <h3>Posts by: {{ $user->name }}</h3>

  @foreach ($posts as $post)
        <div class="card shadow mb-3">
            <div class="card-body">
                <a class="text-decoration-none" href="/post/{{ $post->slug }}"> 
                    <h3>{{ $post->title }}</h3>    
                </a>
                <h5>By: {{ $post->user->name }}</h5>
                <small class="text-muted">
                  <span class="d-block">{{ $post->created_at }}</span>
                  in:
                  <a href="/categories/{{ $post->category->slug }}">
                   {{ $post->category->name }}
                  </a>
                </small>
                <p>{{ $post->excerpt }}</p>
            </div>
        </div>
  @endforeach

@endsection