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
                    <div class="card-body wizard-content">
                        <h4 class="card-title">Editar Categoria</h4>
                        <h6 class="card-subtitle"></h6>
                        <form class="form-horizontal m-t-20" id="loginform" method="post" action="<?php echo e(url('/admin/edit_categorias/'.$categoriaDetalles->id)); ?>"><?php echo e(csrf_field()); ?>

                            <div class="card-body">
                                    <div class="form-group row">
                                        <label for="nombre" class="col-sm-3 text-right control-label col-form-label">Nombre</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo e($categoriaDetalles->nombre); ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="parent_id" class="col-sm-3 text-right control-label col-form-label">¿Pertenece a una categoria? Especifica cuál</label>
                                        <div class="col-sm-9">
                                            <select name="parent_id" class="form-control">
                                                <option value="0">Ninguna</option>
                                                <?php $__currentLoopData = $niveles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($val->id); ?>" <?php if($val->id == $categoriaDetalles->parent_id): ?> selected <?php endif; ?>><?php echo e($val->nombre); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="descripcion" class="col-sm-3 text-right control-label col-form-label">Descripcion</label>
                                        <div class="col-sm-9">
                                            <textarea name="descripcion" class="form-control" required><?php echo e($categoriaDetalles->descripcion); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="url" class="col-sm-3 text-right control-label col-form-label">URL</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="url" name="url" value="<?php echo e($categoriaDetalles->url); ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-3 text-right control-label col-form-label">Habilitado</label>
                                        <div class="col-sm-1 pt-2">
                                            <input type="checkbox" class="form-control" id="status" 
                                            name="status" <?php if($categoriaDetalles->status=="1"): ?> checked <?php endif; ?> value="1">
                                        </div>
                                    </div>
                                </div>
                        <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20">
                                        <button class="btn btn-warning" type="submit">Editar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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
<?php echo $__env->make('layouts.adminLayout.admin_design', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>