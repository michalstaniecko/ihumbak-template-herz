<?php
$address = "<a href=\"mailto:kontakt@herzstudio.pl\">kontakt@herzstudio.pl</a>
tel. +48 793 379 933, +48 607 852 403
ul. Estetyczna 4, 43-100 Tychy, Poland";
$footer = rwmb_meta('footer');
$lead = !empty($footer['lead']) ? $footer['lead'] : __('Jeżeli szukasz kreacji, które poruszą serca Twoich klientów, skontaktuj się z nami!', 'herz-studio');
$contact = !empty($footer['contact']) ? $footer['contact'] : $address;
?>
<footer class="container-fluid container-fluid-stop  text-white c-footer" id="contact">
  <div class="row">
    <div class="text-center col mx-auto">
      <img src="<?= HERZ_IMG ?>/logo_footer.png" srcset="<?= HERZ_IMG ?>/logo_footer.png 1x, <?= HERZ_IMG ?>/logo_footer@x2.png 2x" />
      <div class="c-footer__lead">
        <p>
          <?= $lead ?>
        </p>
      </div>
      <p class="c-footer__contact">
        <?= nl2br($contact) ?>
      </p>
    </div>
  </div>
</footer>
