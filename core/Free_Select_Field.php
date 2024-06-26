<?php

namespace Carbon_Field_Free_Select;

use Carbon_Fields\Field\Select_Field;

class Free_Select_Field extends Select_Field {

	public static function admin_enqueue_scripts()
	{
		$root_uri = \Carbon_Fields\Carbon_Fields::directory_to_url(\Carbon_Field_Free_Select\DIR);

		// Enqueue field styles.
		wp_enqueue_style(
			'carbon-field-free-select',
			$root_uri . '/build/bundle' . ((defined('SCRIPT_DEBUG') && SCRIPT_DEBUG) ? '' : '.min') . '.css'
		);

		// Enqueue field scripts.
		wp_enqueue_script(
			'carbon-field-free-select',
			$root_uri . '/build/bundle' . ((defined('SCRIPT_DEBUG') && SCRIPT_DEBUG) ? '' : '.min') . '.js',
			array('carbon-fields-core')
		);
	}

	public function get_formatted_value()
	{
		$value = $this->get_value();

		return $value;
	}
}
