@extends('layouts.main')


@section('container')            
<ul>
    @foreach ($authors as $author)
        <li>
            <a href="/post/author/{{ $author->username }}">
                <h3>{{ $author->name }}</h3>
            </a>
        </li>
    @endforeach
</ul>


@endsection