@extends('layouts.main')


@section('container')            


<a class="d-block" href="/categories">Categories</a>
<a class="d-block" href="/authors">Authors</a>



  @foreach ($posts as $post)
        <div class="card shadow mb-3">
            <div class="card-body">
                <a class="text-decoration-none" href="/post/{{ $post->slug }}"> 
                    <h3>{{ $post->title }}</h3>    
                </a>
                <h5>By: <a href="/post/author/{{ $post->user->username }}">{{ $post->user->name }}</a></h5>
                <small class="text-muted">
                  <span class="d-block">{{ $post->created_at }}</span>
                  in:
                  <a href="/post/category/{{ $post->category->slug }}">
                   {{ $post->category->name }}
                  </a>
                </small>
                <p>{{ $post->excerpt }}</p>
            </div>
        </div>
  @endforeach

@endsection