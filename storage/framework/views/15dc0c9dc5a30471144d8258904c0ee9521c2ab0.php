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
                        <h4 class="card-title">Agregar Atributo a Producto</h4>
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
                        <form enctype="multipart/form-data" class="form-horizontal m-t-20" id="loginform" method="post" action="<?php echo e(url('/admin/add_productos_atributos/'.$productosDetalles->id)); ?>"><?php echo e(csrf_field()); ?>

                            <div class="card-body">
                                    <input type="hidden" value="<?php echo e($productosDetalles->id); ?>">
                                    <div class="form-group row">
                                        <label for="nombre_producto" class="col-sm-3 text-right control-label col-form-label">Nombre</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" disabled value="<?php echo e($productosDetalles->nombre_producto); ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="codigo_producto" class="col-sm-3 text-right control-label col-form-label">Codigo</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="codigo_producto" name="codigo_producto" disabled value="<?php echo e($productosDetalles->codigo_producto); ?>">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <div class="col-sm-9 offset-3">
                                        <div class="field_wrapper">
                                            <div>
                                                <input required type="text" name="sku[]" id="sku" placeholder="Código" style="width:120px;"/>
                                                <input required type="text" name="precio[]" id="precio" placeholder="Precio" style="width:120px;"/>
                                                <input required type="text" name="stock[]" id="stock" placeholder="Stock" style="width:120px;"/>
                                                <a href="javascript:void(0);" class="add_button" title="Add field">Agregar</a>
                                            </div>
                                        </div>
                                    </div>
                                    </div>


                                </div>
                        <div class="row border-top text-right">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20">
                                        <button class="btn btn-primary" type="submit">Agregar Atributo</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


                <div class="card">
                <div class="card-body wizard-content">
                        <h4 class="card-title">Atributos</h4>
                        <h6 class="card-subtitle"></h6>
                            <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID Atributo</th>
                                                <th>SKU</th>
                                                <th>Precio</th>
                                                <th>Stock</th>
                                                <th>Acci&oacute;n</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $productosDetalles['atributos']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $atributo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($atributo->id); ?></td>
                                                <td><?php echo e($atributo->sku); ?></td>
                                                <td><?php echo e($atributo->precio); ?></td>
                                                <td><?php echo e($atributo->stock); ?></td>
                                                <td class="center">
                                                    <a rel="<?php echo e($atributo->id); ?>" href="javascript:" rel1="delete_productos_atributos" class="btn btn-danger btn-mini deleteAtPro">Eliminar</a>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>

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
<?php echo $__env->make('layouts.adminLayout.admin_design', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>