<div class="container-fluid p-0">
    <div class="mainSlider">
      <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div>
      	<img src="<?php echo e(asset('images/admin/sliders/chicas/'.$slider->imagen)); ?>" style="width:100%;">
        <div style="position:absolute; top:0; left:0; width:40%; height:100%; padding-top:100px; padding-left:70px; background-image:url('<?php echo e(asset('images/admin/sliders/sliderimg.png')); ?>'); background-size:cover;">
          <h1><?php echo e($slider->titulo); ?></h1>
					<h2 style="color:white;"><?php echo e($slider->subtitulo); ?></h2>
					<h3><?php echo e($slider->descripcion); ?></h3><br><br>
					<a href="<?php echo e($slider->url); ?>"><button type="button" class="btn btn-success" style="font-size:12px; background-color:transparent; border:2px solid white; color:white;">Más información</button></a>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>