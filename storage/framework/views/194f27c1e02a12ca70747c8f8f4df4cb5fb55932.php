<?php $__env->startSection('content'); ?>
<p>Wish List</p>
    <?php foreach($kost as $kos): ?>
        <?php foreach($kos as $k): ?>
            <div class="container ">

                <div class="wrapper row">
                    <div class="col-md-6">
                        <img width="400" height="250" src=<?php echo e(asset('img/'.$k->kostimage)); ?> alt="">
                    </div>
                    <div class="col-md-6">
                        <h2>Name : <?php echo e($k->kostname); ?></h2>
                        <div>
                            <div>
                                <span>Rating : <?php echo e($k->kostrating); ?></span>
                            </div>
                        </div><br>
                        <p >Address : <?php echo e($k->alamat); ?></p>
                        <p >Description : <?php echo e($k->description); ?></p>
                        <h4 >current price : <span><?php echo e($k->price); ?></span></h4>

                    </div>
                </div>

            </div>
        <?php endforeach; ?>
    <?php endforeach; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>