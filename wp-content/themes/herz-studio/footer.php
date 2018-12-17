<?php
$footer = rwmb_meta('footer');
?>
<footer class="container-fluid container-fluid-stop  text-white c-footer" id="contact">
  <div class="row">
    <div class="text-center col mx-auto">
      <img src="<?= HERZ_IMG ?>/logo_footer.png" srcset="<?= HERZ_IMG ?>/logo_footer.png 1x, <?= HERZ_IMG ?>/logo_footer@x2.png 2x" />
      <div class="c-footer__lead">
        <p>
          <?= $footer['lead'] ?>
        </p>
      </div>
      <p class="c-footer__contact">
        <?= nl2br($footer['contact']) ?>
      </p>
    </div>
  </div>
</footer>
