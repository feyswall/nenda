@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-start">
            <div class="col-md-8">
                @if (session('success'))
                    <div class="alert alert-success">{{ session()->get('success') }}</div>
                @endif
                <h1>Tags</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Created In</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $tags as $tag )
                        <tr>
                            <td scope="row">{{ $tag->id }}</td>
                            <td>{{ $tag->tags }}</td>
                            <td>{{ date('d M, Y', strtotime($tag->created_at)) }}</td>
                            <td>
                          <form method="post" action="{{ route('tags.destroy', $tag->id) }}">
                              @csrf
                              @method('DELETE')
                              <a href="{{ route('tags.show', $tag->id) }}" class="btn btn-sm btn-outline-dark">Show</a>
                              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                              </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!-- end col-8 -->
            <div class="col-md-4  shadow p-3 mb-5 bg-white rounded">

                @if ( session()->has('tag'))
                    <h2 class="text-danger">{{ session()->get('tag', '') }}</h2>
                @endif
                <div class="well">
                    <h5><i>Create New Tag</i></h5>
                    <form method="POST" action="{{ route('tags.store') }}">
                        @csrf
                        <label for="tag">Tag Title</label>
                        <input name="tag" id="tag" type="text" class="@error('tag') is-invalid @enderror form-control">
                        @error('category')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="btn btn-primary btn-block mt-2">Save Tag</button>
                    </form>
                </div>

            </div><!-- end of col-3 -->
        </div>
    </div>
@stop