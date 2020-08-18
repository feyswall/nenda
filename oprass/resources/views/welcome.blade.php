@extends('layouts.welcome-index')

@section('content')

    <!-- ***** Preloader Start ***** -->

    <!-- ***** Preloader End ***** -->
    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/"><h2>OPRAS</h2></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Login As</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('admin.login') }}">HR</a>
                                <a class="dropdown-item" href="{{ route('supervisor.login') }}">Supervisor</a>
                                <div class="dropdown-divider"></div>
                                <h4 class="dropdown-header lead">Appraisee</h4>
                                <a class="dropdown-item" href="{{ route('lecture.login') }}">Lecture</a>
                                <a class="dropdown-item" href="{{ route('assistance-tutorial.login')}}">Tut Assistance</a>
                                <a class="dropdown-item" href="{{ route('assistance-lecture.login') }}">Assistance Lect</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/Coat_of_arms_of_Tanzania.svg/1200px-Coat_of_arms_of_Tanzania.svg.png" class="w-100">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="left-content">
                        <h5><strong>GUIDELINE	ONOPEN	PERFORMANCE	REVIEWAND	APPRAISAL	SYSTEM(OPRAS)</strong></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="left-content">
                        <h4>The Public Service Reform Program (PSRP) </h4>
                        <p>The Public Service Reform Program (PSRP) launched by the Government in 2000
                            has three distinct phases. The first phase involves the installation of Performance
                            Management Systems (PMS) in all Ministries, Departments and Agencies; Regions
                            and Local Government Authorities. The objective of this phase was to improve
                            accountability, transparency and resource management for efficient and effective
                            delivery of quality services to the public. In an effort to achieve this objective, the
                            Government designed the Performance Improvement Model (PIM) which is a four
                            stage process involving planning, implementing, monitoring and reviewing to be used
                            in the implementation of PMS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="best-features about-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Brief Description</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="{{ asset('img/help.svg') }}" alt="">
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
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class="fa fa-mail-forward"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
    </div>
@endsection