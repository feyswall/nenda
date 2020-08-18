
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
                <div class="col-lg-8 col-xl-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="media media-reply">
                                <div class="media-body">
                                    <div class="d-sm-flex justify-content-between mb-2">
                                        <h5 class="mb-sm-0">Welcome Note <small class="text-muted ml-3">{{ date('y-m h:ia', strtotime($comf->created_at)) }}</small></h5>
                                    </div>
                                    <p>purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">More UserDetails</h4>
                                <!-- Nav tabs -->
                                <div class="custom-tab-1">
                                    <ul class="nav nav-tabs mb-3">
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home1">Names</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile1">Details</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#contact1">Contacts</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="home1" role="tabpanel">
                                            <div class="p-t-15">
                                                <h4>Personal Information</h4>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile1">
                                            <div class="p-t-15">
                                                <h4>Academic Details</h4>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="contact1">
                                            <div class="p-t-15">
                                                <h4>Contact Details</h4>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-4">
                                <div class="media-body">
                                    <h3 class="mb-0">{{ $comf->name }}</h3>


                                    @if($player == 'supervisor')
                                        <p class="text-muted mb-0">{{ $player }}</p>
                                         @elseif($player == 'lecture')
                                        <p class="text-muted mb-0">{{ $player }}</p>
                                        @elseif($player == 'assistance_lecture')
                                        <p class="text-muted mb-0">{{ $player }}</p>
                                    @elseif($player == 'tutorial_assistance')
                                        <p class="text-muted mb-0">{{ $player }}</p>
                                    @endif


                                </div>
                            </div>
                            <h4>Privacy Terms</h4>


                            @if($player == 'supervisor')
                                <p class="text-muted">{{$comf->supervisorprofile->comment}}</p>
                            @elseif($player == 'lecture')
                                <p class="text-muted mb-0">{{ $comf->profile->comment }}</p>
                            @elseif($player == 'assistance_lecture')
                                <p class="text-muted mb-0">{{ $comf->assistancelectureprofile->comment }}</p>
                            @elseif($player == 'tutorial_assistance')
                                <p class="text-muted mb-0">{{ $comf->tutorialAssistanceProfile->comment }}</p>
                            @endif



                            <ul class="card-profile__info">
                                <li><strong class="text-dark mr-4">Email</strong> <span>{{ $comf->email }}</span></li>
                            </ul>
                            <div class="row justify-content-around">

                                    @if($player == 'supervisor')
                                        <div class="col-lg-6 col-xs-4 ">
                                            <form action="{{ route('supervisor.destroy', $comf->id ) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn mb-1 btn-outline-danger">Delete</button>
                                            </form>
                                        </div>
                                        <div class="col-lg-6 col-xs-4 ">
                                        <a href="{{ route('supervisor.edit', $comf->id ) }}" class="btn mb-1 btn-outline-primary" >Edit</a>


                                    @elseif($player == 'lecture')
                                                <div class="col-lg-6 col-xs-4 ">
                                                    <form action="{{ route('lecture.destroy', $comf->id ) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn mb-1 btn-outline-danger">Delete</button>
                                                    </form>
                                                </div>
                                                <div class="col-lg-6 col-xs-4 ">
                                        <a href="{{ route('lecture.edit', $comf->id ) }}" class="btn mb-1 btn-outline-primary" >Edit</a>


                                    @elseif($player == 'assistance_lecture')
                                                        <div class="col-lg-6 col-xs-4 ">
                                                            <form action="{{ route('assistance_lecture.destroy', $comf->id ) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn mb-1 btn-outline-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                        <div class="col-lg-6 col-xs-4 ">
                                                            <a href="{{ route('assistance_lecture.edit', $comf->id ) }}" class="btn mb-1 btn-outline-primary" >Edit</a>


                                    @elseif($player == 'tutorial_assistance')
                                                    <div class="col-lg-6 col-xs-4 ">
                                                        <form action="{{ route('tutorial_assistance.destroy', $comf->id ) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn mb-1 btn-outline-danger">Delete</button>
                                                        </form>
                                                    </div>
                                                    <div class="col-lg-6 col-xs-4 ">
                                                        <a href="{{ route('tutorial_assistance.edit', $comf->id ) }}" class="btn mb-1 btn-outline-primary" >Edit</a>
                                    @endif

                                </div>

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