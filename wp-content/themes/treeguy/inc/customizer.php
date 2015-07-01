<?php
/**
 * TreeGuy Theme Customizer
 *
 * @package TreeGuy
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function treeguy_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->add_setting( 'example_section_one', array(
		'title'			=> 'Example Settings',
		'description'	=> 'This is a settings section.',
		'priority'		=> 30,
	) );


// Add Logo Upload Section
$wp_customize->add_section( 'logo-upload' , array(
    'title' => __( 'Logo Upload', 'treeguy' ),
    'priority' => 30,
    'description' => __( 'Add a logo to the header section of your.', 'treeguy' )
) );

// Add Setting
$wp_customize->add_setting( 'img-upload' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'img-upload', array(
    'label' => __( 'Logo Manager', 'treeguy' ),
    'section' => 'logo-upload',
    'settings' => 'img-upload',
) ) );
}
add_action( 'customize_register', 'treeguy_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function treeguy_customize_preview_js() {
	wp_enqueue_script( 'treeguy_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'treeguy_customize_preview_js' );
