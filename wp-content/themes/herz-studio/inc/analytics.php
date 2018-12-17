<?php
/**
 *
 * Created by PhpStorm.
 * User: Michal Staniecko
 * Date: 17.12.18
 * Time: 12:19
 */

add_action( 'wp_head', 'google_analytics' );

function google_analytics() {
  if ( ! is_super_admin() ):
    ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131135493-1"></script>
    <script>
			window.dataLayer = window.dataLayer || [];

			function gtag() {
				dataLayer.push(arguments);
			}

			gtag('js', new Date());

			gtag('config', 'UA-131135493-1');
    </script>
  <?php

  endif;
}