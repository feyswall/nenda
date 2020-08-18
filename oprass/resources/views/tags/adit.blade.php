

@extends('layouts.app')

@section('content')
    <div class="container mt-lg-5">
        <div class="row justify-content-center">
            <div class="col-md-8">


                <div class="shadow p-3 mb-5 bg-white rounded">
                    <h4 class="lead mb-lg-3">Edit your Tags</h4><hr>

                    <form method="POST" action="{{ route('tags.update', $tag->id ) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="tags" class="col-md-4 col-form-label text-md-right">{{ __('Tag Name') }}</label>
                            <div class="col-md-6">
                                <input id="tag" type="text" class="form-control @error('tag') is-invalid @enderror" name="tag" required >
                                @error('tag')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <button class="btn btn-success mt-lg-1 btn-block" type="submit">Save Changes</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
@stop