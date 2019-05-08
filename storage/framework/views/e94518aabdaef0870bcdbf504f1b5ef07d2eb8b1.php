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
                                <h5 class="card-title">Categorias</h5>
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
                                                <th>Id-Categoria</th>
                                                <th>URL</th>
                                                <th>Descripci&oacute;n</th>
                                                <th>Acci&oacute;n</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                <?php if(!empty($categoria->imagen)): ?>
                                                <img src="<?php echo e(asset('images/admin/categorias/chicas/'.$categoria->imagen)); ?>" style="width:50px;">
                                                <?php endif; ?>
                                                </td>
                                                <td><?php echo e($categoria->id); ?></td>
                                                <td><?php echo e($categoria->nombre); ?></td>
                                                <td><?php echo e($categoria->parent_id); ?></td>
                                                <td><?php echo e($categoria->url); ?></td>
                                                <td><?php echo e($categoria->descripcion); ?></td>
                                                <td class="center">
                                                    <a href="<?php echo e(url('/admin/edit_categorias/'.$categoria->id)); ?>" class="btn btn-primary btn-mini">Editar</a> 
                                                    <a id="delCat" href="<?php echo e(url('/admin/delete_categorias/'.$categoria->id)); ?>" class="btn btn-danger btn-mini">Eliminar</a>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <!--tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr-->
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
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
<?php echo $__env->make('layouts.adminlayout.admin_design', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>