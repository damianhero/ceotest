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
                                                <th>Imagen</th>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Categoria</th>
                                                <th>Código</th>
                                                <th>Precio</th>
                                                <th>Acci&oacute;n</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                <?php if(!empty($producto->imagen)): ?>
                                                <img src="<?php echo e(asset('images/admin/productos/chicas/'.$producto->imagen)); ?>" style="width:50px;">
                                                <?php endif; ?>
                                                </td>
                                                <td><?php echo e($producto->id); ?></td>
                                                <td><?php echo e($producto->nombre_producto); ?></td>
                                                <td><?php echo e($producto->categoria_nombre); ?></td>
                                                <td><?php echo e($producto->codigo_producto); ?></td>
                                                <td><?php echo e($producto->precio); ?></td>
                                                <td class="center">
                                                    <a href="#" type="button" class="btn btn-success btn-min" data-toggle="modal" data-target="#Modal<?php echo e($producto->id); ?>">Ver más</a>
                                                    <a href="<?php echo e(url('/admin/add_productos_atributos/'.$producto->id)); ?>" class="btn btn-primary btn-mini">Atributos</a> 
                                                    <a href="<?php echo e(url('/admin/edit_productos/'.$producto->id)); ?>" class="btn btn-warning btn-mini">Editar</a> 
                                                    <a href="<?php echo e(url('/admin/delete_productos/'.$producto->id)); ?>" class="btn btn-danger btn-mini">Eliminar</a>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                                <!-- Modal -->
                                <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="modal fade" id="Modal<?php echo e($producto->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
                                    <div class="modal-dialog" role="document ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><?php echo e($producto->nombre_producto); ?></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true ">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    <div class="row">
                                                    <div class="col-md-5 p-2 text-center">
                                                        <img src="<?php echo e(asset('images/admin/productos/chicas/'.$producto->imagen)); ?>">
                                                    </div>
                                                    <div class="col-md-7 p-2">
                                                        <div class="card">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                    <th scope="col"><b>Descripcion</b></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                    <td><?php echo e($producto->descripcion); ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="card">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                    <th scope="col"><b>Categoria</b></th>
                                                                    <th scope="col"><b>Código</b></th>
                                                                    <th scope="col"><b>Precio</b></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                    <td><?php echo e($producto->categoria_nombre); ?></td></td>
                                                                    <td><?php echo e($producto->codigo_producto); ?></td>
                                                                    <td><?php echo e($producto->precio); ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="card">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                    <th scope="col"><b>Material</b></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                    <td><?php echo e($producto->manejo_materiales); ?></td>
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
                                <!-- Modal -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
        </div> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayout.admin_design', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>