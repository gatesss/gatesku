<?php $__env->startSection('content'); ?>
  <div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <h3>Show Post </h3> <a class="btn btn-xs btn-primary" href="<?php echo e(route('posts.index')); ?>">Back</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Title : </strong>
        <?php echo e($post->title); ?>

      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Body : </strong>
        <?php echo e($post->body); ?>

      </div>
    </div>
  </div>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>