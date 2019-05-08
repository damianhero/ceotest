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
                        <h4 class="card-title">Agregar Contacto a Transportes</h4>
                        <h6 class="card-subtitle"></h6>
                        <form enctype="multipart/form-data"  class="form-horizontal m-t-20" id="loginform" method="post" action="<?php echo e(url('/admin/add_contacto/'.$contactoDetalles->id)); ?>"><?php echo e(csrf_field()); ?>

                            <div class="card-body">
                                    <div class="form-group row">
                                        <label for="empresa" class="col-sm-3 text-right control-label col-form-label">Nombre</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="empresa" name="empresa" value="<?php echo e($contactoDetalles->empresa); ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="id_categoria" class="col-sm-3 text-right control-label col-form-label">Categoria</label>
                                        <div class="col-sm-9">
                                            <select name="id_categoria" class="form-control" required>
                                                <?php echo $categorias_dropdown; ?>                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="descripcion" class="col-sm-3 text-right control-label col-form-label">Descripcion breve</label>
                                        <div class="col-sm-9">
                                            <textarea name="descripcion" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="descripcion2" class="col-sm-3 text-right control-label col-form-label">Descripcion</label>
                                        <div class="col-sm-9">
                                            <textarea name="descripcion2" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="email" name="email" value="<?php echo e($contactoDetalles->email); ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="telefono" class="col-sm-3 text-right control-label col-form-label">Teléfono</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo e($contactoDetalles->telefono); ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tipo_servicio" class="col-sm-3 text-right control-label col-form-label">Tipo de Servicio</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="tipo_servicio" name="tipo_servicio" value="<?php echo e($contactoDetalles->tipo_servicio); ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="imagen" class="col-sm-3 text-right control-label col-form-label">Imagen</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="imagen" name="imagen" required>
                                        </div>
                                    </div>
                                </div>
                        <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20">
                                        <button class="btn btn-success" type="submit">Agregar</button>
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
<?php echo $__env->make('layouts.adminlayout.admin_design', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>