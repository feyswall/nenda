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

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Performance Agreements</h4>
                                    @foreach($objectives as $objective)
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-md-1"> <h5>{{$objective->id}}</h5></div>
                                            <div class="col-md-2">
                                                <h5 class="lead">Agreed objective</h5>
                                                <p>{{ $objective->objective }}</p>
                                            </div>
                                            <div class="col-md-3">
                                                <h5 class="lead">performance_targets</h5>
                                                <p>{{ $objective->performance_targets}}</p>
                                            </div>
                                            <div class="col-md-3">
                                                <h5 class="lead">performance_criteria</h5>
                                                <p>{{ $objective->performance_criteria}}</p>
                                            </div>
                                            <div class="col-md-2">
                                                  <h5 class="lead">agreed_resource</h5>
                                                <p>  {{$objective->agreed_resource}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        @endforeach
                            {!! $objectives->links() !!}
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- Large modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add Objectives</button>
                            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            Performance Agreement
                                        </div>
                                        <form action="{{ route('lecture.objectives.store') }}" method="POST" id="step-form-horizontal" class="step-form-horizontal">
                                        <div class="modal-body">

                                                @csrf
                                                <div class="form-group">
                                                    <label>Agreed Objectives:</label>
                                                    <textarea name="objective" class="form-control h-150px" rows="6" id="comment"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>performance_targets:</label>
                                                    <textarea name="performance_targets" class="form-control h-150px" rows="6" id="comment"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>performance_criteria:</label>
                                                    <textarea name="performance_criteria" class="form-control h-150px" rows="6" id="comment"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>agreed_resource:</label>
                                                    <textarea name="agreed_resource" class="form-control h-150px" rows="6" id="comment"></textarea>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
    <!--**********************************
        Content body end
    ***********************************-->
@endsection

@section('scripts')
    {{--<script src="{{ asset('quixlab/js/plugins-init/jquery-steps-init.js') }}"></script>--}}
    {{--<script src="{{ asset('quixlab/plugins/jquery-steps/build/jquery.steps.min.js') }}"></script>--}}
    {{--<script src="{{ asset('quixlab/plugins/common/common.min.js') }}"></script>--}}
    {{--<script src="{{ asset('quixlab/js/custom.min.js') }}"></script>--}}
    {{--<script src="{{ asset('quixlab/js/settings.js') }}"></script>--}}
    {{--<script src="{{ asset('quixlab/js/gleek.js') }}"></script>--}}
    {{--<script src="{{ asset('quixlab/js/styleSwitcher.js') }}"></script>--}}
    {{--<script src="{{ asset('quixlab/plugins/jquery-steps/build/jquery.steps.min.js') }}"></script>--}}
    {{--<script src="{{ asset('quixlab/plugins/jquery-validation/jquery.validate.min.js') }}"></script>--}}
    {{--<script src="{{ asset('quixlab/js/plugins-init/jquery-steps-init.js') }}"></script>--}}

    <script>
        
    </script>

    @endsection