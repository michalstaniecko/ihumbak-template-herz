<?php

$projects = array(
  array(
    'type' => 'image',
    'src'  => HERZ_IMG . '/projects/1.png',
  ),
  array(
    'type' => 'image',
    'src'  => HERZ_IMG . '/projects/2.png',
  ),
  array(
    'type' => 'image',
    'src'  => HERZ_IMG . '/projects/3.png',
  ),
  array(
    'type' => 'image',
    'src'  => HERZ_IMG . '/projects/4.png',
  ),
);

$args = array(
  'post_type'      => 'project',
  'posts_per_page' => - 1
);

$projects = new WP_Query( $args );
?>

<div class="c-hero-scene">
  <div class="container-fluid container-fluid-stop">

    <!-- Slider main container -->
    <div class="swiper-container js-hero-scene__swiper-container c-hero-scene__swiper-container">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <?php if ( $projects->have_posts() ): while ( $projects->have_posts() ): $projects->the_post(); ?>
          <?php
          $images       = rwmb_meta( 'image', array( 'limit' => 1 ) );
          $image        = reset( $images );
          $images_mobile       = rwmb_meta( 'image-mobile', array( 'limit' => 1 ) );
          $image_mobile        = reset( $images_mobile );
          $project_type = rwmb_meta( 'type' );
          ?>
          <div class="swiper-slide c-hero-scene__slider c-hero-scene__slider--<?= $project_type ?>">
            <a href="#" target="_blank" class="c-hero-scene__project-wrapper" >
              <?php switch ( $project_type ) :


                case 'video': ?>
                  <?php $videos = rwmb_meta( 'video', array( 'limit' => 1 ) ); ?>
                  <?php $video = reset( $videos ); ?>
                  <div class="c-hero-scene__player c-hero-scene__player--video">
                    <video loop muted>
                      <source src="<?= $video['url'] ?>" type="video/mp4">
                    </video>
                  </div>
                  <?php break;

              endswitch; ?>

              <img src="<?= $image['full_url'] ?>" class="c-hero-scene__project"/>
              <img src="<?= $image_mobile['full_url'] ?>" class="c-hero-scene__project c-hero-scene__project--mobile" />
            </a>
          </div>
        <?php endwhile;
          wp_reset_query(); endif; ?>
      </div>

      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="c-hero-scene__lead">
        <div class="container-fluid container-fluid-stop">

          <div class="c-hero-scene__lead-text">
            <h1>
              Realizacje<br/>
              od których serce<br/>
              bije szybciej
            </h1>
          </div>
        </div>
      </div>

      <div class="c-hero-scene__play-icon d-none">
        <span class="h1 text-secondary">play</span>
      </div>
    </div>
  </div>
  <div class="c-scroll-down">
    <img src="<?= HERZ_IMG ?>/icons/down.png" />
  </div>

</div>