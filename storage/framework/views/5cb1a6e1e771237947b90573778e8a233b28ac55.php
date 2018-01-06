<?php $__env->startSection('content'); ?>
<!-- foreach aja -->


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
						<div>
							<form action="<?php echo e(url('/update/'.$k['kostID'])); ?>" method="get">
                                 <button class="btn btn-primary">
                                       Update
                                 </button>
                            </form>

							<form action="<?php echo e(url('/delete/'.$k['kostID'])); ?>" method="post">
								<?php echo e(csrf_field()); ?>

								<?php echo e(method_field('delete')); ?>

								<button class="btn btn-danger">
									Delete
								</button>
							</form>
						</div>
					</div>
				</div>

			</div>
	<?php endforeach; ?>

<!-- smpesiniforeach -->
<!-- trus buat tampilan wishlist nya kyk gini juga aja tapi button sma like nya ilangin -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>