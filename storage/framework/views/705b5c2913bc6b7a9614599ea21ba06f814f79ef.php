
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

<link href="css/album.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Album example for Bootstrap</title>
  </head>

  <body>    

  <?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <div>
    <?php echo $__env->yieldContent('content'); ?>
  </div>

  <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </body>
</html>
