@extends('dashboard.main')

@section('container')
    <h1 class="h2">My post</h1>

    <a class="btn btn-success my-3" href="/dashboard/posts/create">
        <i class="bi-plus"></i>
        Create new post
    </a>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>
                    <a class="btn btn-sm btn-primary" href="/dashboard/posts/{{ $post->slug }}"><i
                    class="bi-eye"></i></a>

                    <a class="btn btn-sm btn-warning" href="#"><i
                    class="bi-pen"></i></a>

                    <a class="btn btn-sm btn-danger" href="#"><i
                    class="bi-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
