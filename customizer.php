<?php
//Hook1: customize-register to define new Cutomizer panels, settings, controls
function mytheme_customize_register( $wp_customize ){
	//All our sections, settings, and controls will be added here

	// --- Content Controller --- //
	// Footer Title, sets the echo value
	$wp_customize->add_section('footer_section', array(
		// Gives the variable a name
		'title' => __('Footer Content', 'electricianTheme'),
		// Where the option to edit appears
		'priority' => 30,
	));
	// Copyright holder
	$wp_customize->add_setting('footer_copyrightContainer', array(
		'default' => '© 2010 Nurses for Smokefree Aotearoa. All rights reserved.',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'footer_copyrightContainerControl', array(
		'label' => __('Footer copyright container', 'electricianTheme'),
		'description' => 'Controls footer copyright container',
		'section' => 'footer_section',
		'settings' => 'footer_copyrightContainer',
	)));

	// Header content
	$wp_customize->add_section('header_section', array(
		'title' => __('Header Content', 'electricianTheme'),
		'priority' => 29,
	));
	// Site brief
	$wp_customize->add_setting('header_businessBriefContainer', array(
		'default' => 'Enter brief about the business in the header content section in customize tools.',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'header_businessBriefContainerControl', array(
		'label' => __('Header site brief container', 'electricianTheme'),
		'description' => 'Controls the brief about the website on the homepage in the title section',
		'section' => 'header_section',
		'settings' => 'header_businessBriefContainer',
	)));



	// Featured homepage image
	$wp_customize->add_setting('banner_imageSetting', array(
		'default' => '',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_imageControl', array(
		'label' => __('Front page banner image', 'electricianTheme'),
		'section' => 'banner_image',
		'settings' => 'banner_imageSetting',
	)));
	// --- Content controller end --- //

	// --- Colour Control --- //
	// Site header color
	$wp_customize->add_setting('general_headerColor', array(
		'default' => '#000000',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'general_headerColorControl', array(
		'label' => __('Site header colour', 'electricianTheme'),
		'description' => 'Changes the colour of page header colour',
		'section' => 'colors',
		'settings' => 'general_headerColor',
	)));
	// Site background color
	$wp_customize->add_setting('general_background', array(
		'default' => '#fffef0',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'general_backgroundControl', array(
		'label' => __('Site background colour', 'electricianTheme'),
		'description' => 'Changes the colour of page background',
		'section' => 'colors',
		'settings' => 'general_background',
	)));
	// Primary color
	$wp_customize->add_setting('general_primaryColor', array(
		'default' => '#235789',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'general_primaryColorControl', array(
		'label' => __('Site primary colour', 'electricianTheme'),
		'description' => 'Changes the colour of page primary colour',
		'section' => 'colors',
		'settings' => 'general_primaryColor',
	)));
	// Accent colour
	$wp_customize->add_setting('general_accentColor', array(
		'default' => '#c1292e',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'general_accentColorControl', array(
		'label' => __('Site accent colour', 'electricianTheme'),
		'description' => 'Changes the colour of page accent colour',
		'section' => 'colors',
		'settings' => 'general_accentColor',
	)));
	// link colour
	$wp_customize->add_setting('nav_activeColor', array(
		'default' => '#eccb46',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nav_activeColorControl', array(
		'label' => __('Active Nav Colour', 'electricianTheme'),
		'description' => 'Changes the colour of links on the page',
		'section' => 'colors',
		'settings' => 'nav_activeColor',
	)));
	// --- Colour control ends --- //
}
add_action('customize_register', 'mytheme_customize_register');

