<?php $__env->startSection('content'); ?>
    <!-- foreach aja -->

    <h2><span class="color3">All Kost</span></h2>
    <?php foreach($kost as $k): ?>

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

                    <?php if(Auth::guest()): ?>
                    <?php elseif(Auth::user()->name == "admin"): ?>
                    <?php else: ?>
                        <div>
                            <form action="<?php echo e(url('/addwish/'.$k->kostID)); ?>" method="post">
                                <?php echo e(csrf_field()); ?>


                                <input type="submit" class="btn btn-default" value="add to wishlist">
                            </form>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

        </div>
        <br>
    <?php endforeach; ?>

    <?php echo e($kost->links()); ?>



    <!-- smpesiniforeach -->
    <!-- trus buat tampilan wishlist nya kyk gini juga aja tapi button sma like nya ilangin -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>