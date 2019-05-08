<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Inicio | Guia de Transportes</title>
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/prettyPhoto.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/price-range.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/animate.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('css/main.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('css/responsive.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/libs/flot/css/float-chart.css')); ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo e(asset('assets/libs/jquery-steps/jquery.steps.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/libs/jquery-steps/steps.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('dist/css/style.css')); ?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo e(asset('images/ico/apple-touch-icon-144-precomposed.png')); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo e(asset('images/ico/apple-touch-icon-114-precomposed.png')); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo e(asset('images/ico/apple-touch-icon-72-precomposed.png')); ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo e(asset('images/ico/apple-touch-icon-57-precomposed.png')); ?>">

    <!--slider-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('slick/slick.css')); ?>">
  	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('slick/slick-theme.css')); ?>">

    <!--FONTS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head><!--/head-->

<body>
	<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	
	<?php echo $__env->yieldContent('content'); ?>
	
	<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	

  
    <script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
	<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/jquery.scrollUp.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/price-range.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.prettyPhoto.js')); ?>"></script>
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/flot/excanvas.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/flot/jquery.flot.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/flot/jquery.flot.pie.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/flot/jquery.flot.time.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/flot/jquery.flot.stack.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/flot/jquery.flot.crosshair.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/pages/chart/chart-page-init.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/jquery-steps/build/jquery.steps.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/jquery-validation/dist/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/extra-libs/DataTables/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/libs/toastr/build/toastr.min.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.2/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
            /****************************************
            *       Basic Table                   *
            ****************************************/
        $('#zero_config').DataTable();
    </script>
    <!--slider-->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('slick/slick.min.js')); ?>"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $('.mainSlider').slick({
          // nextArrow: '<div class="slick-prev slick-arrow" style="display:block"> <i class="fas fa-quote-right"></i></div>',
          // prevArrow: '<div class="slick-next"> <i class="fas fa-chevron-left"></i></div>',
          arrows:true,
          fade:true,
          autoplay: true,
          autoplaySpeed: 1800,
          dots: false,
          infinite: true,
          speed: 900,
          slidesToShow: 1,
          slidesToScroll: 1,
        });
      }); 
    </script>

    <script type="text/javascript">
    $('.responsive').slick({
      arrows:true,
      speed: 5000,
      dots: false,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 0,
      centerMode: true,
      cssEase: 'linear',
      slidesToShow: 3,
      slidesToScroll: 1,
      infinite: true,
      initialSlide: 3,
      responsive: [
      {
        breakpoint: 880,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
        {
        breakpoint: 580,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
      ]

    });

    </script>
</body>
</html>