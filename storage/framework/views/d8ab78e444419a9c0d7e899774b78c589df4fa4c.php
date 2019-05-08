<?php $__currentLoopData = $nosotros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-12 p-5 text-center" style="background-image:url(<?php echo e(asset('images/admin/nosotros/medianas/'.$nos->imagen)); ?>);
				background-attachment: fixed; background-repeat: no-repeat; background-size: cover; color:white;">
	<div class="row m-0">
		<div class="col-md-7 pt-5 pb-5 ml-auto mr-auto">
			<h1><?php echo e($nos->titulo); ?></h1> 
			<p style="font-size:15px;"><?php echo e($nos->descripcion); ?></p>
		</div>
	</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>