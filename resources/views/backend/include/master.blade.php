
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard 2</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('backend')}}/css/adminlte.min.css">
    <!-- cnd link datatable-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css"/>
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="{{asset('backend')}}/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
@include('backend.include.header')
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('backend.include.sidebar')

<!-- Content Wrapper. Contains page content -->
  @yield('section')
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
        </div>
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('backend')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{asset('backend')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('backend')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend')}}/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('backend')}}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{asset('backend')}}/plugins/raphael/raphael.min.js"></script>
<script src="{{asset('backend')}}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{asset('backend')}}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('backend')}}/plugins/chart.js/Chart.min.js"></script>
<!-- DataTable Link js CDN -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
        $('#datatableid').DataTable({
            "pagingType":"full_numbers",
            "lengthMenu":[
                [10, 25, 50, -1],
                [10, 25, 50, "All"],
            ],
            responsive:true,
            language:{
                search:"_INPUT_",
                searchPlaceholder: "Search All Data"
            }
        });
    });
</script>


<!-- AdminLTE for demo purposes -->
{{--<script src="{{asset('backend')}}/js/demo.js"></script>--}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('backend')}}/js/pages/dashboard2.js"></script>
</body>
</html>
