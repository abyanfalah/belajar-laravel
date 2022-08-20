@extends('layouts.main')
@php
function title_trim($text)
{
    if (strlen($text) > 80) {
        return Str::substr($text, 0, 80) . '...';
    }
    return $text;
}
@endphp

@section('container')
    <h1 class="text-center">{{ $title }}</h1>


    <form class="input-group mb-3 col-6 mx-auto" action="/post">
        {{-- add category request --}}
        @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
        @endif

        {{-- add author request --}}
        @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
        @endif

        <input type="search" class="form-control" value="{{ trim(request('search')) }}" name="search" placeholder="Search">
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit">
                <img src="/symbols/magnifying-glass.svg">
            </button>
        </div>
    </form>


    @if ($posts->count() > 0)
        <div class="card text-center shadow mb-3">
            @php
                $img = mt_rand(1, 15) . '.jpg';
            @endphp
            <img height="300px" src="/img/{{ $img }}" class="card-img-top" alt="{{ $img }}">
            <div class="card-body">
                <a class="text-decoration-none" href="/post/{{ $posts[0]->slug }}">
                    {{-- <h3>{{ title_trim($posts[0]->title) }}</h3> --}}
                    <h3>{{ $posts[0]->title }}</h3>
                </a>
                <small>
                    By: <a href="/post?author={{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a>
                    <span class="d-block">{{ $posts[0]->created_at->diffForHumans() }}</span>
                    in:
                    {{-- <a href="/post/category/{{ $posts[0]->category->slug }}"> --}}
                    <a href="/post?category={{ $posts[0]->category->slug }}">
                        {{ $posts[0]->category->name }}
                    </a>
                </small>
                <div class="">
                    <p>{{ $posts[0]->excerpt }}</p>
                </div>
                <a class="btn btn-primary	" href="/post/{{ $posts[0]->slug }}">Read more</a>
            </div>
        </div>

        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4">
                    <div class="card mb-3" style="">
                        @php
                            $img = mt_rand(1, 15) . '.jpg';
                        @endphp
                        <div class="position-absolute bg-dark py-1 px-2 text-white"
                            style="background-color: rgba(0, 0, 0, 0.346)">
                            <a class="text-white" href="/post/category/{{ $post->category->slug }}">
                                {{ $post->category->name }}
                            </a>
                        </div>
                        <img height="200px" src="/img/{{ $img }}" class="card-img-top" alt="{{ $img }}">
                        <div class="card-body">
                            <a class="text-decoration-none" href="/post/{{ $post->slug }}">
                                <h5>{{ title_trim($post->title) }}</h5>
                            </a>
                            <small class="text-muted">
                                By: <a href="/post?author={{ $post->user->username }}">{{ $post->user->name }}</a>
                                in:
                                {{-- <a href="/post/category/{{ $post->category->slug }}"> --}}
                                <a href="/post?category={{ $post->category->slug }}">
                                    {{ $post->category->name }}
                                </a>
                                <span class="d-block">{{ $post->created_at->diffForHumans() }}</span>
                            </small>
                            <div class="">
                                <p>{{ $post->excerpt }}</p>
                            </div>
                            <a href="/post/{{ $post->slug }}">Read more...</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="text-center">No post with "{{ request('search') }}" found.</div>
    @endif
    </div>


    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>
@endsection
