<?php $__env->startSection('content'); ?>
<!-- foreach aja -->
			<div class="container3">
				<div class="wrapper row">
					<div class="col-md-6">
						gambar
					</div>
					<div class="col-md-6">
						<h2>Nama kost</h2>
						<div>
							<div>
								<span>rating brapa</span>
							</div>
						</div><br>
						<p >deskripsi kos nya(alamatnya)</p>
						<h4 >current price: <span>brapa harga</span></h4>
						<?php if(Auth::guest()): ?>
						<?php else: ?>
						<div>
							<button class="btn btn-default" type="button">add to wishlist</button>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		
<!-- smpesiniforeach -->
<!-- trus buat tampilan wishlist nya kyk gini juga aja tapi button sma like nya ilangin -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>