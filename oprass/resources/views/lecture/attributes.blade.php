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
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Attributes</h4>
                        <div class="text-center">
                            <h5>Attributes Of Good Performance</h5>
                        </div>
                            <table border=1 class="tcol w-100">
                                <thead>
                                <tr>
                                <th rowspan=2>NS: ID</th>
                                <th rowspan=2>Main Factory</th>
                                <th rowspan=2>Quality Attribute</th>
                                 <th colspan=2><h3>Related Mark</h3></th>
                                </tr>
                                <tr>
                                    <th>Appraisee</th>
                                    <th>Send</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!--Zero-->



                                <!--One-->
                                <tr>
                                    <form id="form_one">
                                        <td>1</td>
                                        <td id="work">WORKING RELATIONSHIPS</td>
                                        <td id="ability">Ability to work in team</td>
                                        <td><input id="unqId" value="one" type="hidden">
                                            <input id="in_one" value="" placeholder="Edit here"></td>
                                        <td><button class="btn btn-outline-light btn-sm btn-block">click</button></td>
                                    </form>
                                </tr>




                                <!--Two-->
                                <tr>
                                    <form id="form_two">
                                        <td>2</td>
                                        <td id="work_two">COMMUNICATION AND LISTENING</td>
                                        <td id="ability_two">Ability to express in writing</td>
                                        <td><input id="unqId_two" value="two" type="hidden">
                                            <input id="in_two" value="" placeholder="Edit here"></td>
                                        <td><button class="btn btn-outline-light btn-sm btn-block">click</button></td>
                                    </form>
                                </tr>


                                <!--Three-->
                                <tr>
                                    <form id="form_three">
                                        <td>3</td>
                                        <td id="work_three">MANAGEMENT AND LEADERSHIP</td>
                                        <td id="ability_three">Ability to plan and organize</td>
                                        <td><input id="unqId_three" value="three" type="hidden">
                                            <input id="in_three" value="" placeholder="Edit here"></td>
                                        <td><button class="btn btn-outline-light btn-sm btn-block">click</button></td>
                                    </form>
                                </tr>




                                <!--Four-->
                                <tr>
                                    <form id="form_four">
                                        <td>4</td>
                                        <td id="work_four">RESPONSIBILITY AND JUDGEMENT</td>
                                        <td id="ability_four">Ability to accept and fulfill responsibility</td>
                                        <td><input id="unqId_four" value="four" type="hidden">
                                            <input id="in_four" value="" placeholder="Edit here"></td>
                                        <td><button class="btn btn-outline-light btn-sm btn-block">click</button></td>
                                    </form>
                                </tr>


                                <!--Five-->
                                <tr>
                                    <form id="form_five">
                                        <td>5</td>
                                        <td id="work_five">PERFORMANCE IN TERMS OF QUANTITY</td>
                                        <td id="ability_five">Ability to deliver accurate and high quality output timely
                                        </td>
                                        <td><input id="unqId_five" value="five" type="hidden">
                                            <input id="in_five" value="" placeholder="Edit here"></td>
                                        <td><button class="btn btn-outline-light btn-sm btn-block">click</button></td>
                                    </form>
                                </tr>



                                </tbody>

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
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $( document ).ready(function () {
        $( '#form_one' ).on('submit', function (event){
            event.preventDefault();
                var in_one = $('#in_one').val();
                var work = $('#work').text();
                var ability = $('#ability').text();
                var unqId =  $('#unqId').val();
if (in_one <= 5 && in_one >= 1 ){
    $('#in_one').parent().css( "backgroundColor", "white" );
    $.ajax({
        type:"post",
        url:"{{ route('attributes.store') }}",
        data:{
            _token: '{{csrf_token()}}',
            inData : in_one,
            work: work,
            ability: ability,
            unqId: unqId
        },
        success:function(data){
            swal("Thanks!", "Your data is Saved!", "success");
            $('#in_one').text()
        }
    });
}else{
    $('#in_one').parent().css( "backgroundColor", "#ffe6e6" );
}

        });
    });
</script>



    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $( document ).ready(function () {
            $( '#form_two' ).on('submit', function (event){
                event.preventDefault();
                var in_two = $('#in_two').val();
                var work2 = $('#work_two').text();
                var ability2 = $('#ability_two').text();
                var unqId2 =  $('#unqId_two').val();

                if (in_two <= 5 && in_two >= 1 ){
                    $('#in_two').parent().css( "backgroundColor", "white" );
                    $.ajax({
                        type:"post",
                        url:"{{ route('attributes.store') }}",
                        data:{
                            _token: '{{csrf_token()}}',
                            inData : in_two,
                            work: work2,
                            ability: ability2,
                            unqId: unqId2
                        },
                        success:function(data){
                            swal("Thanks!", "Your data is Saved!", "success");
                        }
                    });
                }else{
                    $('#in_two').parent().css( "backgroundColor", "#ffe6e6" );
                }

            });
        });
    </script>






    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $( document ).ready(function () {
            $( '#form_three' ).on('submit', function (event){
                event.preventDefault();
                var in3 = $('#in_three').val();
                var work3 = $('#work_three').text();
                var ability3 = $('#ability_three').text();
                var unqId3 =  $('#unqId_three').val();


                if (in3 <= 5 && in3 >= 1 ) {
                    $('#in_three').parent().css('backgroundColor', 'white');
                    $.ajax({
                        type: "post",
                        url: "{{ route('attributes.store') }}",
                        data: {
                            _token: '{{csrf_token()}}',
                            inData: in3,
                            work: work3,
                            ability: ability3,
                            unqId: unqId3
                        },
                        success: function (data) {
                            swal("Thanks!", "Your data is Saved!", "success");
                        }
                    });
                }else{
                    $('#in_three').parent().css('backgroundColor', '#ffe6e6');
                }
            });
        });
    </script>





    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $( document ).ready(function () {
            $( '#form_four' ).on('submit', function (event){
                event.preventDefault();
                var in4 = $('#in_four').val();
                var work4 = $('#work_four').text();
                var ability4 = $('#ability_four').text();
                var unqId4 =  $('#unqId_four').val();


                if (in4 <= 5 && in4 >= 1 ){
                    $('#in_four').parent().css('backgroundColor', 'white' );
                    $.ajax({
                        type:"post",
                        url:"{{ route('attributes.store') }}",
                        data:{
                            _token: '{{csrf_token()}}',
                            inData : in4,
                            work: work4,
                            ability: ability4,
                            unqId: unqId4
                        },
                        success:function(data){
                            swal("Thanks!", "Your data is Saved!", "success");
                        }
                    });
                }else{
                    $('#in_four').parent().css('backgroundColor', '#ffe6e6');
                }

            });
        });
    </script>



    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $( document ).ready(function () {
            $( '#form_five' ).on('submit', function (event){
                event.preventDefault();
                var in5 = $('#in_five').val();
                var work5 = $('#work_five').text();
                var ability5 = $('#ability_five').text();
                var unqId5 =  $('#unqId_five').val();


                if (in5 <= 5 && in5 >= 1 ) {
                    $('#in_five').parent().css('backgroundColor', 'white');
                    $.ajax({
                        type: "post",
                        url: "{{ route('attributes.store') }}",
                        data: {
                            _token: '{{csrf_token()}}',
                            inData: in5,
                            work: work5,
                            ability: ability5,
                            unqId: unqId5
                        },
                        success: function (data) {
                            swal("Thanks!", "Your data is Saved!", "success");
                        }
                    });
                }else{
                    $('#in_five').parent().css('backgroundColor', '#ffe6e6');
                }
            });
        });
    </script>
@endsection





