@extends('layouts.main')


@section('container') 
<div class="row">
	@foreach ($categories as $category)
		<div class="col-md-4">
			<a href="/post/category/{{ $category->slug }}">
				<div class="card bg-dark text-white">
					<img style="height: 200px" src="/img/category/{{ $category->slug }}.jpg" class="card-img" alt="{{ $category->name }}">
					<div class="card-img-overlay d-flex align-items-center justify-content-center" style="background-color: rgba(0, 0, 0, 0.5)">
						<h5 class="card-title  text-center px-2 py-1 rounded">{{ ucwords($category->name) }}</h5>
					</div>
				</div>
			</a>
		</div>
	@endforeach
</div>

@endsection