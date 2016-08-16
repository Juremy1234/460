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
		echo 'In the section below, choose the settings you would like to see display on your website pages.';
	}

	add_settings_field( 
		'js_text_field', 
		'Enter your text', 
		'js_text_field_render', 
		'theme_options', 
		'js_options_page_section' 
	);

	add_settings_field( 
		'js_checkbox_field', 
		'Check your preference', 
		'js_checkbox_field_render', 
		'theme_options', 
		'js_options_page_section'  
	);

	add_settings_field( 
		'js_radio_field', 
		'Choose font size', 
		'js_radio_field_render', 
		'theme_options', 
		'js_options_page_section'  
	);
	
	add_settings_field( 
		'js_textarea_field', 
		'Enter content in the textarea', 
		'js_textarea_field_render', 
		'theme_options', 
		'js_options_page_section'  
	);
	
	add_settings_field( 
		'js_select_field', 
		'Choose font colour', 
		'js_select_field_render', 
		'theme_options', 
		'js_options_page_section'  
	);

	function js_text_field_render() { 
		$options = get_option( 'js_options_settings' );
		?>
		<input type="text" name="js_options_settings[js_text_field]" value="<?php if (isset($options['js_text_field'])) echo $options['js_text_field']; ?>" />
		<?php
	}
	
	function js_checkbox_field_render() { 
		$options = get_option( 'js_options_settings' );
	?>
		<input type="checkbox" name="js_options_settings[js_checkbox_field]" <?php if (isset($options['js_checkbox_field'])) checked( 'on', ($options['js_checkbox_field']) ) ; ?> value="on" />
		<label>Turn it On</label> 
		<?php	
	}
	
	function js_radio_field_render() { 
		$options = get_option( 'js_options_settings' );
		?>
		<input type="radio" name="js_options_settings[js_radio_field]" <?php if (isset($options['js_radio_field'])) checked( $options['js_radio_field'], 1 ); ?> value="1" /> <label>1em</label><br />
		<input type="radio" name="js_options_settings[js_radio_field]" <?php if (isset($options['js_radio_field'])) checked( $options['js_radio_field'], 2 ); ?> value="2" /> <label>2em</label><br />
		<input type="radio" name="js_options_settings[js_radio_field]" <?php if (isset($options['js_radio_field'])) checked( $options['js_radio_field'], 3 ); ?> value="3" /> <label>3em</label>
		<?php
	}
	
	function js_textarea_field_render() { 
		$options = get_option( 'js_options_settings' );
		?>
		<textarea cols="40" rows="5" name="js_options_settings[js_textarea_field]"><?php if (isset($options['js_textarea_field'])) echo $options['js_textarea_field']; ?></textarea>
		<?php
	}

//Option 1: Change Font Colour

	function js_select_field_render() { 
		$options = get_option( 'js_options_settings' );
		?>
		<select name="js_options_settings[js_select_field]">
			<option value="1" <?php if (isset($options['js_select_field'])) selected( $options['js_select_field'], 1 ); ?>>Black</option>
			<option value="2" <?php if (isset($options['js_select_field'])) selected( $options['js_select_field'], 2 ); ?>>Blue</option>
			<option value="3" <?php if (isset($options['js_select_field'])) selected( $options['js_select_field'], 3 ); ?>>Orange</option>
			<option value="4" <?php if (isset($options['js_select_field'])) selected( $options['js_select_field'], 4 ); ?>>Red</option>
			<option value="5" <?php if (isset($options['js_select_field'])) selected( $options['js_select_field'], 5 ); ?>>Purple</option>
		</select>
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

//Option 1: Change Profile Image

//Option 2: Change Menu Style Form Inline to Hamburger

//Option 3: Add Profile Picture

//Option 4: Change the social media links to their own

//Change colour

