<?php

$projects = array(
  array(
    'type' => 'image',
    'src' => HERZ_IMG.'/projects/1.png',
  ),
  array(
    'type' => 'image',
    'src' => HERZ_IMG.'/projects/2.png',
  ),
  array(
    'type' => 'image',
    'src' => HERZ_IMG.'/projects/3.png',
  ),
  array(
    'type' => 'image',
    'src' => HERZ_IMG.'/projects/4.png',
  ),
)
?>

<div class="c-hero-scene">
  <div class="container-fluid container-fluid-stop">

    <!-- Slider main container -->
    <div class="swiper-container js-hero-scene__swiper-container c-hero-scene__swiper-container">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <?php foreach ($projects as $project) : ?>
        <div class="swiper-slide c-hero-scene__slider">
          <div class="c-hero-scene__project-wrapper">

            <img src="<?= $project['src'] ?>" class="c-hero-scene__project" />
          </div>
        </div>
        <?php endforeach; ?>
      </div>

      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>
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
</div>