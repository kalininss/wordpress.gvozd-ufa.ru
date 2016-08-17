<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
	register_setting( 'sample_options', 'sample_theme_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_theme_page( __( 'Настройки темы', 'sampletheme' ), __( 'Настройки темы', 'sampletheme' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

/**
 * Create arrays for our select and radio options
 */
$select_options = array(
	'0' => array(
		'value' =>	'0',
		'label' => __( 'Zero', 'sampletheme' )
	),
	'1' => array(
		'value' =>	'1',
		'label' => __( 'One', 'sampletheme' )
	),
	'2' => array(
		'value' => '2',
		'label' => __( 'Two', 'sampletheme' )
	),
	'3' => array(
		'value' => '3',
		'label' => __( 'Three', 'sampletheme' )
	),
	'4' => array(
		'value' => '4',
		'label' => __( 'Four', 'sampletheme' )
	),
	'5' => array(
		'value' => '3',
		'label' => __( 'Five', 'sampletheme' )
	)
);

$radio_options = array(
	'yes' => array(
		'value' => 'yes',
		'label' => __( 'Yes', 'sampletheme' )
	),
	'no' => array(
		'value' => 'no',
		'label' => __( 'No', 'sampletheme' )
	),
	'maybe' => array(
		'value' => 'maybe',
		'label' => __( 'Maybe', 'sampletheme' )
	)
);

/**
 * Create the options page
 */
function theme_options_do_page() {
	global $select_options, $radio_options;

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Theme Options', 'sampletheme' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
			<div class="updated fade"><p><strong><?php _e( 'Настройки сохранены', 'sampletheme' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'sample_options' ); ?>
			<?php $options = get_option( 'sample_theme_options' ); ?>

			<table class="form-table">

				<tr valign="top"><th scope="row"><?php _e( 'Телефон компании', 'sampletheme' ); ?></th>
					<td>
						<input id="sample_theme_options[phone1]" class="regular-text" type="text" name="sample_theme_options[phone1]" value="<?php esc_attr_e( $options['phone1'] ); ?>" />
						<label class="description" for="sample_theme_options[phone1]"><?php _e( 'Введите номер телефона', 'sampletheme' ); ?></label>
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'Город', 'sampletheme' ); ?></th>
					<td>
						<input id="sample_theme_options[addres1]" class="regular-text" type="text" name="sample_theme_options[addres1]" value="<?php esc_attr_e( $options['addres1'] ); ?>" />
						<label class="description" for="sample_theme_options[addres1]"></label>
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'Улица', 'sampletheme' ); ?></th>
					<td>
						<input id="sample_theme_options[addres2]" class="regular-text" type="text" name="sample_theme_options[addres2]" value="<?php esc_attr_e( $options['addres2'] ); ?>" />
						<label class="description" for="sample_theme_options[addres2]"></label>
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'Описание', 'sampletheme' ); ?></th>
					<td>
						<input id="sample_theme_options[addres3]" class="regular-text" type="text" name="sample_theme_options[addres3]" value="<?php esc_attr_e( $options['addres3'] ); ?>" />
						<label class="description" for="sample_theme_options[addres3]"></label>
					</td>
				</tr>

				<tr valign="top"><th scope="row"><?php _e( 'График работы', 'sampletheme' ); ?></th>
					<td>
						<input id="sample_theme_options[workTime]" class="regular-text" type="text" name="sample_theme_options[workTime]" value="<?php esc_attr_e( $options['workTime'] ); ?>" />
						<label class="description" for="sample_theme_options[workTime]"></label>
					</td>
				</tr>



			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'sampletheme' ); ?>" />
			</p>
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {
	global $select_options, $radio_options;

	// Our checkbox value is either 0 or 1
	if ( ! isset( $input['option1'] ) )
		$input['option1'] = null;
	$input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );

	// Say our text option must be safe text with no HTML tags
	$input['sometext'] = wp_filter_nohtml_kses( $input['sometext'] );

	// Our select option must actually be in our array of select options
	if ( ! array_key_exists( $input['selectinput'], $select_options ) )
		$input['selectinput'] = null;

	// Our radio option must actually be in our array of radio options
	if ( ! isset( $input['radioinput'] ) )
		$input['radioinput'] = null;
	if ( ! array_key_exists( $input['radioinput'], $radio_options ) )
		$input['radioinput'] = null;

	// Say our textarea option must be safe text with the allowed tags for posts
	$input['sometextarea'] = wp_filter_post_kses( $input['sometextarea'] );

	return $input;
}