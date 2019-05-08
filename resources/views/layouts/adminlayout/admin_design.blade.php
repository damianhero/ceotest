<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/admin/favicon.png')}}">
    <title>Administrador</title>
    <!-- Custom CSS -->
    <link href="{{asset('assets/libs/flot/css/float-chart.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('dist/css/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/jquery-steps/jquery.steps.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/jquery-steps/steps.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/style.min.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader-->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Header -->
        <!-- ============================================================== -->
        @include('layouts.adminlayout.admin_header')
        <!-- ============================================================== -->
        <!-- Fin Header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Sidebar  -->
        <!-- ============================================================== -->
        @include('layouts.adminlayout.admin_sidebar')
        <!-- ============================================================== -->
        <!-- Fin Sidebar  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        @yield('content')

        @include('layouts.adminlayout.admin_footer')
        <!-- ============================================================== -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('dist/js/custom.min.js')}}"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="{{asset('assets/libs/flot/excanvas.js')}}"></script>
    <script src="{{asset('assets/libs/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('assets/libs/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('assets/libs/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('assets/libs/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
    <script src="{{asset('assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('dist/js/pages/chart/chart-page-init.js')}}"></script>
    <script src="{{asset('assets/libs/jquery-steps/build/jquery.steps.min.js')}}"></script>
    <script src="{{asset('assets/libs/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
    <script src="{{asset('assets/extra-libs/multicheck/jquery.multicheck.js')}}"></script>
    <script src="{{asset('assets/extra-libs/DataTables/datatables.min.js')}}"></script>
    <script src="{{asset('/assets/libs/toastr/build/toastr.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.2/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
            /****************************************
            *       Basic Table                   *
            ****************************************/
        $('#zero_config').DataTable();
    </script>


    <script>
        $(".deleteAtPro").click(function(){
            var id = $(this).attr('rel');
            var deleteFunction = $(this).attr('rel1');
            swal({
                title: "¿Seguro que desea eliminarlo?",
                text: "No podras revertir esta acción",
                button: "Eliminar",
                icon: "warning",
                dangerMode: true,
                })
                .then(willDelete => {
                if (willDelete) {
                    swal("¡Eliminado!", "Se ha eliminado con éxito", "success");
                    window.location.href="/admin/"+deleteFunction+"/"+id;
                }
            });
        });  
    
    </script>

</body>

</html>