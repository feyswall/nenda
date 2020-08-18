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
                    <li class="breadcrumb-item active"><a href="javascript:void(0)"></a></li>
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
                            <h4 class="card-title">Fill Your Target</h4>
                            <div class="table-responsive">
                                 @foreach($objective as $object)
                                    <form class="form">
                                        <div class="row p-3 ">
                                            <div class="col-md-1">
                                                <p class="lead b">{{ $object->id }}</p>
                                            </div>

                                            <div class="col-md-4 align-self-end">
                                                <p>{{ $object->objective }}</p>
                                            </div>

                                            <div class="col-md-3 align-self-end">
                                                <p class="outer text-success" id="done"></p>
                                                <p>Grade</p>
                                                <input type="number" name="mark" class="form-control" id="mark">
                                                <input type="hidden" name="objId" class="form-control" id="objId" value="{{ $object->id }}">
                                            </div>

                                            <div class="col-md-2 align-self-end">
                                                <button  id="{{$object->id}}" class="sender btn btn-outline-primary btn-block mt-2">submit</button>
                                            </div>
                                        </div>
                                    </form>
                                     @endforeach
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
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var sender = $('.form');
        $( document ).ready(function () {
            sender.each(function( index ) {

                $( this ).on('submit', function (event) {
                    event.preventDefault();


                    var markIn = $( this ).find('#mark').val();
                    var objId = $( this ).find('#objId').val();

                    if ( markIn > 5 || markIn < 1 ){
                        $( this ).find('#mark').css('backgroundColor', '#ffe6e6');
                    }else{
                        $( this ).find('#mark').css('backgroundColor', 'white');
                        $.ajax({
                            type:"post",
                            url:"{{ route('mark.store') }}",
                            data:{
                                _token: '{{csrf_token()}}',
                                markIn: markIn,
                                objId: objId
                            },
                            success:function(data){
                                swal("Thanks!", "Your Data is  Saved!",);
//        $('#allFill').append('<div class="col-md-6">'+data.status+'</div>');
                            }
                        });
                    }


                })
            });
        });


    </script>

@endsection
