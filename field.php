<?php

use Carbon_Fields\Carbon_Fields;
use Carbon_Field_Free_Select\Free_Select_Field;

define('Carbon_Field_Free_Select\\DIR', __DIR__ );

if (!function_exists('add_action')) {
	return;
}

add_action('after_setup_theme', function () {
	Carbon_Fields::extend( Free_Select_Field::class, function( $container ) {
		return new Free_Select_Field(
			$container['arguments']['type'],
			$container['arguments']['name'],
			$container['arguments']['label']
		);
	} );
}, 99);
