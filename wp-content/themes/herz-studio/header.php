<?php if ( WP_DEBUG ): ?>
  <div class="debuger"></div>
<?php endif; ?>
<header class=" c-topbar c-topbar--top">
  <div class="container-fluid container-fluid-stop">
    <div class="c-topbar__wrapper">

      <div class="row c-topbar__row">
        <div class="col-auto c-topbar__logo">
          <img src="<?= HERZ_IMG ?>/herz-logo-top.png"/>
        </div>
        <div class="col-auto ml-auto c-topbar__socials">
          <?php get_template_part( 'partials/elements/_socials' ); ?>
        </div>
      </div>
    </div>
  </div>
</header>