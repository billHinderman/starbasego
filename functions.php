<?php
add_action( 'after_setup_theme', 'starbasego_setup' );
function starbasego_setup()
{
	load_theme_textdomain( 'starbasego', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 640;
	register_nav_menus(
		array( 'main-menu' => __( 'Main Menu', 'starbasego' ) )
		);
}

add_action( 'wp_enqueue_scripts', 'starbasego_load_scripts' );
function starbasego_load_scripts()
{
	wp_enqueue_script(
		'script',
		get_stylesheet_directory_uri() . '/assets/script/script.js',
		array( 'jquery' )
	);
}

add_action( 'comment_form_before', 'starbasego_enqueue_comment_reply_script' );
function starbasego_enqueue_comment_reply_script()
{
	if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}

add_filter( 'the_title', 'starbasego_title' );
function starbasego_title( $title ) {
	return $title != '' ? $title : ' ';
}

add_filter( 'wp_title', 'starbasego_filter_wp_title' );
function starbasego_filter_wp_title( $title )
{
	return $title . esc_attr( get_bloginfo( 'name' ) );
}

add_action( 'widgets_init', 'starbasego_widgets_init' );
function starbasego_widgets_init()
{
	register_sidebar( array (
		'name' => __( 'Sidebar Widget Area', 'starbasego' ),
		'id' => 'sidebar-widget-area',
		'before_widget' => '<div id="widget-%1$s" class="widget-container">',
		'after_widget' => "</div>",
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
		) );
}

add_filter( 'get_comments_number', 'starbasego_comments_number' );
function starbasego_comments_number( $count )
{
	if ( !is_admin() ) {
		global $id;
		$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
		return count( $comments_by_type['comment'] );
	} else {
		return $count;
	}
}

function starbasego_theme_customizer( $wp_customize ) {
  $wp_customize->add_section( 'starbasego_logo_section' , array(
		'title'       => __( 'Logo', 'starbasego' ),
		'priority'    => 30,
		'description' => 'Upload a logo to replace the default site name and description in the header',
	) );
	
	$wp_customize->add_setting( 'starbasego_logo' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'starbasego_logo', array(
		'label'    => __( 'Logo', 'starbasego' ),
		'section'  => 'starbasego_logo_section',
		'settings' => 'starbasego_logo',
	) ) );
}
add_action('customize_register', 'starbasego_theme_customizer');
