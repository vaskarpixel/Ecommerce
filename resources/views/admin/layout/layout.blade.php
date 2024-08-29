<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('admin/assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('admin/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/assets/css/adminlte.min.css')}}">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{ asset('admin/assets/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

@include('admin.layout.header');
@include('admin.layout.sidebar');
@yield('content');

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

@include('admin.layout.footer');
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src=" {{ asset('admin/assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src=" {{ asset('admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src=" {{ asset('admin/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src=" {{ asset('admin/assets/js/adminlte.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src=" {{ asset('admin/assets/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src=" {{ asset('admin/assets/plugins/raphael/raphael.min.js') }}"></script>
<script src=" {{ asset('admin/assets/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src=" {{ asset('admin/assets/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src=" {{ asset('admin/assets/plugins/chart.js/Chart.min.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<script src=" {{ asset('admin/assets/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=" {{ asset('admin/assets/js/pages/dashboard2.js') }}"></script> 
</body>
</html>
