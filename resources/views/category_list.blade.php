@extends('layouts.main')


@section('container')            
<ul>
    @foreach ($categories as $cat)
        <li>
            <a href="/post/category/{{ $cat->slug }}">
                <h3>{{ $cat->name }}</h3>
            </a>
        </li>
    @endforeach
</ul>


@endsection