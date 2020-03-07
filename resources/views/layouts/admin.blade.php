@if( Auth::user()->role=='admin')

<!doctype html>
<html lang="en">

<head>
<title>لوحة التحكم</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Oculux Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
<meta name="keywords" content="admin template, Oculux admin template, dashboard template, flat admin template, responsive admin template, web app, Light Dark version">
<meta name="author" content="GetBootstrap, design by: puffintheme.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/animate-css/vivify.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/vendor/c3/c3.min.css')}}"/>

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{asset('assets/assets/css/site.min.css')}}">
    @stack('css')
</head>
<body class="theme-cyan font-montserrat rtl">
@include('include.admin')
<div class="container">
    @include('sweetalert::alert')

    </div>
@yield('contect')


<!-- Javascript -->
    @stack('scripts')
<script src="{{asset('assets/assets/bundles/libscripts.bundle.js')}}"></script>
<script src="{{asset('assets/assets/bundles/vendorscripts.bundle.js')}}"></script>

<script src="{{asset('assets/assets/bundles/c3.bundle.js')}}"></script>

<script src="{{asset('assets/assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('assets/assets/js/index.js')}}"></script>
</body>
</html>

@endif
