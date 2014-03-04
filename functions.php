<?php
add_action( 'after_setup_theme', 'mondrian_setup' );
function mondrian_setup()
{
	load_theme_textdomain( 'mondrian', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 640;
	register_nav_menus(
		array( 'main-menu' => __( 'Main Menu', 'mondrian' ) )
		);
}

add_action( 'wp_enqueue_scripts', 'mondrian_load_scripts' );
function mondrian_load_scripts()
{
	wp_enqueue_script( 'jquery' );
}

add_action( 'comment_form_before', 'mondrian_enqueue_comment_reply_script' );
function mondrian_enqueue_comment_reply_script()
{
	if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}

add_filter( 'the_title', 'mondrian_title' );
function mondrian_title( $title ) {
	return $title != '' ? $title : ' ';
}

add_filter( 'wp_title', 'mondrian_filter_wp_title' );
function mondrian_filter_wp_title( $title )
{
	return $title . esc_attr( get_bloginfo( 'name' ) );
}

add_action( 'widgets_init', 'mondrian_widgets_init' );
function mondrian_widgets_init()
{
	register_sidebar( array (
		'name' => __( 'Sidebar Widget Area', 'mondrian' ),
		'id' => 'sidebar-widget-area',
		'before_widget' => '<div id="widget-%1$s" class="widget-container">',
		'after_widget' => "</div>",
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
		) );
}

add_filter( 'get_comments_number', 'mondrian_comments_number' );
function mondrian_comments_number( $count )
{
	if ( !is_admin() ) {
		global $id;
		$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
		return count( $comments_by_type['comment'] );
	} else {
		return $count;
	}
}

function mondrian_theme_customizer( $wp_customize ) {
  $wp_customize->add_section( 'mondrian_logo_section' , array(
		'title'       => __( 'Logo', 'mondrian' ),
		'priority'    => 30,
		'description' => 'Upload a logo to replace the default site name and description in the header',
	) );
	
	$wp_customize->add_setting( 'mondrian_logo' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'mondrian_logo', array(
		'label'    => __( 'Logo', 'mondrian' ),
		'section'  => 'mondrian_logo_section',
		'settings' => 'mondrian_logo',
	) ) );
}
add_action('customize_register', 'mondrian_theme_customizer');
