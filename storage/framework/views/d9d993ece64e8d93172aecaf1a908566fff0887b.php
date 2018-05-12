 

 <?php $__env->startSection('content'); ?>

 	<div class="col-sm-8 blog-main">
 		
 		<h1>Login</h1>

 		<form method="POST" action="/login">
 			
 			<?php echo e(csrf_field()); ?>


  			<div class="form-group">
    			<label for="email">Email</label>
    			<input type="text" class="form-control" id="email" name="email" required>
  			</div>

  			<div class="form-group">
    			<label for="password">Password</label>
    			<input type="password" class="form-control" id="password" name="password" required>
  			</div>

  			<div class="form-group">
				<button type="submit" class="btn btn-primary">Register</button>
			</div>

 		</form>	

 		<?php echo $__env->make('layouts.validate', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

 	</div>
 
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>