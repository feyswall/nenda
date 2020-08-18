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
            @if( session()->has('done') )
                <div class="alert alert-success container mt-5 text-center">
                    <h6>{{ session()->get('done') }}</h6>
                </div>
            @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="row justify-content-around">
                                    <div class="col-md-12">
                                        <h6>Rating</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <ol style="list-style-type: none">
                                            <li>1 = Outstanding Performance</li>
                                            <li>2 = Performance Above Average</li>
                                            <li>3 = Average Performance</li>
                                        </ol>
                                    </div>
                                    <div class="col-md-6">
                                        <ol style="list-style-type: none">
                                            <li>4 = Poor Performance</li>
                                            <li>5 = Very Poor Performance</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Attributes</h4>
                            <div class="text-center">
                                <h5>Attributes Of Good Performance</h5>
                            </div>
                            <table class="table table-responsive w-100">
                                <thead>
                                <tr>
                                    <th>NS: ID</th>
                                    <th>factor</th>
                                    <th>attribute</th>
                                    <th><h5>appraisee</h5></th>
                                    <th><h5>supervisor</h5></th>
                                    <th><h5>agreed</h5></th>
                                    <th><h5>Modify</h5></th>
                                </tr>
                                </thead>
                                <tbody>
                                <!--Zero-->
<p style="display: none"> {!! $i = 1 !!}</p>
                                @foreach( $attributes as $profile )
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $profile->factor }}</td>
                                        <td>{{ $profile->attribute }}</td>
                                        <td>{{ $profile->appraisee }}</td>
                                        <td>{{ $profile->supervisor }}</td>
                                        <td>{{ $profile->agreed }}</td>
                                        <td>
                                            <!-- Small modal -->
                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".bd-example-modal-sm{{$profile->id}}">Your Grade</button>
                                            <div class="modal fade bd-example-modal-sm{{$profile->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Enter Marks</h5>
                                                            <button  type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="POST" action="{{ route('supervisor.attributes.update', $profile->id) }}">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <h5>Grade: </h5>
                                                                    <input type="number" name="grade" class="form-control" placeholder="" required>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">grade</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                            {!! $i++ !!}
                                    @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>{{ round($avr, 2) }}</td>
                                    <td></td>
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
    <!--**********************************
        Content body end
    ***********************************-->
@endsection





