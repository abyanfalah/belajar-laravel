@extends('layouts.main')
@php
	function title_trim($text){
		if (strlen($text) > 40 ) {
			return Str::substr($text, 0, 40)."...";
		}
		return $text;	
	}
@endphp

@section('container')            

<h1>{{ $title }}</h1>


@if ($posts->count() > 0)
<div class="card text-center shadow mb-3">
	@php
		$img = mt_rand(1, 15).'.jpg';
	@endphp
	<img height="300px" src="/img/{{ $img }}" class="card-img-top" alt="{{ $img }}">
	<div class="card-body">
			<a class="text-decoration-none" href="/post/{{ $posts[0]->slug }}"> 
					<h3>{{ title_trim($posts[0]->title) }}</h3>    
			</a>
			<small>
				By: <a href="/post/author/{{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a>
				<span class="d-block">{{ $posts[0]->created_at->diffForHumans() }}</span>
				in:
				<a href="/post/category/{{ $posts[0]->category->slug }}">
				 {{ $posts[0]->category->name }}
				</a>
			</small>
			<div class="">
				<p>{{ $posts[0]->excerpt }}</p>
			</div>
			<a class="btn btn-primary	" href="/post/{{ $posts[0]->slug }}">Read more</a>
	</div>
</div>       

<hr>
@else
	<p class="text-center display-3">No post found.</p>
@endif

<div class="row">
	@foreach ($posts->skip(1) as $post)
		<div class="col-md-4">
			<div class="card mb-3" style="">
				@php
					$img = mt_rand(1, 15).'.jpg';
				@endphp
				<div class="position-absolute bg-dark py-1 px-2 text-white" style="background-color: rgba(0, 0, 0, 0.346)">
					<a class="text-white" href="/post/category/{{ $post->category->slug }}">
						{{ $post->category->name }}
					</a>
				</div>
				<img height="200px" src="/img/{{ $img }}" class="card-img-top" alt="{{ $img }}">
				<div class="card-body">
						<a class="text-decoration-none" href="/post/{{ $post->slug }}"> 
							<h3>{{ title_trim($post->title) }}</h3>    
						</a>
						<small class="text-muted">
							By: <a href="/post/author/{{ $post->user->username }}">{{ $post->user->name }}</a>
							in:
							<a href="/post/category/{{ $post->category->slug }}">
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
</div>

@endsection