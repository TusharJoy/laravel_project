
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blog Template for Bootstrap</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
    <link href="<?php echo e(URL::asset('css/app.css')); ?>" rel="stylesheet" type="text/css" >
  </head>

  <body>

    <?php if($flash = session('message')): ?>

        <div id="alert" class="alert alert-success" role='alert'>
            <strong> <?php echo e($flash); ?></strong>
            
        </div>
    <?php endif; ?>

    <?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="container">
      <dir class="row">
            <?php echo $__env->yieldContent('content'); ?>

            <?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </dir>
      
    </div>
    <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </body>
</html>

