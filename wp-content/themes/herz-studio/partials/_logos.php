<?php

$logos = array()

?>
<div class="container-fluid container-fluid-stop c-logos">
  <div class="row h-100 align-items-center  ">
    <div class="col-md-2">
      Nagrody i wyróżnienia
    </div>
    <div class="col-md-10">


      <!-- Slider main container -->
      <div class="swiper-container js-logos__swiper-container c-logos__swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <?php for ( $i = 0; $i < 3; $i ++ ): ?>
            <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
          <?php endfor; ?>
        </div>
      </div>


    </div>
  </div>
</div>