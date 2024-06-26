/**
 * External dependencies.
 */
import { registerFieldType } from '@carbon-fields/core';

/**
 * Internal dependencies.
 */
import './style.scss';
import FreeSelectField from './main';

registerFieldType('free_select', FreeSelectField );
