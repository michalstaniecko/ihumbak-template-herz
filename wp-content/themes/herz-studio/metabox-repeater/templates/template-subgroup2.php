<?php
/**
 *
 * Created by PhpStorm.
 * User: Michal Staniecko
 * Date: 25.09.18
 * Time: 22:33
 */

extract( $wp_query->query_vars );
echo '<div>';
print_r($component);
echo '</div>';