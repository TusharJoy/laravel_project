<?php $__env->startComponent('mail::message'); ?>
# Introduction

Hi there Mr <?php echo e($user->name); ?>


Thanks for registering in our blog. Hope you find it useful.

<?php $__env->startComponent('mail::button', ['url' => '']); ?>

start reading the blog

<?php echo $__env->renderComponent(); ?> 

<?php $__env->startComponent('mail::panel', ['url' => '']); ?>

it is fairly important for ur bpdy and soul to read. it is the satisfaction of you soul.

<?php echo $__env->renderComponent(); ?>



Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
