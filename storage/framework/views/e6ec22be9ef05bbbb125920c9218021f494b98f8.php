<?php $__env->startSection('content'); ?>
    <div class="col-sm-8 blog-main">
	   <h1><bold>Publish a Post</bold></h1>

        <form method="POST" action="/posts">
	           <?php echo e(csrf_field()); ?>


            
            <div class="form-group">
                <label for="tittle">Your title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" id="body" class="form-control"></textarea>
            </div>

            
            <div class="form-group">
                <button type="submit" class="btn btn-primary">publish</button>
            </div>

            <?php echo $__env->make('layouts.validate', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
        </form>


    </div>
    
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>