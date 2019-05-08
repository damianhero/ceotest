<?php $__env->startSection('content'); ?>

<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Libreria</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <a href="<?php echo e(url('/admin/inicio')); ?>">
                            <div class="box text-center" style="background-color:#28b779;">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                <h6 class="text-white">Dashboard</h6>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <a href="<?php echo e(url('/admin/view_categorias')); ?>">
                            <div class="box text-center" style="background-color:#28b779;">
                                <h1 class="font-light text-white"><img src="<?php echo e(asset('images/admin/categoria-icon.png')); ?>" alt=""></h1>
                                <h6 class="text-white">Categorias</h6>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <a href="<?php echo e(url('/admin/view_transportes')); ?>">
                            <div class="box text-center" style="background-color:#28b779;">
                                <h1 class="font-light text-white"><img src="<?php echo e(asset('images/admin/productos-icon.png')); ?>" alt=""></h1>
                                <h6 class="text-white">Transportes</h6>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <a href="<?php echo e(url('/admin/view_contacto')); ?>">
                            <div class="box text-center" style="background-color:#28b779;">
                                <h1 class="font-light text-white"><img src="<?php echo e(asset('images/admin/slider-icon.png')); ?>" alt=""></h1>
                                <h6 class="text-white">Sliders</h6>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <a href="<?php echo e(url('/admin/view_contacto')); ?>">
                            <div class="box text-center" style="background-color:#28b779;">
                                <h1 class="font-light text-white"><img src="<?php echo e(asset('images/admin/contacto-icon.png')); ?>" alt=""></h1>
                                <h6 class="text-white">Contacto</h6>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
        </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlayout.admin_design', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>