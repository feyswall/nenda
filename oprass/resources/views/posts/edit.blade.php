@extends('main')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-lg-center">
            <div class="col-md-8 mr-lg-1 col-sm-8 col-xs-12 shadow-lg p-lg-5 p-sm-2 mb-5 bg-white rounded">
                <h4><i>Edit Your Post And Save Changes To Complete</i></h4>
                <form class="form-group" method="POST" action="{{ route('posts.update', $post->id ) }}">
                  @csrf
                    @method('PATCH')
                 <div>
                     <label for="title">Title:</label>
                     <input name="title" value="{{ $post->title }}" id="title" type="text" class="@error('title') is-invalid @enderror form-control">
                     @error('title')
                     <div class="alert alert-danger">{{ $message }}</div>
                     @enderror
                 </div>

                    <div>
                        <label for="slug">Slug:</label>
                        <input name="slug" value="{{ $post->slug }}" id="slug" type="text" class="@error('slug') is-invalid @enderror form-control">
                        @error('slug')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <span class="mt-3 mb-0">Tags:</span>
                        <div class="input-group mb-3 mt-0 ">
                            <select name="tags[]" class="@error('tags') is-invalid @enderror custom-select h-auto" multiple>
                                {{--@foreach( $tags as $tag )--}}
                                    {{--<option value="{{ $tag->id }}" >{{ $tag->tags }}</option>--}}
                                {{--@endforeach--}}
                            </select>
                        </div>
                        @error('tags')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                 <div>
                     <label class="form-spacing-top" for="body">Body:</label>
                     <textarea name="body" id="body" type="text" class=" @error('body') is-invalid @enderror form-control input-lg">{{ $post->body }}</textarea>
                     @error('body')
                     <div class="alert alert-danger">{{ $message }}</div>
                     @enderror
                 </div>

                <div>
                    <span class="mt-3 mb-0">Category:</span>
                    <div class="input-group mb-3 mt-0 ">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                        </div>
                        <select name="category_name" class="custom-select" id="inputGroupSelect01">
                            {{--@foreach( $categories as $cat )--}}
                                {{--<option value="{{ $cat->id }}" {{ $cat->id == $post->category->id ? "selected" : "" }}>{{ $cat->name }}</option>--}}
                            {{--@endforeach--}}
                        </select>
                    </div>
                </div>

            </div>


            <div class="col-md-4">
                <div class="jumbotron-fluid">
                    <dl class="dl-horizontal">
                        <dt>Create At</dt>
                        <dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
                    </dl>
                    <dl class="dl-vertical">
                        <dt>Last Updated</dt>
                        <dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
                    </dl>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="{{ route('posts.show', $post->id ) }}" class="btn btn-primary btn-sm btn-block">Cancel</a>
                        </div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn btn-danger btn-sm btn-block">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        </div>
    </div>
@stop