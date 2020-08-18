
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>OPRAS System</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="{{ asset('quixlab/plugins/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{ asset('quixlab/plugins/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('quixlab/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css') }}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('quixlab/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('custome.css') }}" rel="stylesheet">
    <link href="{{ asset('quixlab/plugins/jquery-steps/css/jquery.steps.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




</head>

<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
        </svg>
    </div>
</div>
<!--*******************
    Preloader end
********************-->

<div id="app">
<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">
    @yield('content')
    <!--**********************************
        Footer start
    ***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
        </div>
    </div>
    <!--**********************************
        Footer end
    ***********************************-->
</div>
<!--**********************************
    Main wrapper end
***********************************-->
</div>
<!--**********************************
    Scripts
***********************************-->
<script src="{{ asset('quixlab/plugins/common/common.min.js') }}"></script>
<script src="{{ asset('quixlab/js/custom.min.js') }}"></script>
<script src="{{ asset('quixlab/js/settings.js') }}"></script>
<script src="{{ asset('quixlab/js/gleek.js') }}"></script>
<script src="{{ asset('quixlab/js/styleSwitcher.js') }}"></script>

<!-- Chartjs -->
<script src="{{ asset('quixlab/plugins/chart.js/Chart.bundle.min.j') }}s"></script>
<!-- Circle progress -->
<script src="{{ asset('quixlab/plugins/circle-progress/circle-progress.min.js') }}"></script>
<!-- Datamap -->
<script src="{{ asset('quixlab/plugins/d3v3/index.js') }}"></script>
<script src="{{ asset('quixlab/plugins/topojson/topojson.min.js') }}"></script>
<script src="{{ asset('quixlab/plugins/datamaps/datamaps.world.min.js') }}"></script>
<!-- Morrisjs -->
<script src="{{ asset('quixlab/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('quixlab/plugins/morris/morris.min.js') }}"></script>
<!-- Pignose Calender -->
<script src="{{ asset('quixlab/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('quixlab/plugins/pg-calendar/js/pignose.calendar.min.js') }}"></script>
<!-- ChartistJS -->
<script src="{{ asset('quixlab/plugins/chartist/js/chartist.min.js') }}"></script>
<script src="{{ asset('quixlab/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js') }}"></script>

<script src="{{  asset('quixlab/js/dashboard/dashboard-1.js') }}"></script>


@yield('scripts')

</body>

</html>