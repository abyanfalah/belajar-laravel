@extends('layouts.main')


@section('container')            
  <div class="card shadow bg-primary text-white mb-5">
    <div class="card-body">
      <h1>this is the post page</h1>
    </div>
  </div>

  @foreach ($posts as $post)

   
        <div class="card shadow mb-3">
            <div class="card-body">
                <a class="text-decoration-none" href="/post/{{ $post["slug"] }}"> 
                    <h3>{{ $post["judul"] }}</h3>    
                </a>
                <small class="text-muted">Oleh: {{ $post["author"] }}</small>
                <p>{{ $post["body"] }}</p>
            </div>
        </div>

      
  @endforeach

@endsection