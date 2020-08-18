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
                            <small class="card-title">Posted_at: {{ $comments->created_at }}</small>
                            <div class="table-responsive text-center">
                               <h5>Comment Sender: <i>{{ $comments->lecture->name }}</i></h5><hr>
                                <p>{{ $comments->name }}</p>
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