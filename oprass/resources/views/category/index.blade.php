@extends('layouts.app')

@section('content')
   <div class="container mt-5">
       <div class="row">
    <div class="col-md-8">
        <h1>Category</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Created_at</th>
                </tr>
            </thead>
            <tbody>
            @foreach( $categories as $category )
                <tr>
                    <td scope="row">{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ date('d M, Y', strtotime($category->created_at)) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div><!-- end col-8 -->
       <div class="col-md-4">

       @if ( session()->has('category_save'))
           <h2 class="text-danger">{{ session()->get('category_save', '') }}</h2>
       @endif
           <h5><i>Create New Category</i></h5>
           <div class="shadow p-3 mb-5 bg-white rounded">
               <form method="POST" action="{{ route('category.store') }}">
                   @csrf
                   <label for="category">Category Name</label>
                   <input name="category" id="category" type="text" class="@error('category') is-invalid @enderror form-control">
                   @error('category')
                   <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                   <button type="submit" class="btn btn-danger btn-block mt-2">Save Category</button>
               </form>
           </div>

       </div><!-- end of col-3 -->
       </div>
   </div>
@stop