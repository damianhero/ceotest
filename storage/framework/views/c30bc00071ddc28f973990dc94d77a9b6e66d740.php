<?php $__env->startSection('content'); ?>

<section id="slider"><!--slider-->
	<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<!--ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol-->
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6 pt-5">
									<h1><span style="color:rgba(31,197,105,1);">GDT</span> - Transportes</h1>
									<h2>Aquí puedes anunciarte</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-success" style="font-size:12px;">Más información</button>
								</div>
								<div class="col-sm-6 text-center">
									<center><img src="<?php echo e(asset('images/home/slider1.png')); ?>" class="girl img-responsive" alt="" /></center>
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6 pt-5">
									<h1><span style="color:rgba(31,197,105,1);">GDT</span> - Transportes</h1>
									<h2>Aquí puedes anunciarte</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-success" style="font-size:12px;">Más información</button>
								</div>
								<div class="col-sm-6 text-center">
									<center><img src="<?php echo e(asset('images/home/slider1.png')); ?>" class="girl img-responsive" alt="" /></center>
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6 pt-5">
									<h1><span style="color:rgba(31,197,105,1);">GDT</span> - Transportes</h1>
									<h2>Aquí puedes anunciarte</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-success" style="font-size:12px;">Más información</button>
								</div>
								<div class="col-sm-6 text-center">
									<center><img src="<?php echo e(asset('images/home/slider1.png')); ?>" class="girl img-responsive" alt="" /></center>
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i style="color:rgba(31,197,105,1);" class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i style="color:rgba(31,197,105,1);" class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
	</div>
	</section><!--/slider-->
	
	<section>
		<div class="container-fluid">
			<div class="row">
				
				<div class="col-sm-8 p-5">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Guía de Transportes</h2>
						<div class="table-responsive" style="font-size:15px !important;">
                <table id="zero_config" class="table table-striped table-bordered">
                  <thead>
                  	<tr>
                      <th><i class='fas fa-angle-down'></i> <i class='fas fa-angle-up'></i></th>
                      <th><i class='fas fa-angle-down'></i> <i class='fas fa-angle-up'></i></th>
                      <th><i class='fas fa-angle-down'></i> <i class='fas fa-angle-up'></i></th>
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
                        <td style="border-left: 1px solid transparent; border-right: 1px solid transparent;"><?php echo e($producto->descripcion); ?></td>
												<td style="border-left: 1px solid transparent; border-right: 1px solid transparent;"><a style="font-size:15px !important;" href="<?php echo e(url('producto/'.$producto->id)); ?>" class="btn btn-success btn-mini">Ver más</a></td>
											</tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
            </div>

						
					</div><!--features_items-->
					
				</div>

				<div class="col-md-2"></div>


				<div class="col-md-12 p-5 text-center">
						<div class="row m-0">
							<div class="col-md-8 pt-5 pb-5 ml-auto mr-auto">
							<h1>Busqueda de Directorios de Transporte</h1> 
							<p style="font-size:13px;">Directorio gratuito on line de empresas relacionadas con estas actividades. 
							Brinda información de unas xxx empresas, agrupadas según sus especialidades diferentes en diferentes índices, mencionando domicilios, teléfonos, datos en Internet, servicios o
 							productos que proveen, y en el caso de los transportes, localidades y servicios que atienden.</p>
							</div>
						</div>
				</div>

			</div>
		</div>
	</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.design', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>