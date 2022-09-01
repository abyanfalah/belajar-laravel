@extends('dashboard.main')

@section('container')
    <div class="card shadow mb-3 mx-lg-5">
        <img height="200px" src="/img/{{ mt_rand(1, 15) . '.jpg' }}" alt="img.jpg">
        <div class="card-body">
            <a class="btn btn-primary my-3" href="/dashboard/posts"><i class="bi-arrow-left"></i> Back</a>
            <a class="btn btn-warning my-3" href="#"><i class="bi-pen"></i> Edit</a>
            <a class="btn btn-danger my-3" href="#"><i class="bi-trash"></i> Delete</a>




            <h3>{{ $post->title }}</h3>
            <p>{!! $post->body !!}</p>
        </div>
    </div>
@endsection
