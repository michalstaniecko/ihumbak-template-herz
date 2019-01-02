<?php

$logos = rwmb_meta( 'logos' );


?>
<div class="container-fluid container-fluid-stop c-logos">
  <div class="row h-100 align-items-center  ">
    <div class="col-lg-2 col-md-3 text-center text-md-left">
      <?php _e('Nagrody i wyróżnienia', 'herz-studio'); ?>
    </div>
    <div class="col-lg-10 col-md-9">


      <!-- Slider main container -->
      <div class="swiper-container js-logos__swiper-container c-logos__swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <?php foreach ( $logos as $logo ): ?>
            <div class="swiper-slide">
              <div class="c-logos__logo">

                <img src="<?= $logo['full_url'] ?>"/>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>


    </div>
  </div>
</div>