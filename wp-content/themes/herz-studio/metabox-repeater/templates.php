<?php
/**
 *
 * Created by PhpStorm.
 * User: Michal Staniecko
 * Date: 25.09.18
 * Time: 22:37
 */

$group = rwmb_meta('group');


foreach ($group as $key=>$row) {

	foreach ($row['component'] as $key => $component) {
		set_query_var('component', $component);
		get_template_part('repeater/templates/template',$key);
	}
}
