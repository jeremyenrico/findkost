<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Insert</div>
                <div class="panel-body">
                    <form enctype="multipart/form-data" class="form-horizontal" role="form" method="get" action="<?php echo e(url('/insertkost')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('kostname') ? ' has-error' : ''); ?>">
                            <label for="kostname" class="col-md-4 control-label">Kost Name</label>

                            <div class="col-md-6">
                                <input id="kostname" type="text" class="form-control" name="kostname" value="<?php echo e(old('name')); ?>">

                                <?php if($errors->has('kostname')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('kostname')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="email" class="form-control" name="address" value="<?php echo e(old('email')); ?>">

                                <?php if($errors->has('address')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('address')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('rating') ? ' has-error' : ''); ?>">
                            <label for="rating" class="col-md-4 control-label">Kost Rating</label>

                            <div class="col-md-6">
                                <input id="rating" type="text" class="form-control" name="rating">

                                <?php if($errors->has('rating')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('rating')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('kostimage') ? ' has-error' : ''); ?>">
                            <label for="kostimage" class="col-md-4 control-label">Image</label>

                            <div class="col-md-6">
                                <input id="kostimage" type="file" class="form-control" name="kostimage">

                                <?php if($errors->has('kostimage')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('kostimage')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>