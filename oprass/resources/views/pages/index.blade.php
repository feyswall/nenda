@extends('layouts.main')

@section('content')

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background: url(../img/038.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 id="pointer-point-disabled" class="first_slide_text lead"
                                    data-animation="fadeInDownBig" data-delay="100ms">
                                    Please welcome to this site today
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(../img/040.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 id="pointer-point-disabled" class="middle_text lead"
                                    data-animation="fadeInUp" data-delay="100ms">
                                    We have some incredible stuff going on around
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(../img/100.JPG);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 id="pointer-point-disabled" class="third_slide_text lead"
                                    data-animation="fadeInUp" data-delay="100ms">
                                    Hey Do you wish to find a better Job
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->



    <!-- ##### Advance Search Area Start ##### -->
    <div class="south-search-area">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12">
                    <div class="advanced-search-form">
                        <h3 class="display-6">Welcome to Our Site</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Advance Search Area End ##### -->






    <div class="container">
        <div class="row">
            <!-- ##### Post Content Area ##### -->
            <div class="col-12 col-lg-9">
                <!-- Single Blog Area  -->
                <div class="single-blog-area blog-style-2 mb-50 mt-lg-4 mt-md-3 mt-sm-2">

                    {{--<!-- Blog Content -->--}}
                    {{--@if ( ($latest_post) != '' )--}}
                        {{--<div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp; animation-duration: 1000ms; animation-delay: 0.2s;" data-wow-duration="1000ms" data-wow-delay="0.2s">--}}
                            {{--<div class="row align-items-center">--}}
                                {{--<div class="col-12 col-md-6">--}}
                                    {{--<div class="single-blog-thumbnail">--}}
                                        {{--<img src="/storage/{{ $latest_post->image }}" alt="bog image" >--}}
                                        {{--<div class="post-date">--}}
                                            {{--<a href="#">{{ date('d', strtotime($latest_post->created_at)) }} <span>{{ date('M', strtotime($latest_post->created_at)) }}</span></a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-12 col-md-6">--}}
                                    {{--<!-- Blog Content -->--}}
                                    {{--<div class="single-blog-content">--}}
                                        {{--<div class="line"></div>--}}
                                        {{--<a href="#" class="post-tag">{{ $latest_post->slug }}</a>--}}
                                        {{--<h4><a href="#" class="post-headline mb-0">{{ $latest_post->title }}</a></h4>--}}
                                        {{--<p id="pointer-point" class="paraafterVimage">{{ $latest_post->body }}</p>--}}
                                        {{--@foreach( $latest_post->tags as $tags )--}}
                                            {{--<button class="btn btn-sm btn-dark mt-sm-2 mb-lg-2"> {{ $tags->tags }}</button>--}}
                                        {{--@endforeach--}}
                                        {{--<div class="post-meta">--}}
                                            {{--<p>{{ count( $latest_post->comments ) }}  comments</p>--}}
                                            {{--<a href="{{ route('blog.single', $latest_post->slug) }}" class="btn btn-success btn-sm">Add Comment</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--@else--}}
                        {{--<div class="single-blog-content">--}}
                            {{--<div class="post-meta mb-10">--}}
                                {{--<p>No Post Found</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--@endif--}}

                </div>
            </div>

            <!-- ##### Sidebar Area ##### -->
            <div class="col-12 col-md-4 col-lg-3 mt-30">
                <div class="post-sidebar-area">

                    <!-- Widget Area -->
                    <div class="sidebar-widget-area">
                        <h5 class="title">Latest Posts</h5>

                        <div class="widget-content">




                        {{--@foreach( $posts as $post )--}}
                            {{--<!-- Single Blog Post -->--}}
                                {{--<div class="shadow-sm p-3 mb-5 bg-white rounded single-blog-post d-flex align-items-center widget-post">--}}
                                    {{--<!-- Post Thumbnail -->--}}
                                    {{--<div class="post-thumbnail">--}}
                                        {{--<img src="/storage/{{ $post->image  }}" alt="" class=>--}}
                                    {{--</div>--}}
                                    {{--<!-- Post Content -->--}}
                                    {{--<div class="post-content">--}}
                                        {{--<a href="#" class="post-tag">{{ $post->slug }}</a>--}}
                                        {{--<h4><a href="#" class="post-headline">{{ $post->title }}</a></h4>--}}
                                        {{--<div class="post-meta">--}}
                                            {{--<p><a href="#">{{ date('d M, Y', strtotime($post->created_at)) }}</a></p>--}}
                                        {{--</div>--}}
                                        {{--<a href="{{ route('blog.single', $latest_post->slug) }}" class="btn btn-block btn-outline-success btn-sm">Read More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--@endforeach--}}



                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>



    <!--Container Start-->
    <div class="row align-items-start">
        <div class="container">
            <!-- ##### Editor Area Start ##### -->
            <section style="background-color: white;" class="south-editor-area d-flex align-items-center">
                <!-- Editor Content -->
                <div class="editor-content-area">
                    <!-- Section Heading -->
                    <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                        <img src="{{ asset('img/logo.jpg') }}" alt="" class="w-25">
                        <h4 class="post-headline">Contact Information</h4>
                    </div>
                    <p id="pointer-point" class="first_beside_picture wow fadeInUp" data-wow-delay="500ms">
                        Using Boolean expression  we may draw a truth table from a given Boolean expression, where
                        Truth table is a table used to represent a Boolean expression of a logic gate function, it also
                        shows each possible input combination to the gate or circuit with the resultant output depending
                        upon the combination of these inputs.
                    </p>
                    <a href="{{ route('pages.contact') }}" class="btn btn-outline-success wow fadeInUp">Start Contact</a>
                    <div class="address wow fadeInUp" data-wow-delay="750ms">
                        <p>First and foremost, praises and thanks to the God, the Almighty, for His showers of blessings throughout our assignment work to complete the project successfully.
                            Second we would like to express our special thanks of gratitude to our supervisor Sir Bakii who gave us the golden opportunity to do this wonderful project on the sub topic of Boolean Algebra which also helped us in doing a lot of research and we came to know about so many new things we are really thankful to them.
                        </p>
                    </div>
                </div>

                <!-- Editor Thumbnail -->
                <div class="container">
                    <p>First and foremost, praises and thanks to the God, the Almighty, for His showers of blessings throughout our assignment work to complete the project successfully.
                        Second we would like to express our special thanks of gratitude to our supervisor Sir Bakii who gave us the golden opportunity to do this wonderful project on the sub topic of Boolean Algebra which also helped us in doing a lot of research and we came to know about so many new things we are really thankful to them.
                        Third we would like to thanks our and friends who helped us a lot in finalizing this assignment within a limited time frame.
                    </p>
                    <img class="w-75" src="{{ asset('img/but.png') }}" alt="">
                </div>
            </section>
            <!-- ##### Editor Area End ##### -->
            <!--The end of division-->
        </div>
    </div>
    <!--Container Ends-->









    <div class="container">

        <div class="row">
            <div class="col-12 col-lg-9">



                <!-- Start slide Area  -->
                <div class="single-blog-area blog-style-2 mb-50 wow fadeInUp"
                     data-wow-delay="0.6s" data-wow-duration="1000ms">
                    <div class="row align-items-center">
                        <!--                             <div class="col-12 col-md-6">
                                                        <div class="single-blog-thumbnail">
                                                            <img src="img/blog-img/6.jpg" alt="">
                                                            <div class="post-date">
                                                                <a href="#">12 <span>march</span></a>
                                                            </div>
                                                        </div>
                                                    </div> -->
                        <div class="col-12 col-md-12">

                        </div>
                    </div>
                </div>






            </div>



        </div>
    </div><!-- ending of the container-->







    <!-- ##### Featured Properties Area Start ##### -->
    <section class="featured-properties-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp">
                        <h2>Birri Posts</h2>
                    </div>
                </div>
            </div>



            <div class="row">


            {{--@foreach( $six as $sixth )--}}
                {{--<!-- Single Featured Property -->--}}
                    {{--<div class="col-12 col-md-6 col-xl-4">--}}
                        {{--<div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="600ms">--}}
                            {{--<!-- Property Thumbnail -->--}}
                            {{--<div class="property-thumb">--}}
                                {{--<div class="tag">--}}
                                    {{--<h3>{{ $sixth->title }}</h3>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!-- Property Content -->--}}
                            {{--<div class="property-content">--}}
                                {{--<div class="row justify-content-center">--}}
                                    {{--<div class="col-md-12 col-sm-12">--}}
                                        {{--<img src="storage/{{ $sixth->image }}" class="w-100 alig text-center">--}}
                                        {{--<h5 class="mt-2"><i>{{ $sixth->category->name }}</i></h5>--}}
                                        {{--<p id="pointer-point" class="slide_box_six">--}}
                                            {{--{{ substr($sixth->body, 0, 100 ) }}{{ (strlen($sixth->body) > 100) ? "..." : "" }}</p>--}}
                                        {{--<a href="{{ route('blog.single', $sixth->slug) }}" >Read More</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endforeach--}}




            </div>
        </div>
    </section>
    <!-- ##### Featured Properties Area End ##### -->




    <!-- ##### Call To Action Area Start ##### -->
    <section class="call-to-action-area bg-fixed bg-overlay-black" style="background-image: url(../img/30.jpg)">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-12">
                    <div class="cta-content text-center">
                        <h2 class="wow fadeInUp" data-wow-delay="300ms">Je Unamaulizo?</h2>
                        <h6 class="wow fadeInUp" data-wow-delay="400ms">Tafadhali Wasiliana Nasi Kwa Maulizo.</h6>
                        <h5 style="color: white;" class="wow fadeInUp" data-wow-delay="400ms">Nasi Tutapenda Kukusaidia.</h5>
                        <button class="btn btn-outline-warning btn-large wow fadeInUp" data-wow-delay="400ms">View More</button>
                        <!--- <a href="#" class="btn btn-outline-danger btn-lg mt-50 wow fadeInUp" data-wow-delay="500ms">Search</a>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action Area End ##### -->





    <!-- ##### Editor Area Start ##### -->
    <section style="background-color: white;" class="south-editor-area d-flex align-items-center">
        <!-- Editor Content -->
        <div class="editor-content-area">
            <!-- Section Heading -->
            <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                <img class="logo-style w-25" src="{{ asset('img/logo.jpg') }}" alt="" >
                <h5>Birrih company limited</h5>
            </div>
            <p id="pointer-point" class="first_shughuri wow fadeInUp" data-wow-delay="500ms">
                For Brief explanation about organization
            </p>
            <div class="address wow fadeInUp" data-wow-delay="750ms">
                <h6><img src="{{ asset('img/icons/phone-call.png') }}" alt=""> +255 899 300 223</h6>
                <h6><img src="{{ asset('img/icons/envelope.png') }}" alt=""> Seccretaryoffice@birri.com</h6>
            </div>
            <div class="signature mt-50 wow fadeInUp" data-wow-delay="1000ms">
                <p></p>
            </div>
        </div>

        <!-- Editor Thumbnail -->
        <div class="editor-thumbnail">
            <div class="container">
                <p id="pointer-point" class="second_shughuri wow fadeInUp" data-wow-delay="500ms">
                    assignment work to complete the project successfully. Second we would like
                    to express our special thanks of gratitude to our supervisor Sir Bakii
                    who gave us the golden opportunity to do this wonderful project on the
                    sub topic of Boolean Algebra which also helped us in doing a lot of
                    research and we came to know about so many new things we are really thankful to them.
                    Or You Could Contact our other workers at:
                </p>
                <div class="address wow fadeInUp" data-wow-delay="750ms">

                    <h6><img src="img/icons/phone-call.png" alt=""> +255 993 000 223</h6>
                    <h6><img src="img/icons/envelope.png" alt=""> salomeoffice@birrhi.com</h6>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Editor Area End ##### -->

    <!-- ##### Blog Wrapper End ##### -->
@endsection

@section('down')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

   <!-- <script src="{{ url('assets/js/bootstrap.min.js') }}"></script> -->

    <script src="{{ url('assets/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ url('assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->

    <!-- Plugins js -->
    <script src="{{ url('assets/js/plugins.js') }}"></script>
    <script src="{{ url('assets/js/classy-nav.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery-ui.min.js') }}"></script>
    <!-- Active js -->
    <script src="{{ url('assets/js/active.js') }}"></script>
    <script src="{{ url('assets/js/forms.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@stop

