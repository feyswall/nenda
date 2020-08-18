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
            <div class="row">
                <div class="col-lg-4 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-4">
                                <div class="media-body">
                                    <h3 class="mb-0">{{ $assistance_lecture->name }}</h3>
                                    <p class="text-muted mb-0">lecture</p>
                                </div>
                            </div>
                            <h4>Privance Statement</h4>
                            <p class="text-muted">{{ $assistance_lecture->assistancelectureprofile->comment }}</p>
                            <ul class="card-profile__info">
                                <li><strong class="text-dark mr-4">Email</strong> <span>{{ $assistance_lecture->email }}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="media media-reply">
                                <div class="media-body">
                                    <div class="d-sm-flex justify-content-between mb-2">
                                        <h5 class="mb-sm-0">Welcome Note <small class="text-muted ml-3">{{ date('y-m h:ia', strtotime($assistance_lecture->created_at)) }}</small></h5>
                                    </div>
                                    <p>Please If You Enquire Any Difficulties while using the system or You found some errors
                                        Your information be sure to leave your comment below</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('assistance-lecture.comment.store') }}" method='POST' class="form-profile">
                                @csrf
                                <div class="form-group">
                                    <textarea class="form-control" name="name" id="textarea" cols="30" rows="5" placeholder="Post a new message"></textarea>
                                </div>
                                <div class="d-flex align-items-center">
                                    <button type="submit" class="btn btn-primary px-3 ml-4">Send Commment</button>
                                </div>
                            </form>
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