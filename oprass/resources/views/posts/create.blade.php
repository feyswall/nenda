@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4 mt-lg-5 mt-sm-2 order-sm-1 order-md-1">
            <div class="shadow-none p-3 mb-5 bg-light rounded">
                <h3 class="lead">Hellow Admin</h3>
                <p>Just Make sure that when creating the <strong>POST</strong> In the <small>SLUG</small> Section you
                    Dont Include White Spaces and Numbers</p>
            </div>
        </div>
        <div class="col-md-8 mt-5 shadow p-lg-5 mb-5 bg-white rounded order-sm-0 order-md-1">
            <h1>Create New Post</h1>
            <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                @csrf
                <label for="title">Title:</label>
                <input name="title" id="title" type="text" class="@error('title') is-invalid @enderror form-control">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="slug">Slug:</label>
                <textarea name="slug" id="slug" type="text" class="@error('slug') is-invalid @enderror form-control"></textarea>
                @error('slug')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="body">Posts Body:</label>
                <textarea name="body" id="body" type="text" class="@error('body') is-invalid @enderror form-control"></textarea>
                @error('body')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                  <span class="mt-3 mb-0">Tags:</span>
                  <div class="input-group mb-3 mt-0 ">
                      <select name="tags[]" class="@error('tags') is-invalid @enderror custom-select h-auto" multiple>
                          @foreach( $tags as $tag )
                              <option value="{{ $tag->id }}">{{ $tag->tags }}</option>
                          @endforeach
                      </select>
                  </div>
                @error('tags')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror



                <span class="mt-3 mb-0">Category:</span>
                <div class="input-group mb-3 mt-0 ">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                    </div>
                    <select name="category_id" class="custom-select" id="inputGroupSelect01">
                          @foreach( $categories as $category )
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                              @endforeach
                    </select>
                </div>


                <label for="title">Image:</label>
                <input name="image" id="title" type="file" class="@error('image') is-invalid @enderror form-control-file">
                @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="row justify-conetnt-around">
                    <div class=" col-6"><button type="submit" class="btn btn-success btn-md btn-block mt-2">Create Post</button></div>
                    <div class=" col-6"><a href="{{ route('post.index') }}"><button type="button" class="btn btn-danger btn-md btn-block mt-2">Cancel </button></a> </div>
                </div>

            </form>
        </div>

    </div>

@stop
