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
                        <h4 class="card-title">Editar Transporte</h4>
                        <h6 class="card-subtitle"></h6>
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
                        <form enctype="multipart/form-data" class="form-horizontal m-t-20" id="loginform" method="post" action="<?php echo e(url('/admin/edit_transportes/'.$productosDetalles->id)); ?>"><?php echo e(csrf_field()); ?>

                            <div class="card-body">
                                    <div class="form-group row">
                                        <label for="nombre_producto" class="col-sm-3 text-right control-label col-form-label">Nombre</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" value="<?php echo e($productosDetalles->nombre_producto); ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="id_categoria" class="col-sm-3 text-right control-label col-form-label">Categoria</label>
                                        <div class="col-sm-9">
                                            <select name="id_categoria" class="form-control">
                                                <?php echo $categorias_dropdown; ?>                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="imagen" class="col-sm-3 text-right control-label col-form-label">Imagen</label>
                                        <div class="col-sm-9">
                                            <?php if(!empty($productosDetalles->imagen)): ?>
                                            <img style="width:100px;" src="<?php echo e(asset('images/admin/productos/chicas/'.$productosDetalles->imagen)); ?>">
                                            <a href="<?php echo e(url('admin/delete_productos_imagen/'.$productosDetalles->id)); ?>">Eliminar Imagen</a>
                                            <?php endif; ?>
                                            <input hidden name="imagen_actual" value="<?php echo e($productosDetalles->imagen); ?>">
                                            <input type="file" class="form-control" id="imagen" name="imagen">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="email" name="email" value="<?php echo e($productosDetalles->email); ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nombre_producto" class="col-sm-3 text-right control-label col-form-label">Teléfono</label>
                                        <div class="col-sm-9">
                                            <input type="tel" class="form-control" id="telefono" name="telefono" value="<?php echo e($productosDetalles->telefono); ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tipo_servicio" class="col-sm-3 text-right control-label col-form-label">Tipo de Servicio</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="tipo_servicio" name="tipo_servicio" value="<?php echo e($productosDetalles->tipo_servicio); ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="descripcion" class="col-sm-3 text-right control-label col-form-label">Descripcion breve</label>
                                        <div class="col-sm-9">
                                            <textarea name="descripcion" class="form-control" required><?php echo e($productosDetalles->descripcion); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="descripcion2" class="col-sm-3 text-right control-label col-form-label">Descripcion</label>
                                        <div class="col-sm-9">
                                            <textarea name="descripcion2" class="form-control" required><?php echo e($productosDetalles->descripcion2); ?></textarea>
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