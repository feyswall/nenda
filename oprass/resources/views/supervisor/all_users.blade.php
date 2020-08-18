@extends('layouts.panel')

@section('content')
    <!--**********************************
        Nav header start
    ***********************************-->
    @include('partials._pre-loader')
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    @include('partials._top-header')
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    @include('partials._side-bar')
    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
                 Content body start
        ***********************************-->
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">

            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">All Lectures</h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Ageed Objectives</th>
                                        <th>Progress Made</th>
                                        <th>Appraisee</th>

                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $users as $profile )
                                        <tr>
                                            <td>{{ $profile->id }}</td>
                                            <td>{{ $profile->name }}</td>
                                            <td>{{ $profile->email }}</td>
                                            <td>{{ $profile->check_number }}</td>
                                            <td>
                                                <a href="{{ route('supervisor.lecture_view', $profile->id ) }}">View</a>
                                            </td>
                                            <td>
                                                <form action="#" method="POST" class="float-left">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn mb-1 btn-outline-danger btn-sm ">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tfoot>
                                    <tr>
                                        {{--<td>Garrett Winters</td>--}}
                                        {{--<td>Accountant</td>--}}
                                        {{--<td>Tokyo</td>--}}
                                        {{--<td>63</td>--}}
                                        {{--<td>2011/07/25</td>--}}
                                        {{--<td>$170,750</td>--}}
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                      
                    </div>

                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
    <!--**********************************
        Content body end
    ***********************************-->
    ***********************************-->
@endsection