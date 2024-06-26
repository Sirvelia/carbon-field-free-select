/**
 * External dependencies.
 */
import { Component } from '@wordpress/element';
import { get } from 'lodash';

/**
 * The internal dependencies.
 */
import './style.scss';

class FreeSelectField extends Component {
	/**
	 * Handles the change of the input.
	 *
	 * @param {Object} e
	 * @return {void}
	 */
	handleChange = (e) => {
		const { id, onChange } = this.props;

		onChange(id, e.target.value);
	}

	componentMount() {
		onChange(id, value);
	}

	/**
	 * Renders the component.
	 *
	 * @return {Object}
	 */
	render() {
		const {
			id,
			name,
			field,
			onChange
		} = this.props;

		const value = this.props.value || get(field.options, '[0].value', '');

		return (
			field.options.length > 0
				? (
					<select
						id={id}
						name={name}
						value={value}
						className="cf-select__input"
						onChange={this.handleChange}
					>
						{field.options.map((option) => (
							<option key={option.value} value={option.value}>
								{option.label}
							</option>
						))}
					</select>
				)
				: <em>
					{__('No options.', 'carbon-fields-ui')}
				</em>
		);
	}
}

export default FreeSelectField;
