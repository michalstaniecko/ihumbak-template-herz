<?php
/**
 *
 * Created by PhpStorm.
 * User: Michal Staniecko
 * Date: 25.09.18
 * Time: 22:33
 */

foreach ( $component['image'] as $item ) {
	$image = $item;
}

echo '<div style="background:red">';
echo '<img src="'.wp_get_attachment_image_url($image, 'full').'"/>';
echo '</div>';
