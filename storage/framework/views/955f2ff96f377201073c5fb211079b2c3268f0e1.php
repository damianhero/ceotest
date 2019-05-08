<?php $__env->startSection('content'); ?>

<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
        <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
            <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Productos</h5>
                    <?php if(Session::has('flash_message_error')): ?>
                        <div class="alert alert-error alert-block" style="background-color:red !important; color:white !important;">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong><?php echo session('flash_message_error'); ?></strong>
                        </div>
                    <?php endif; ?>
                    <?php if(Session::has('flash_message_success')): ?>
                        <div class="alert alert-error alert-block" style="background-color:green !important; color:white !important;">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong><?php echo session('flash_message_success'); ?></strong>
                        </div>
                    <?php endif; ?>

                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Titulo</th>
                                    <th>Pais</th>
                                    <th>Precio</th>
                                    <th>Fecha</th>                                                
                                    <th>Acci&oacute;n</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $worldfeeds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($feed->TITLE); ?></td>
                                    <td><?php echo e($feed->COUNTRY); ?></td>
                                    <td><?php echo e($feed->PRICE); ?></td>
                                    <td><?php echo e($feed->YEAR); ?></td>
                                    <td class="center">
                                    <a href="#" type="button" class="btn btn-success btn-min" data-toggle="modal" data-target="#Modal<?php echo e($feed->id); ?>">Ver más</a>
                                        <a href="<?php echo e(url('/admin/solicitar_xml/'.$feed->id)); ?>" class="btn btn-warning btn-mini">Solicitar</a> 
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

                            <?php $__currentLoopData = $worldfeeds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="modal fade" id="Modal<?php echo e($feed->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
                                    <div class="modal-dialog" role="document ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><?php echo e($feed->title); ?></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true ">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    <div class="row">
                                                    
                                                    <div class="col-md-12 p-2">
                                                        <div class="card">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                    <th scope="col"><b>Descripcion</b></th>
                                                                    <th scope="col"><b>Fecha</b></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                    <td><?php echo e($feed->description); ?></td>
                                                                    <td><?php echo e($feed->pubDate); ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout.admin_design', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>