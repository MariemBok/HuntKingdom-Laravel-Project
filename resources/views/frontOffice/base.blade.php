<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Huntkingdom - @yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{url('frontOffice/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontOffice/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontOffice/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontOffice/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontOffice/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontOffice/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontOffice/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontOffice/css/style.css')}}" type="text/css">

	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
</head>

@include('frontOffice.shared.navbar')



@section('body')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

<body >
            @yield('body')
        </body>

        @include('frontOffice.shared.footer')

 <!-- Js Plugins -->
 <script src="{{url('frontOffice/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('frontOffice/js/bootstrap.min.js')}}"></script>
    <script src="{{url('frontOffice/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{url('frontOffice/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{url('frontOffice/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('frontOffice/js/jquery.countdown.min.js')}}"></script>
    <script src="{{url('frontOffice/js/jquery.slicknav.js')}}"></script>
    <script src="{{url('frontOffice/js/mixitup.min.js')}}"></script>
    <script src="{{url('frontOffice/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('frontOffice/js/main.js')}}"></script>



</html>
