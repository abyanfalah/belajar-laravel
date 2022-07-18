@extends('layouts.main')


@section('container') 
<h3>Post with category: {{ $category->name }}</h3>           
<ul>
    @foreach ($posts as $p)
        <div class="card shadow mb-3">
            <div class="card-body">
                <a class="text-decoration-none" href="/post/{{ $p->slug }}"> 
                    <h3>{{ $p->title }}</h3>    
                </a>
                <h5>By: <a href="/post/author/{{ $p->user->name }}">{{ $p->user->name }}</a></h5>
                <small class="text-muted">
                <span class="d-block">{{ $p->created_at }}</span>
                </small>
                <p>{{ $p->excerpt }}</p>
            </div>
        </div>
    @endforeach
</ul>


@endsection