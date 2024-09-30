<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    



<link rel="shortcut icon" href="{{asset('backend/images/favicon.ico')}}">

<!-- DataTables -->
<link href="{{asset('backend/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend/plugins/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend/plugins/datatables/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>


<link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('backend/css/icons.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('backend/css/style.css')}}" rel="stylesheet" type="text/css">
    <!-- Scripts -->


</head>
<body>
    <div id="app">
      <!-- Begin page -->
      <div id="wrapper">

<!-- Top Bar Start -->
 @if (Request::is('admin*'))
 @include('layouts.partial.topbar')
 @endif

<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->

@if (Request::is('admin*'))
@include('layouts.partial.leftsidebar') 

 @endif

<!-- Left Sidebar End -->

<!-- Start right Content here -->

@yield('content')
<!-- End Right content here -->

</div>
<!-- END wrapper -->
</div>
       <!-- jQuery  -->
       <script src="{{asset('backend/js/jquery.min.js')}}"></script>
        <script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('backend/js/modernizr.min.js')}}"></script>
        <script src="{{asset('backend/js/detect.js')}}"></script>
        <script src="{{asset('backend/js/fastclick.js')}}"></script>
        <script src="{{asset('backend/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('backend/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('backend/js/waves.js')}}"></script>
        <script src="{{asset('backend/js/wow.min.js')}}"></script>
        <script src="{{asset('backend/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('backend/js/jquery.scrollTo.min.js')}}"></script>

        <script src="{{asset('backend/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

        <!-- Datatables-->
        <script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('backend/plugins/datatables/dataTables.bootstrap.js')}}"></script>
        <script src="{{asset('backend/plugins/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('backend/plugins/datatables/responsive.bootstrap.min.js')}}"></script>

        <script src="{{asset('backend/pages/dashborad.js')}}"></script>

        <script src="{{asset('backend/js/app.js')}}"></script>
</body>
</html>
