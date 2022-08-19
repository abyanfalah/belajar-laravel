@extends('layouts.main')


@section('container')
    <div class="row">
        @foreach ($authors as $author)
            <div class="col" style="width: 300px; height: 300px">
                <a href="/post?author={{ $author->username }}">
                    <div class="card">
                        <img src="/img/author/{{ $author->id }}.jpg" alt="{{ $author->name }}" class="card-img">
                        <div class="card-img-overlay d-flex align-items-end p-0">

                        </div>
                        <span class="bg-transparent py-1 px-2 ">
                            {{ ucwords($author->name) }}
                        </span>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
