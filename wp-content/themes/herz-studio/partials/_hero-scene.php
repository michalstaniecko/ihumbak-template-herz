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
          $images        = rwmb_meta( 'image', array( 'limit' => 1 ) );
          $image         = reset( $images );
          $images_mobile = rwmb_meta( 'image-mobile', array( 'limit' => 1 ) );
          $image_mobile  = reset( $images_mobile );
          $project_type  = rwmb_meta( 'type' );
          $url           = ! empty( rwmb_meta( 'url' ) ) ? rwmb_meta( 'url' ) : null;
          if ( ! empty( $url ) ) {

            if (strpos( $url, 'behance' ) !== false) {
              $service_url ='Behance';
            }

            if (strpos( $url, 'vimeo' ) !== false) {
              $service_url ='Vimeo';
            }

          }
          $slide_tag     = ! empty( $url ) ? 'a href="' . $url . '" target="_blank" title="Otwórz w '.$service_url.'" ' : 'div';
          $slide_tag_end = ! empty( $url ) ? '/a' : '/div';
          ?>
          <div class="swiper-slide c-hero-scene__slider c-hero-scene__slider--<?= $project_type ?>">
            <<?= $slide_tag ?> class="c-hero-scene__project-wrapper" >
            <?php switch ( $project_type ) :


              case 'video': ?>
                <?php $videos = rwmb_meta( 'video' ); ?>
                <div class="c-hero-scene__player c-hero-scene__player--video">

                  <video loop muted class="c-hero-scene__video--desktop">
                    <source src="<?= wp_get_attachment_url($videos['video-d-webm'][0]) ?>" type="video/webm">
                    <source src="<?= wp_get_attachment_url($videos['video-d-mp4'][0]) ?>" type="video/mp4">
                    <source src="<?= wp_get_attachment_url($videos['video-d-ogv'][0]) ?>" type="video/ogv">
                  </video>
                  <video loop muted class="c-hero-scene__video--mobile">
                    <source src="<?= wp_get_attachment_url($videos['video-d-webm'][0]) ?>" type="video/webm">
                    <source src="<?= wp_get_attachment_url($videos['video-d-mp4'][0]) ?>" type="video/mp4">
                    <source src="<?= wp_get_attachment_url($videos['video-d-ogv'][0]) ?>" type="video/ogv">
                  </video>
                </div>
                <?php break;

            endswitch; ?>

            <img src="<?= $image['full_url'] ?>" class="c-hero-scene__project"/>
            <img src="<?= $image_mobile['full_url'] ?>" class="c-hero-scene__project c-hero-scene__project--mobile"/>
            <<?= $slide_tag_end ?>>
          </div>
        <?php endwhile;
          wp_reset_query(); endif; ?>
      </div>
<? /*
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
 */ ?>
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
        <img src="<?= HERZ_IMG ?>/play-button.png" srcset="<?= HERZ_IMG ?>/play-button.png 1x, <?= HERZ_IMG ?>/play-button@x2.png 2x" />
      </div>
    </div>
  </div>
  <div class="c-scroll-down">
    <img src="<?= HERZ_IMG ?>/icons/down.png"/>
  </div>

</div>