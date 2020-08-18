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
    <!--**********************************
            Content body start
        ***********************************-->

    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container">
            @if( session()->has('done') )
                <div class="alert alert-success container mt-5 text-center">
                    <h6>{{ session()->get('done') }}</h6>
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-body h-100">
                            <h4 class="card-title"></h4>
                            <div class="text-center">

                                @if($ans >= 1 and  $ans <= 2)
                                    {!! $grade = 'A' !!}
                                    <h2>"{{ $grade }}"</h2>
                                    <p>You Have An Excellent Performance. Please Prepare
                                        To Receive The Reward</p>
                                @elseif( $ans > 2 and $ans <= 3 )
                                    {{ $grade = 'B' }}
                                    <h2>"{{ $grade }}"</h2>
                                    <p>You Have An Excellent Performance. Please Prepare
                                        To Receive The Reward</p>
                                @elseif( $ans > 3 and $ans <= 4 )
                                    {!! $grade = 'C' !!}
                                    <h2>"{{ $grade }}"</h2>
                                    <p>Your Performance is Considered To Be Average.
                                        Highly Encourage You To Keep Up</p>
                                @elseif( $ans > 4 and $ans <= 5 )
                                    {!! $grade = 'D' !!}
                                    <h2>"{{ $grade }}"</h2>
                                    <p>Sorry But Your Performance is Considered To Be Poor.
                                        </p>
                                @else
                                    <h5>Report Not</h5>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- #/ container -->
    <!--**********************************
        Content body end
    ***********************************-->
@endsection





