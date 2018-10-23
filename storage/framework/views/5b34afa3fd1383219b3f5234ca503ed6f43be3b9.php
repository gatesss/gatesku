<div class="row">
  <div class="col-xs-10">
    <div class="form-group">
      <strong>Title : </strong>
      <?php echo Form::text('title', null, ['placeholder'=>'Title','class'=>'form-control']); ?>

    </div>
  </div>
  <div class="col-xs-10">
    <div class="form-group">
      <strong>Body : </strong>
      <?php echo Form::textarea('body', null, ['placeholder'=>'Body','class'=>'form-control','style'=>'height:150px']); ?>

    </div>
  </div>
  <div class="col-xs-10">
    <a class="btn btn-xs btn-success" href="<?php echo e(route('posts.index')); ?>">Back</a>
    <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
  </div>
</div> 