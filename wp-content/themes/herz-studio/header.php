<?php if ( WP_DEBUG ): ?>
  <div class="debuger"></div>
<?php endif; ?>
<header class=" c-topbar c-topbar--top" id="topbar">
  <div class="container-fluid container-fluid-stop">
    <div class="c-topbar__wrapper">

      <div class="row c-topbar__row">
        <div class="col-auto c-topbar__logo">
          <img src="<?= HERZ_IMG ?>/herz-logo-top.png"
               srcset="<?= HERZ_IMG ?>/herz-logo-top.png 1x, <?= HERZ_IMG ?>/herz-logo-top@x2.png 2x"/>
        </div>
        <div class="col-auto ml-auto c-topbar__socials">
          <?php get_template_part( 'partials/elements/_socials' ); ?>
        </div>
        <?php if ( is_active_sidebar( 'herz_language' ) ): ?>
          <div class="c-topbar__lang-switch">
            <?php dynamic_sidebar('herz_language'); ?>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </div>
</header>