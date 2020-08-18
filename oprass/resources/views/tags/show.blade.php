
@extends('layouts.app')

@section('content')
<div class="mt-lg-5 mt-sm-1">
  @if (session('success'))
    <div class="alert alert-success">{{ session()->get('success') }}</div>
  @endif
</div>
  <div class="row mt-lg-5 mt-sm-1">
    <div class="col-md-8">
      {{--<h3><i class="text-info">{{ $tag->tags }} </i>Tag </h3><small>{{ $tag->posts()->count() }}</small>_Posts--}}
    </div>
    <div class="col-md-2 col-md-offset-2">
      <a href="{{ route('tags.edit', $tag->id) }}" class=" btn btn-primary pull-right btn-block">
        Edit
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <table class="table">

        <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Tags</th>
          <th></th>
        </tr>
        </thead>

        <tbody>
        {{--@foreach($tag->posts as $post )--}}
          {{--<tr>--}}
            {{--<td>{{ $post->id }}</td>--}}
            {{--<td>{{$post->title}}</td>--}}
            {{--<td>--}}
              {{--@foreach( $post->tags as $tag )--}}
                {{--<span class="btn btn-sm btn-dark" disabled="disabled">{{ $tag->tags }}</span>--}}
                {{--@endforeach--}}
            {{--</td>--}}
          {{--</tr>--}}
          {{--@endforeach--}}
        </tbody>
      </table>
    </div>
  </div>
@stop