<?php

use App\Http\Controllers\Controller;
$mainCategorias = Controller::mainCategorias();

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-0">
<a href="<?php echo e(url('/')); ?>"><h1 style="color:rgba(31,197,105,1);">GDT</h1><!--img src="images/home/logo.png" alt="" /--></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo e(url('/')); ?>">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Nosotros</a>
	  </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Transportes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			<?php $__currentLoopData = $mainCategorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($cat->status==1): ?>
		  		<a class="dropdown-item" href="<?php echo e(asset('/transportes/'.$cat->url)); ?>"><?php echo e($cat->nombre); ?></a>
		  	<?php endif; ?>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
	  </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">Contacto</a>
	  </li>
    </ul>
    <table>
      <tr>
        <td><i style="font-size:20px; background-color:transparent;" class="fa fa-facebook ml-3 mr-3"></i> </td>
        <td><i style="font-size:20px; background-color:transparent;" class="fa fa-twitter ml-3 mr-3"></i> </td>
        <td><i style="font-size:20px; background-color:transparent;" class="fa fa-linkedin ml-3 mr-3"></i> </td>
      </tr>
    </table>
  </div>
</nav>