<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @yield('tittle')
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Google Font: Kaffe -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
  integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('templates/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('templates/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('templates/dist/css/adminlte.min.css') }}">
  @stack('css')
</head>
<style>
  .brand-text{
    font-family: 'Yanone Kaffeesatz', sans-serif;
  }
</style>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{asset('img/animate.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

<!-- header -->

@includeIf('layouts.header')

<!-- end header -->

<!-- sidebar -->

@includeIf('layouts.sidebar')

<!-- end sidebar -->

<!-- Start Content -->
  @yield('content') <!-- mengambil tampilan dari section bernama content -->
<!-- End Content -->

  
<!-- footer -->



<footer class="main-footer">
  <strong>Copyright &copy; 2024 <a href="https://youtu.be/f3cBdPiHfxc?si=1-2tra-9w6urYoIn">Oyyen Coffe</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 1.0.0
  </div>
</footer>

<!-- end footer -->

</div>

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('templates/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('templates/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('templates/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('templates/dist/js/adminlte.js') }}"></script>
<!-- jQuery Mapael -->
<script src="{{ asset('templates/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('templates/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('templates/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('templates/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('templates/plugins/chart.js/Chart.min.js') }}"></script>
@stack('scripts')
</body>
</html>