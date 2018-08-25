<?php
/**
 * Customizer controls underscore.js template.
 *
 * @package     Kirki
 * @subpackage  Controls
 * @copyright   Copyright (c) 2017, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/https://opensource.org/licenses/MIT
 * @since       3.0.34
 */

?>
<#
data = _.defaults( data, {
	label: '',
	description: '',
} );
#>

<label>
    <# if ( data.label ) { #>
        <span class="customize-control-title">{{{ data.label }}}</span>
    <# } #>
    <# if ( data.description ) { #>
        <span class="description customize-control-description">{{{ data.description }}}</span>
    <# } #>
</label>
