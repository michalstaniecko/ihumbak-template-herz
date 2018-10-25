<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>
<body>
<?php do_action('after_body'); ?>
<div class="page">

  <?php get_header(); ?>
  <?php get_template_part('partials/_hero-scene'); ?>
  <div class="page__background">

    <?php get_template_part('partials/_content'); ?>
    <?php get_template_part('partials/_logos'); ?>

  </div>
  <?php get_footer(); ?>
</div>
<?php get_template_part('partials/stones'); ?>
<?php wp_footer(); ?>
</body>
</html>
