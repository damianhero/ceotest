<?php $__env->startSection('content'); ?>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<?php //echo $categorias_menu; ?>
								<?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php if($cat->status=="1"): ?>
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" 
											href="#<?php echo e($cat->id); ?>">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											<a href="<?php echo e(url('productos/'.$cat->url)); ?>"><?php echo e($cat->nombre); ?></a> 
										</a>
									</h4>
								</div>
								<div id="<?php echo e($cat->id); ?>" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<?php $__currentLoopData = $cat->categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<?php if($subcat->status=="1"): ?>
											<li><a href="<?php echo e(url('productos/'.$subcat->url)); ?>"><?php echo e($subcat->nombre); ?></a></li>
											<?php endif; ?>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											
										</ul>
									</div>
								</div>
								<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>

						</div><!--/category-products-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="<?php echo e(asset('images/admin/productos/chicas/'.$productosDetalles->imagen)); ?>" alt="" />
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div>
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?php echo e($productosDetalles->nombre_producto); ?></h2>
								<p>Código: <?php echo e($productosDetalles->codigo_producto); ?></p>
                                <p>
                                    <select name="" id="selSku">
                                        <option value="">Seleciona</option>
                                        <?php $__currentLoopData = $productosDetalles->atributos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($productosDetalles->id); ?>*<?php echo e($sku->sku); ?>"><?php echo e($sku->sku); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </p>
								<img src="images/product-details/rating.png" alt="" />
								<span>
									<span id="getPrecio">US $<?php echo e($productosDetalles->precio); ?></span>
									<label>Quantity:</label>
									<input type="text" value="3" />
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</span>
								<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> New</p>
								<p><b>Brand:</b> E-SHOPPER</p>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->


                    <div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#descripcion" data-toggle="tab">Descripción</a></li>
								<li><a href="#materiales" data-toggle="tab">Materiales y más</a></li>
								<li><a href="#envio" data-toggle="tab">Opciones de Envio</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="descripcion" >
                                <div class="col-sm-12 p-3">
                                    <p><?php echo e($productosDetalles->descripcion); ?></p>
                                </div>
							</div>
							
							<div class="tab-pane fade" id="materiales" >
                                <div class="col-sm-12 p-3">
                                    <p><?php echo e($productosDetalles->manejo_materiales); ?></p>
                                </div>
							</div>
							
							<div class="tab-pane fade" id="envio" >
                                <div class="col-sm-12 p-3">
                                    <p>Productos de la mpas alta calidad</p>
                                </div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
				</div>
			</div>
		</div>
	</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.design', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>