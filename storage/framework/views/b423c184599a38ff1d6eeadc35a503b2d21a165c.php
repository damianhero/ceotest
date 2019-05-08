<section>
<div class="row m-0">
<?php $__currentLoopData = $sliderscats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slidercat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="col-md-3 p-0">
    <div class="contenedor text-center">
    <h4><?php echo e($slidercat->nombre); ?></h4>
      <img src="<?php echo e(asset('images/admin/categorias/chicas/'.$slidercat->imagen)); ?>" alt="<?php echo e($slidercat->nombre); ?>" class="image">
      <div class="overlay">
        <div class="text">
          <?php echo e($slidercat->descripcion); ?>

        </div>
      </div>
    </div>
  </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</section>