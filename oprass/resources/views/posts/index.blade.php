@extends('layouts.app')

@section('content')
    <div class="row align-items-center mt-5">
        <div class="col-md-10">
            <h1>All Posts</h1>
        </div>
        <div class="col-md-2">
            <a href="/post/create" class="btn btn-primary btn-sm btn-block">Create New Post</a>
        </div>
    </div>

    <div class="col-md-12">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Tilte</th>
                <th>Body</th>
                <th>Created At</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
                @foreach ($posts as $post )
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ substr($post->body, 0, 50) }}{{ strlen( $post->body) > 50 ? "..." : "" }}</td>
                        <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
                        <td>
                            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-outline-dark">Edit</a>
                            <a href="{{ route('post.show', $post->id) }}" class="btn btn-outline-dark">View</a>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>
        <div class="row justify-content-center mt-3">
            {!! $posts->links() !!}
        </div>
    </div>
@stop