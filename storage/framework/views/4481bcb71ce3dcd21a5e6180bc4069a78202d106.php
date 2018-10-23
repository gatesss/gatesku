<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
      <h3>Data Berguna</h3> 
    </div>
  </div>
  </div>
  </div>
  <div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <a class="btn btn-xs btn-success" href="<?php echo e(route('posts.create')); ?>">Create New Post</a>
      </div>
    </div>
  </div>
  <?php if($message = Session::get('success')): ?>
    <div class="alert alert-success">
      <p><?php echo e($message); ?></p>
    </div>
  <?php endif; ?>
<div class="panel-body">
  <table class="table">
    <tr>
      <th>No.</th>
      <th>Title</th>
      <th>Body</th>
      <th>Actions</th>
    </tr>
    </div>

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e(++$i); ?></td>
        <td><?php echo e($post->title); ?></td>
        <td><?php echo e($post->body); ?></td>
        <td>
          <a class="btn btn-xs btn-info" href="<?php echo e(route('posts.show', $post->id)); ?>">Show</a>
          <a class="btn btn-xs btn-primary" href="<?php echo e(route('posts.edit', $post->id)); ?>">Edit</a>

          <?php echo Form::open(['method' => 'DELETE', 'route'=>['posts.destroy', $post->id], 'style'=> 'display:inline']); ?>

          <?php echo Form::submit('Delete',['class'=> 'btn btn-xs btn-danger']); ?>

          <?php echo Form::close(); ?>

        </td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
  <?php echo $posts->links(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>