<?php

function js_add_submenu() {
		add_submenu_page( 'themes.php', 'My Super Awesome Options Page', 'Theme Options', 'manage_options', 'theme_options', 'my_theme_options_page');
	}
add_action( 'admin_menu', 'js_add_submenu' );
	

function js_settings_init() { 
	register_setting( 'theme_options', 'js_options_settings' );

	add_settings_section(
		'js_options_page_section', 
		'Customize your page here', 
		'js_options_page_section_callback', 
		'theme_options'
	);

	function js_options_page_section_callback() { 
		echo 'In the section below, choose the settings you would like to display on your web page.';
	}

	add_settings_field( 
		'js_radio_field2', 
		'Choose a font colour for title', 
		'js_radio_field_render2', 
		'theme_options', 
		'js_options_page_section'  
	);

	add_settings_field( 
		'js_select_field', 
		'Choose font size for title', 
		'js_select_field_render', 
		'theme_options', 
		'js_options_page_section'  
	);

	add_settings_field( 
		'js_radio_field', 
		'Choose a font colour for page content', 
		'js_radio_field_render', 
		'theme_options', 
		'js_options_page_section'  
	);

	add_settings_field( 
		'js_select_field2', 
		'Choose font size for page content', 
		'js_select_field_render2', 
		'theme_options', 
		'js_options_page_section'  
	);

		add_settings_field( 
		'js_radio_field3', 
		'Choose a background colour for content area', 
		'js_radio_field_render3', 
		'theme_options', 
		'js_options_page_section'  
	);

//Option 1: Change Font Color For Title

	function js_radio_field_render2() { 
		$options = get_option( 'js_options_settings' );
		?>
		<input type="radio" name="js_options_settings[js_radio_field2]" <?php if (isset($options['js_radio_field2'])) checked( $options['js_radio_field2'], 1 ); ?> value="#000000" /> <label>Black (Default)</label><br />
		<input type="radio" name="js_options_settings[js_radio_field2]" <?php if (isset($options['js_radio_field2'])) checked( $options['js_radio_field2'], 2 ); ?> value="#800080" /> <label>Purple</label><br />
		<input type="radio" name="js_options_settings[js_radio_field2]" <?php if (isset($options['js_radio_field2'])) checked( $options['js_radio_field2'], 3 ); ?> value="#0000ff" /> <label>Blue</label><br />
		<input type="radio" name="js_options_settings[js_radio_field2]" <?php if (isset($options['js_radio_field2'])) checked( $options['js_radio_field2'], 4 ); ?> value="#ffa500" /> <label>Orange</label>
		<?php
	}

//Option 2: Change Font Size For Title

	function js_select_field_render() { 
		$options = get_option( 'js_options_settings' );
		?>
		<select name="js_options_settings[js_select_field]">
			<option value="0.5em" <?php if (isset($options['js_select_field'])) selected( $options['js_select_field'], 1 ); ?>>Extra Small</option>
			<option value="1em" <?php if (isset($options['js_select_field'])) selected( $options['js_select_field'], 2 ); ?>>Small (Default)</option>
			<option value="1.5em" <?php if (isset($options['js_select_field'])) selected( $options['js_select_field'], 3 ); ?>>Medium</option>
			<option value="2.0em" <?php if (isset($options['js_select_field'])) selected( $options['js_select_field'], 4 ); ?>>Large</option>
			<option value="2.5em" <?php if (isset($options['js_select_field'])) selected( $options['js_select_field'], 5 ); ?>>Extra Large</option>
		</select>
	<?php
	}

//Option 3: Change Font Color For Page Content

	function js_radio_field_render() { 
		$options = get_option( 'js_options_settings' );
		?>
		<input type="radio" name="js_options_settings[js_radio_field]" <?php if (isset($options['js_radio_field'])) checked( $options['js_radio_field'], 1 ); ?> value="#000000" /> <label>Black (Default)</label><br />
		<input type="radio" name="js_options_settings[js_radio_field]" <?php if (isset($options['js_radio_field'])) checked( $options['js_radio_field'], 2 ); ?> value="#800080" /> <label>Purple</label><br />
		<input type="radio" name="js_options_settings[js_radio_field]" <?php if (isset($options['js_radio_field'])) checked( $options['js_radio_field'], 3 ); ?> value="#0000ff" /> <label>Blue</label><br />
		<input type="radio" name="js_options_settings[js_radio_field]" <?php if (isset($options['js_radio_field'])) checked( $options['js_radio_field'], 4 ); ?> value="#ffa500" /> <label>Orange</label>
		<?php
	}

//Option 4: Add Custom Font For Page Content

	function js_select_field_render2() { 
		$options = get_option( 'js_options_settings' );
		?>
		<select name="js_options_settings[js_select_field2]">
			<option value="0.5em" <?php if (isset($options['js_select_field2'])) selected( $options['js_select_field2'], 1 ); ?>>Extra Small</option>
			<option value="1em" <?php if (isset($options['js_select_field2'])) selected( $options['js_select_field2'], 2 ); ?>>Small (Default)</option>
			<option value="1.5em" <?php if (isset($options['js_select_field2'])) selected( $options['js_select_field2'], 3 ); ?>>Medium</option>
			<option value="2.0em" <?php if (isset($options['js_select_field2'])) selected( $options['js_select_field2'], 4 ); ?>>Large</option>
			<option value="2.5em" <?php if (isset($options['js_select_field2'])) selected( $options['js_select_field2'], 5 ); ?>>Extra Large</option>
		</select>
	<?php
	}

//Option 5: Change Background Colour For Page Content

	function js_radio_field_render3() { 
		$options = get_option( 'js_options_settings' );
		?>
		<input type="radio" name="js_options_settings[js_radio_field3]" <?php if (isset($options['js_radio_field3'])) checked( $options['js_radio_field3'], 1 ); ?> value="#FFFFFF" /> <label>White (Default)</label><br />
		<input type="radio" name="js_options_settings[js_radio_field3]" <?php if (isset($options['js_radio_field3'])) checked( $options['js_radio_field3'], 2 ); ?> value="#800080" /> <label>Purple</label><br />
		<input type="radio" name="js_options_settings[js_radio_field3]" <?php if (isset($options['js_radio_field3'])) checked( $options['js_radio_field3'], 3 ); ?> value="#0000ff" /> <label>Blue</label><br />
		<input type="radio" name="js_options_settings[js_radio_field3]" <?php if (isset($options['js_radio_field3'])) checked( $options['js_radio_field3'], 4 ); ?> value="#ffa500" /> <label>Orange</label>
		<?php
	}


	function my_theme_options_page(){ 
		?>
		<form action="options.php" method="post">
			<h2>Options</h2>
			<?php
			settings_fields( 'theme_options' );
			do_settings_sections( 'theme_options' );
			submit_button();
			?>
		</form>
		<?php
	}

}

add_action( 'admin_init', 'js_settings_init' );

