
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
                            <h4 class="card-title">All Supervisors</h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Salary</th>
                                        <th>Academic</th>
                                        <th>Gender</th>
                                        <th>Period</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $profiles as $profile )
                                        <tr>
                                            <td>{{ $profile->fname }}</td>
                                            <td>{{ $profile->lname }}</td>
                                            <td>{{ $profile->salary }}</td>
                                            <td>{{ $profile->academic }}</td>
                                            <td>{{ $profile->gender }}</td>
                                            <td>{{ $profile->period }}</td>
                                            <td>
                                                <a class="btn mb-1 btn-outline-primary btn-sm" href="{{ route('supervisor.show', $profile->supervisor_id )}}">View</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('lecture.destroy', $profile->supervisor_id) }}" method="POST">
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

@section('scripts')
    <script src="plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
@endsection