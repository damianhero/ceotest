<?php $__env->startSection('content'); ?>
	
	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-9 ml-auto mr-auto">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="<?php echo e(asset('images/admin/productos/chicas/'.$productosDetalles->imagen)); ?>" alt="" />
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information" style="font-size:16px;"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?php echo e($productosDetalles->nombre_producto); ?></h2>
								<span>
										<?php echo e($productosDetalles->descripcion); ?>

								</span>
								<p><?php echo e($productosDetalles->descripcion2); ?></p>

								<div class="card">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col"><b>Teléfono</b></th>
                                                <th scope="col"><b>Email</b></th>
                                                <th scope="col"><b>Tipo de servicio</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo e($productosDetalles->telefono); ?></td>
                                                <td><?php echo e($productosDetalles->email); ?></td>
                                                <td><?php echo e($productosDetalles->tipo_servicio); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
				</div>
			</div>
		</div>
	</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.design', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>