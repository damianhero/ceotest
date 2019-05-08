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
                        <h4 class="card-title">Editar Slider</h4>
                        <h6 class="card-subtitle"></h6>
                        <form enctype="multipart/form-data"  class="form-horizontal m-t-20" id="loginform" method="post" action="<?php echo e(url('/admin/edit_sliders/'.$sliderDetalles->id)); ?>"><?php echo e(csrf_field()); ?>

                            <div class="card-body">
                                    <div class="form-group row">
                                        <label for="titulo" class="col-sm-3 text-right control-label col-form-label">Titulo</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo e($sliderDetalles->titulo); ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="subtitulo" class="col-sm-3 text-right control-label col-form-label">Subtitulo</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="subtitulo" name="subtitulo" value="<?php echo e($sliderDetalles->subtitulo); ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="imagen" class="col-sm-3 text-right control-label col-form-label">Imagen</label>
                                        <div class="col-sm-9">
                                            <?php if(!empty($sliderDetalles->imagen)): ?>
                                            <img style="width:100px;" src="<?php echo e(asset('images/admin/sliders/chicas/'.$sliderDetalles->imagen)); ?>">
                                            <a href="<?php echo e(url('admin/delete_sliders_imagen/'.$sliderDetalles->id)); ?>">Eliminar Imagen</a>
                                            <?php endif; ?>
                                            <input hidden name="imagen_actual" value="<?php echo e($sliderDetalles->imagen); ?>">
                                            <input type="file" class="form-control" id="imagen" name="imagen">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="descripcion" class="col-sm-3 text-right control-label col-form-label">Descripcion</label>
                                        <div class="col-sm-9">
                                            <textarea name="descripcion" class="form-control" required><?php echo e($sliderDetalles->descripcion); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="url" class="col-sm-3 text-right control-label col-form-label">URL</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="url" name="url" value="<?php echo e($sliderDetalles->url); ?>" required>
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