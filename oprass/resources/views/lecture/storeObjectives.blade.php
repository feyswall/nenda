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
                <div class="col-md-12">
                    <!--Show info to our user-->
                        <button class="btn btn-primary mb-2" type="button"
                                data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Store Info</button>
                    <div class="row">
                        <div class="col-md-12 col-xl-12">
                            <div class="collapse multi-collapse" id="multiCollapseExample1">

                                <div class="card card-body">
                                    <div id="allFill" class="row">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--End user info-->
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Fill Your Target</h4>
                            <div class="table-responsive">
                                @foreach($objectives as $objective)
                                    <form id="form{{$objective->id}}"  class="form  pili">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <p class="lead b">{{ $objective->id }}</p>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <p>{{ $objective->objective }}</p>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <select id="sel" name="status" class="form-control">
                                                                <option class="form-control" value="incomplete">incompleted</option>
                                                                <option class="form-control" value="complete">completed</option>
                                                                <option class="form-control" value="going">On Going</option>
                                                            </select>
                                                            <h5>Submit Progress</h5>
                                                            <i><b><p id="update"></p></b></i>
                                                            <p style="display: none" class="delay text-danger">Please write Your reasons of delay<i></i></p>
                                                        </div>

                                                        <div class="col-md-2">
                                                            <input id="nameId" hidden="hidden" name="nameId" value="{{$objective->id}}">
                                                            <input type="hidden" id="obje" value="{{ $objective->objective }}" >
                                                            {{--<input type="hidden" id="objet" value="{{ $objective->performance_targets }}" >--}}
                                                            {{--<input type="hidden" id="objec" value="{{ $objective->performance_criteria }}" >--}}
                                                            {{--<input type="hidden" id="objer" value="{{ $objective->agreed_resource }}" >--}}
                                                            <textarea style="display:none" name="why" id="extra" rows="6" cols="10" class="form-control"></textarea>
                                                            <button  id="{{$objective->id}}" class="sender btn btn-outline-primary btn-block mt-2">submit</button>
                                                        </div>


                                                    </div>
                                                </div>
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
             var update = $( this ).find('#sel').val();
                 if (update === 'complete'){
                     $( this ).find('#update').text('Complete');
                     $( this ).find('#extra').fadeOut('slow');
                 }else if(update === 'incomplete'){
                     $( this ).find('#update').text('incomplete');
                     $( this ).find('#extra').fadeIn('slow');
                     $( this ).find('.btn').removeClass('btn-outline-danger');
                     $( this ).find('.btn').addClass('btn-outline-primary');
                     $( this ).find('.delay').fadeIn(10000).fadeOut(3090);
                 }else{

                 }


             swal({
                 title: "Are you sure?",
                 text: "Confirm!",
                 icon: "warning",
                 buttons: true,
                 dangerMode: true,
             })
                 .then((willDelete) => {
                 if (willDelete) {
                     var inputs = $( this ).serialize();
                     var object = $( this ).find('#obje').val();
//                     var objectc = $( this ).find('#objec').val();
//                     var objectr = $( this ).find('#objer').val();
//                     var objectt = $( this ).find('#objet').val();
                     $.ajax({
                         type:"post",
                         url:"{{ route('lecture.target.store') }}",
                         data:{
                             _token: '{{csrf_token()}}',
                             inputs: inputs,
                             objectid: object,
//                             objectc: objectc,
//                             objectr: objectr,
//                             objectt: objectt,
                         },
                         success:function(data){
                             swal("Thanks!", "Your data is Saved!", "success");
                             $('#allFill').append('<div class="col-md-1">'+data.id+'</div>');
                             $('#allFill').append('<div class="col-md-5">'+data.obje+'</div>');
                             $('#allFill').append('<div class="col-md-6">'+data.status+'</div>');
                         }
                     });
                 } else {
                     swal("No changes Were Made!");
         }
         });
         })
     });
 });


    </script>
@endsection
