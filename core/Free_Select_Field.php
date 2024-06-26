<?php

namespace Carbon_Field_YOURFIELDNAME;

use Carbon_Fields\Field\Select_Field;

class Free_Select_Field extends Select_Field {
	public function get_formatted_value()
	{
		$value = $this->get_value();

		return $value;
	}
}