//Hook2: wp_head to output custom-generated CSS
function mytheme_customize_css(){
?>
<style type="text/css">
	/* --- Universal controls --- */
	a{
		color: <?php echo get_theme_mod('general_accentColor', '#c1292e') ?>;
	}
	body{
		background-color: <?php echo get_theme_mod('general_background', '#fffef0') ?>;
	}
	th{
		background-color: <?php echo get_theme_mod('general_primaryColor')?>;
	}
	.primary-color{
		color: <?php echo get_theme_mod('general_primaryColor', '#235789') ?>;
		border-color: <?php echo get_theme_mod('general_primaryColor', '#235789') ?>;
	}
	.primary-color-background{
		background-color: <?php echo get_theme_mod('general_primaryColor', '#235789') ?>;
	}
	.widget{
		border-color: <?php echo get_theme_mod('general_primaryColor', '#235789') ?>;
	}
	.accent-color{
		color: <?php echo get_theme_mod('general_accentColor', '#c1292e') ?>;
		border-color: <?php echo get_theme_mod('general_accentColor', '#c1292e') ?>;
	}
	.accent-color-background{
		background-color: <?php echo get_theme_mod('general_accentColor', '#c1292e') ?>;
	}
	.header-background{
		background-color: <?php echo get_theme_mod('general_headerColor', '#000000') ?>;
	}
	.btn-success{
		border-color: <?php echo get_theme_mod('general_accentColor', '#c1292e') ?> !important;
		color: <?php echo get_theme_mod('general_accentColor', '#c1292e') ?> !important;
	}
	.btn-success:hover{
		background-color: <?php echo get_theme_mod('general_accentColor', '#c1292e') ?> !important;
		border-color: <?php echo get_theme_mod('general_accentColor', '#c1292e') ?> !important;
		color: #ffffff !important;
	}
	.btn-success:focus{
		background-color: <?php echo get_theme_mod('general_accentColor', '#c1292e') ?> !important;
		border-color: <?php echo get_theme_mod('general_accentColor', '#c1292e') ?> !important;
	}
	.btn-success:active{
		background-color: <?php echo get_theme_mod('general_accentColor', '#c1292e') ?> !important;
		border-color: <?php echo get_theme_mod('general_accentColor', '#c1292e') ?> !important;
	}
	.button{
		border-color: <?php echo get_theme_mod('general_accentColor', '#c1292e') ?> !important;
		color: <?php echo get_theme_mod('general_accentColor', '#c1292e') ?> !important;
	}
	.button:hover{
		background-color: <?php echo get_theme_mod('general_accentColor', '#c1292e') ?> !important;
		border-color: <?php echo get_theme_mod('general_accentColor', '#c1292e') ?> !important;
		color: #ffffff !important;
	}
	.button:focus{
		background-color: <?php echo get_theme_mod('general_accentColor', '#c1292e') ?> !important;
		border-color: <?php echo get_theme_mod('general_accentColor', '#c1292e') ?> !important;
	}
	.button:active{
		background-color: <?php echo get_theme_mod('general_accentColor', '#c1292e') ?> !important;
		border-color: <?php echo get_theme_mod('general_accentColor', '#c1292e') ?> !important;
	}		
	/* --- Banner control --- */
	.page-heading{
		color: <?php echo get_theme_mod('general_headerColor', '#000000')?>;
	}
	
	/* --- Top bar controls --- */
	.top-bar{
		background-color: <?php echo get_theme_mod('general_primaryColor', '#235789') ?>;
	}
	.dropdown-menu{
		background-color: <?php echo get_theme_mod('general_primaryColor', '#235789') ?>;		
	}
	.top-bar a{
		color: <?php echo get_theme_mod('topNav_linkColor', '#ffffff') ?> !important;
	}
	.top-bar a:hover{
		color: <?php echo get_theme_mod('nav_activeColor', '#eccb46') ?> !important;
	}
	.current-menu-item a{
		color: <?php echo get_theme_mod('nav_activeColor', '#eccb46') ?> !important;
		border-bottom-color: <?php echo get_theme_mod('nav_activeColor', '#eccb46') ?>;
	}
</style>
<?php
}
add_action('wp_head', 'mytheme_customize_css');
