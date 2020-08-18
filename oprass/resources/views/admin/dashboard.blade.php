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
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <p class="lead">Administration Panel</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-image">
                            <img class="img-responsive" src="{{ asset('img/help.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="left-content">
                            <h4>Little About OPRAS &amp; What IT do?</h4>
                            <p>The Open Performance Review and Appraisal System (OPRAS) is an open, formal,
                                and systematic procedure designed to assist both employers and employees in
                                planning, managing, evaluating and realizing performance improvement in the
                                organization with the aim of achieving organizational goals. OPRAS has the
                                following unique features that can be differentiated from the previous confidential
                                appraisal system:</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">

                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
    <!--**********************************
        Content body end
    ***********************************-->
@endsection