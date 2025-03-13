<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KJ - Alumni</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.svg">
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/animate.min.css')}}">
    <!-- fontawesome 6.4.2 -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/fontawesome.min.css')}}">
    <!-- bootstrap min css -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper.min.css')}}">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/magnific-popup.css')}}">
    <!-- metismenu scss -->
    <link rel="stylesheet" href="{{asset("assets/css/vendor/metismenu.css")}}">
    <!-- nice select js -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/jquery-ui.css')}}">
    <!-- custom style css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>

<body class="page">
    @include('layouts.header')
    @yield('header')
    @yield('content')
    @include('layouts.footer')
    @include('layouts.footer_script')
    @yield('footer_script')
</body>


</html>
