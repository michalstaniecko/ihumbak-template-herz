<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php do_action('after_body'); ?>

  <?php get_header(); ?>
  <div class="page-wrapper" id="page-wrapper" >

    <?php get_template_part('partials/_hero-scene'); ?>
    <div class="page__background" >

      <?php get_template_part('partials/_content'); ?>
      <?php get_template_part('partials/_logos'); ?>

      <?php get_template_part('partials/_stones'); ?>

    </div>
    <?php get_footer(); ?>
  </div>

  <?php wp_footer(); ?>

</body>
</html>
