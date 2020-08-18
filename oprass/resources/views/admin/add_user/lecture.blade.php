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
                <div class="col-lg-10 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Register New Lecture</h4>
                            <form method="POST" action="{{ route('lecture.store') }}">
                                @csrf
                            <div class="basic-form">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <h5>First Name</h5>
                                            <input type="text" name="fname" class="form-control @error('fname') is-invalid @enderror" placeholder="" required>
                                            @error('fname')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <h5>Middle Name</h5>
                                            <input type="text" name="mname" class="form-control @error('mname') is-invalid @enderror" placeholder="" required>
                                            @error('mname')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <h5>Last Name</h5>
                                            <input type="text" name="lname" class="form-control @error('lname') is-invalid @enderror" placeholder="" required>
                                            @error('lname')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <h3 class="card-title">Gender</h3>
                                        <div class="form-group">
                                            <label class="radio-inline mr-3">
                                                <input value="male" type="radio" name="gender" checked>Male</label>
                                            <label class="radio-inline mr-3">
                                                <input value="female" type="radio" name="gender">Female</label>
                                        </div>
                                    </div>


                                    <!--second row -->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <h5>Check number</h5>
                                            <input type="text" name="check_number" class="form-control @error('check_number') is-invalid @enderror" placeholder="" required>
                                            @error('check_number')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <h5>Present station</h5>
                                            <input type="text" name="present_station" class="form-control @error('present_station') is-invalid @enderror" placeholder="" required>
                                            @error('present_station')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--Second row -->

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <h5>Vote Code</h5>
                                            <input type="text" name="vote_code" class="form-control @error('vote_code') is-invalid @enderror" placeholder="" required>
                                            @error('vote_code')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <h5>Sub Code</h5>
                                            <input type="text" name="sub_vote" class="form-control @error('sub_vote') is-invalid @enderror" placeholder="" required>
                                            @error('sub_vote')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <h5>Academic Qualification</h5>
                                            <input type="text" name="academic" class="form-control @error('academic') is-invalid @enderror" placeholder="" required>
                                            @error('academic')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <h5>Duty Post</h5>
                                            <input type="text" name="duty_post" class="form-control @error('duty_post') is-invalid @enderror" placeholder="" required>
                                            @error('duty_post')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <h5>Substantive Post</h5>
                                            <input type="text" name="substantive_post" class="form-control @error('substantive_post') is-invalid @enderror" placeholder="" required>
                                            @error('substantive_post')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                     <div class="col-lg-6">
                                        <div class="form-group">
                                            <h5>First Appointment Date</h5>
                                            <input type="date" name="fapointment" class="form-control @error('fapointment') is-invalid @enderror" required>
                                            @error('fapointment')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <h5>Present Post Date</h5>
                                            <input type="date" name="papointment" class="form-control @error('papointment') is-invalid @enderror" required>
                                            @error('papointment')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                     <div class="col-lg-4">
                                        <div class="form-group">
                                            <h5>Salary</h5>
                                            <input type="text" name="salary" class="form-control @error('salary') is-invalid @enderror" placeholder="Salary Scale" required>
                                            @error('salary')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <h5>Period Serve</h5>
                                            <input type="number" name="period" class="form-control @error('period') is-invalid @enderror" required>
                                            @error('period')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <h5>Date Of Birth</h5>
                                            <input type="date" name="birth" class="form-control @error('birth') is-invalid @enderror" required>
                                            @error('birth')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea rows="6" id="comment"   type="date" name="comment" class="form-control h-150px @error('comment') is-invalid @enderror" placeholder="Terms Of Service" required></textarea>
                                            @error('comment')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <h>Email Address</h>
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" required>
                                            @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                       <button name="submit" class="btn btn-primary btn-block" id="reg">Submit</button>
                                    </div>

                                </div>
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