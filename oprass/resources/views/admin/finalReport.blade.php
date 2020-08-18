
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
                            <div class="row col-md-4 justify-content-center"><h4 class="card-title">Lectures List Report</h4></div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Check_no</th>
                                        <th>Grade</th>
                                        <th>Name</th>
                                        <th>Score</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @for( $g = 0; $g < $lectures->count(); $g++ )
                                        <tr>
                                            <td>{{ $lectures[$g]->id }}</td>
                                            <td>{{ $lectures[$g]->profile->check_number }}</td>
                                            <td>
                                               <p style="display: none"> {!! $ans = round(($avr2[$g]+$avr1[$g])/2, 2)  !!}</p>
                                                @if($ans >= 1 and  $ans <= 2)
                                                    <p style="display: none">{!! $grade = 'A' !!}</p>
                                                    <h4>"{{ $grade }}"</h4>

                                                @elseif( $ans > 2 and $ans <= 3 )
                                                    <p style="display: none">{!! $grade = 'B' !!}</p>
                                                    <h4>"{{ $grade }}"</h4>

                                                @elseif( $ans > 3 and $ans <= 4 )
                                                    <p style="display: none">{!! $grade = 'C' !!}</p>
                                                    <h4>"{{ $grade }}"</h4>

                                                @elseif( $ans > 4 and $ans <= 5 )
                                                    <p style="display: none">{!! $grade = 'D' !!}</p>
                                                    <h4>"{{ $grade }}"</h4>

                                                @else
                                                    <h5>None</h5>

                                                @endif
                                            </td>
                                            <td>{{ $lectures[$g]->name }}</td>
                                            <td>{{ round(($avr2[$g]+$avr1[$g])/2, 2) }}</td>
                                        </tr>
                                    @endfor
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