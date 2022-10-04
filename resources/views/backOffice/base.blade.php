<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Huntkingdom - @yield('title')</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    
    <!-- Styles -->
    <link href="{{url('backOffice/css/lib/calendar2/pignose.calendar.min.css')}}" rel="stylesheet">
    <link href="{{url('backOffice/css/lib/chartist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{url('backOffice/css/lib/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{url('backOffice/css/lib/themify-icons.css')}}" rel="stylesheet">
    <link href="{{url('backOffice/css/lib/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{url('backOffice/css/lib/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{url('backOffice/css/lib/weather-icons.css')}}" rel="stylesheet">
    <link href="{{url('backOffice/css/lib/menubar/sidebar.css')}}" rel="stylesheet">
    <link href="{{url('backOffice/css/lib/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('backOffice/css/lib/helper.css')}}" rel="stylesheet">
    <link href="{{url('backOffice/css/style.css')}}" rel="stylesheet">
    <link href="{{url('backOffice/css/lib/calendar/fullcalendar.css')}}" rel="stylesheet" />


 
    <link href="{{url('backOffice/css/lib/data-table/buttons.bootstrap.min.css')}}" rel="stylesheet" />
   

</head>




@section('body')
   
@endsection

<body >

@include('backOffice.shared.navbar')
@include('backOffice.shared.sidebar')
<div style="margin-left:20%">
@yield('body')

</div>
        </body>

        @include('backOffice.shared.footer')


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="{{url('backOffice/js/lib/jquery.min.js')}}"></script>
    <script src="{{url('backOffice/js/lib/jquery.nanoscroller.min.js')}}"></script>
    <!-- nano scroller -->
    <script src="{{url('backOffice/js/lib/menubar/sidebar.js')}}"></script>
    <script src="{{url('backOffice/js/lib/preloader/pace.min.js')}}"></script>
    <!-- sidebar -->

    <script src="{{url('backOffice/js/lib/bootstrap.min.js')}}"></script>
    <script src="{{url('backOffice/js/scripts.js')}}"></script>
    <!-- bootstrap -->

    <script src="{{url('backOffice/js/lib/calendar-2/moment.latest.min.js')}}"></script>
    <script src="{{url('backOffice/js/lib/calendar-2/pignose.calendar.min.js')}}"></script>
    <script src="{{url('backOffice/js/lib/calendar-2/pignose.init.js')}}"></script>


    <script src="{{url('backOffice/js/lib/weather/jquery.simpleWeather.min.js')}}"></script>
    <script src="{{url('backOffice/js/lib/weather/weather-init.js')}}"></script>
    <script src="{{url('backOffice/js/lib/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{url('backOffice/js/lib/circle-progress/circle-progress-init.js')}}"></script>
    <script src="{{url('backOffice/js/lib/chartist/chartist.min.js')}}"></script>
    <script src="{{url('backOffice/js/lib/sparklinechart/jquery.sparkline.min.js')}}"></script>
    <script src="{{url('backOffice/js/lib/sparklinechart/sparkline.init.js')}}"></script>
    <script src="{{url('backOffice/js/lib/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{url('backOffice/js/lib/owl-carousel/owl.carousel-init.js')}}"></script>
    <!-- scripit init-->
    <script src="{{url('backOffice/js/dashboard2.js')}}"></script>
    

  <script src="{{url('backOffice/js/lib/jquery-ui/jquery-ui.min.js')}}"></script>
  <script src="{{url('backOffice/js/lib/moment/moment.js')}}"></script>
  <script src="{{url('backOffice/js/lib/calendar/fullcalendar.min.js')}}"></script>
  <script src="{{url('backOffice/js/lib/calendar/fullcalendar-init.js')}}"></script>


    <!-- scripit init-->
    <script src="{{url('backOffice/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{url('backOffice/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
    <script src="{{url('backOffice/js/lib/data-table/buttons.flash.min.js')}}"></script>
    <script src="{{url('backOffice/js/lib/data-table/jszip.min.js')}}"></script>
    <script src="{{url('backOffice/js/lib/data-table/pdfmake.min.js')}}"></script>
    <script src="{{url('backOffice/js/lib/data-table/vfs_fonts.js')}}"></script>
    <script src="{{url('backOffice/js/lib/data-table/buttons.html5.min.js')}}"></script>
    <script src="{{url('backOffice/js/lib/data-table/buttons.print.min.js')}}"></script>
    <script src="{{url('backOffice/js/lib/data-table/datatables-init.js')}}"></script>


 <!-- jquery vendor -->

</html>