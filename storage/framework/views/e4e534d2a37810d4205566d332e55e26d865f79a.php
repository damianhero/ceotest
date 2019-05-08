<?php $__env->startSection('content'); ?>

	<section id="slider"><!--slider-->
		<?php echo $__env->make('layouts.slider', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</section><!--/slider-->
	
	<section>
		<div class="container-fluid">
			<div class="row">

			<div class="col-md-3 p-5">
					<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				</div>
				
				<div class="col-sm-9 pl-0 pt-5 pb-5">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Guía de Transportes</h2>
						<div class="table-responsive" style="font-size:15px !important;">
                <table id="zero_config" class="table table-striped table-bordered">
                  <thead>
                  	<tr>
                      <th></th>
                      <th>Nombre<i class='fas fa-angle-down'></i> <i class='fas fa-angle-up'></i></th>
                      <th>Email<i class='fas fa-angle-down'></i> <i class='fas fa-angle-up'></i></th>
                      <th>Teléfono<i class='fas fa-angle-down'></i> <i class='fas fa-angle-up'></i></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
										<?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td style="border-left: 1px solid transparent; border-right: 1px solid transparent; width:90px;">
                        <?php if(!empty($producto->imagen)): ?>
                            <img src="<?php echo e(asset('images/admin/productos/chicas/'.$producto->imagen)); ?>" style="width:70px;">
                        <?php endif; ?>
                        </td>
                        <td style="border-left: 1px solid transparent; border-right: 1px solid transparent;"><?php echo e($producto->nombre_producto); ?></td>
                        <td style="border-left: 1px solid transparent; border-right: 1px solid transparent;"><?php echo e($producto->email); ?></td>
                        <td style="border-left: 1px solid transparent; border-right: 1px solid transparent;"><?php echo e($producto->telefono); ?></td>
												<td style="border-left: 1px solid transparent; border-right: 1px solid transparent;"><a style="font-size:15px !important;" href="<?php echo e(url('transporte/'.$producto->id)); ?>" class="btn btn-success btn-mini">Ver más</a></td>
											</tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
            </div>

						
					</div><!--features_items-->
					
				</div>

				<div class="col-md-2"></div>


				<?php echo $__env->make('layouts.nosotros', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

			</div>
		</div>
	</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.design', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>