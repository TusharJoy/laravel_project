<?php $__env->startSection('content'); ?>

<div class="col-sm-8 blog-main">


	<div class="blog-post">
       
    	<h2 class="blog-post-title"><?php echo e($post->title); ?></h2>
    	<p class="blog-post-meta"><?php echo e($post->created_at ->toFormattedDateString()); ?> by</p>
    	<p><?php echo e($post->body); ?></p>
	</div>

	<div class="comments">
		<ul class="list-group">
			
			<?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			
			<li class="list-group-item">
				<strong>
					
					<?php echo e($comment->created_at->diffForHumans()); ?>:&nbsp;

				</strong>
				<?php echo e($comment->body); ?>

				
			</li>

			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		</ul>
			<hr>
	<br>
	<br>
		<div class="card">
		<div class="card-block">
			
			<form method="POST" action="/posts/<?php echo e($post->id); ?>/comments">

				<?php echo e(csrf_field()); ?>

			}
				<div class="form-group">
  				
  					<textarea class="form-control" placeholder="you Comment here" name="body" required>
  					</textarea>
				
				</div>


				<div class="form-group">
					<button type="submit" class="btn btn-secondary">Add Comment</button>
				</div>
		  
			</form>

			<?php if($errors): ?>
				<?php echo $__env->make('layouts.validate', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<?php endif; ?>

		</div>
	</div>	
	</div>



	<nav class="blog-pagination">
		<a class="btn btm-outline-primary" href="#">Older</a>
		<a class="btn btm-outline-secondary-disabled" href="#">Newer</a>
	</nav>

</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>