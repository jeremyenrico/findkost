<?php $__env->startSection('content'); ?>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active" style="background-image:url('img/kost1.jpg');">
        <img src="img/kost1.jpg">
        <div class="carousel-caption">
          <img src="img/FindKost.jpg" >
          <h1><span class="color">Find your kost here!</h1>
          <h2><span class="color2">We can help you</h2>
        </div>
      </div>

      <div class="item" style="background-image:url('img/kost2.jpg');">
        <img src="img/kost2.jpg">
        <div class="carousel-caption">
          <img src="img/FindKost.jpg">
          <h1><span class="color">Choose your kost here!</h1>
          <h2><span class="color2">Find Kost near you</h2>
        </div>
      </div>
  
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>