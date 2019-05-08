<?php $__env->startSection('content'); ?>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="<?php echo e(asset('images/admin/productos/chicas/'.$productosDetalles->imagen)); ?>" alt="" />
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?php echo e($productosDetalles->nombre_producto); ?></h2>
								<span>
										<?php echo e($productosDetalles->descripcion); ?>

								</span>
								<p><?php echo e($productosDetalles->descripcion2); ?></p>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
				</div>
			</div>
		</div>
	</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.design', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>