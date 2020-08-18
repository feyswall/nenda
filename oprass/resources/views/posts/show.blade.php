

@extends('layouts.app')

@section('content')
  <div class="container mt-5">
      <div class="row">
          <div class="col-md-8 col-sm-8 col-xs-12">
                 @if ( session()->has('in') )
                  <div class="alert alert-success">{{ session()->get('in')  }}</div>
                 @endif
                     @if ( session()->has('success') )
                         <div class="alert alert-success">{{ session()->get('success')  }}</div>
                     @endif

              <div class="col-md-12 "></div>
              <h1>{{ $post->title }}</h1>
              <p class="lead">{{ $post->body }}</p>
                     @foreach( $post->tags as $tag )
                            <button class="btn btn-sm btn-dark mt-sm-1" disabled="disabled"> {{ $tag->tags }}</button>
                         @endforeach
              <!-- Space for input the tags-->

              <!-- Tags are over right here -->

              {{--<div id="backend-comment" style="margin-top: 50px">--}}
                   {{--<div class="row"><h5>Comments:_  </h5><small class="align-self-center">  {{ $post->comments()->count() }} total</small></div>--}}
              {{--</div>--}}
              <table class="table">
                  <thead>
                  <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Comment</th>
                      <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  {{--@foreach( $post->comments as $comment )--}}
                  {{--<tr>--}}
                      {{--<td>{{ $comment->name }}</td>--}}
                      {{--<td>{{ $comment->email }}</td>--}}
                      {{--<td>{{ $comment->comment }}</td>--}}
                      {{--<td>--}}
{{--                      <a href="{{ route("comments.edit", $comment->id ) }}" class="btn btn-sm btn-primary">--}}
{{--                          <span class="glyphicon glyphicon-pencil">edit</span>--}}
                      {{--</a>--}}
                      {{--<a class="btn btn-sm btn-danger" href="#">--}}
                          {{--<span class="glyphicon glyphicon-trash">Delete</span>--}}
                      {{--</a>--}}
                      {{--</td>--}}
                  {{--</tr>--}}
                      {{--@endforeach--}}
                  </tbody>
              </table>

          </div>
          <div class="col-md-4">
              <div class="jumbotron-fluid">

                  <dl class="dl-horizontal">
                      <dt><b>url</b></dt>
                      <dd><a href="#">{{ $post->slug }}</a></dd>
                  </dl>
                  <dl class="dl-horizontal">
                      <dt>Category</dt>
                      <dd><i><h6 class="lead" href="#">{{ $post->category->name }}</h6></i></dd>
                  </dl>

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
                          <a href="/post/{{ $post->id }}/edit" class="btn btn-primary btn-sm btn-block">Edit</a>
                      </div>
                      <div class="col-sm-6">


                          <form method="POST" action="{{ route('post.destroy', $post->id ) }}"  >
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn btn-danger btn-sm btn-block">Delete</button>
                          </form>


                      </div>
                      <div class="col-md-12 mt-2">
                          <a href="{{ route('post.index') }}" class="btn btn-outline-dark btn-block btn-sm"><< show all posts</a>
                      </div>
                  </div>
              </div>

          </div>
      </div>
  </div>
@endsection