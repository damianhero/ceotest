                    <div class="left-sidebar p-3">
						<h3>Tipos de Transportes</h3>
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
											<a href="<?php echo e(asset('/transportes/'.$cat->url)); ?>"><?php echo e($cat->nombre); ?> </a>
										</a>
									</h4>
								</div>
								<div id="<?php echo e($cat->id); ?>" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<?php $__currentLoopData = $cat->categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<?php if($subcat->status=="1"): ?>
											<li><a href="<?php echo e(asset('/transportes/'.$subcat->url)); ?>"><?php echo e($subcat->nombre); ?></a></li>
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