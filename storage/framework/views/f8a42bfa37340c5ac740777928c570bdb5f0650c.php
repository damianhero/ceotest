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
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('images/admin/favicon.png')); ?>">
    <title>Administrador</title>
    <!-- Custom CSS -->
    <link href="<?php echo e(asset('assets/libs/flot/css/float-chart.css')); ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo e(asset('dist/css/style.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/libs/jquery-steps/jquery.steps.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/libs/jquery-steps/steps.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('dist/css/style.min.css')); ?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php echo $__env->make('layouts.adminlayout.admin_header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php echo $__env->make('layouts.adminlayout.admin_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('layouts.adminlayout.admin_footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo e(asset('assets/libs/jquery/dist/jquery.min.js')); ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo e(asset('assets/libs/popper.js/dist/umd/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/extra-libs/sparkline/sparkline.js')); ?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo e(asset('dist/js/waves.js')); ?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo e(asset('dist/js/sidebarmenu.js')); ?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo e(asset('dist/js/custom.min.js')); ?>"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="<?php echo e(asset('assets/libs/flot/excanvas.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/flot/jquery.flot.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/flot/jquery.flot.pie.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/flot/jquery.flot.time.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/flot/jquery.flot.stack.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/flot/jquery.flot.crosshair.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/pages/chart/chart-page-init.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/jquery-steps/build/jquery.steps.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/jquery-validation/dist/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/extra-libs/multicheck/datatable-checkbox-init.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/extra-libs/multicheck/jquery.multicheck.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/extra-libs/DataTables/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/libs/toastr/build/toastr.min.js')); ?>"></script>
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
        // Basic Example with form

    var form = $("#example-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) { element.before(error); },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });
     form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function(event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function(event, currentIndex) {
            alert("Submitted!");
        }
    });


    </script>

    <script>

        $('#password').click(function(){
        var actual_password = $('#actual_password').val();
        $.ajax({
            type:'get',
            url:'/admin/check-pwd',
            data:{actual_password:actual_password},
            success:function(resp){
                //alert(resp);
                if(resp=="false"){
                    $("#chkPwd").html("<font color = 'red'>Contrasena Actual Incorrecta</font>");
                }elseif(resp=="true"){
                    $("#chkPwd").html("<font color = 'green'>Contrasena Actual Correcta</font>");
                }
            },error:function(){
                alert('Error');
            }
        });
    });

    
    </script>

    <script>

        $(document).ready(function(){
            var maxField = 20; //Input fields increment limitation
            var addButton = $('.add_button'); //Add button selector
            var wrapper = $('.field_wrapper'); //Input field wrapper
            var fieldHTML = '<div class="field_wrapper"><div><input type="text" name="sku[]" id="sku" placeholder="Código" style="width:120px;"/> <input type="text" name="precio[]" id="precio" placeholder="Precio" style="width:120px;"/> <input type="text" name="stock[]" id="stock" placeholder="Stock" style="width:120px;"/><a href="javascript:void(0);" class="remove_button">Omitir</a></div></div>'; //New input field html 
            var x = 1; //Initial field counter is 1
            
            //Once add button is clicked
            $(addButton).click(function(){
                //Check maximum number of input fields
                if(x < maxField){ 
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); //Add field html
                }
            });
            
            //Once remove button is clicked
            $(wrapper).on('click', '.remove_button', function(e){
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });

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