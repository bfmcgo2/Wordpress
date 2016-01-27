<?php

// Register Custom Post Type
function make_testimonials_post_type() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Testimonials', 'text_domain' ),
		'name_admin_bar'        => __( 'Testimonials', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'testimonials',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Testimonial', 'text_domain' ),
		'description'           => __( 'Stuff People Said', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'bm_testimonials', $args );

}
add_action( 'init', 'make_testimonials_post_type', 0 );


// Register Custom Post Type
function function_bm_projects() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Projects', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Projects', 'text_domain' ),
		'name_admin_bar'        => __( 'Projects', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Projects', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'bm_projects', $args );

}
add_action( 'init', 'function_bm_projects', 0 );
 

add_action('wp_enqueue_script', 'BradMcGovern_load_scripts');
function BradMcGovern_load_scripts(){
	wp_enqueue_script('jquery');
	wp_enqueue_script('script', get_template_directory()."/assets/js/script.js");
	wp_enqueue_style('style', get_template_directory()."/assets/css/style.css");
}
/*
// add_action( 'after_setup_theme', 'BradMcGovern_setup' );
// function BradMcGovern_setup()
// {
// load_theme_textdomain( 'BradMcGovern', get_template_directory() . '/languages' );
// add_theme_support( 'title-tag' );
// add_theme_support( 'automatic-feed-links' );
// add_theme_support( 'post-thumbnails' );
// global $content_width;
// if ( ! isset( $content_width ) ) $content_width = 640;
// register_nav_menus(
// array( 'main-menu' => __( 'Main Menu', 'BradMcGovern' ) )
// );
// }
// add_action( 'wp_enqueue_scripts', 'BradMcGovern_load_scripts' );
// function BradMcGovern_load_scripts()
// {
// wp_enqueue_script( 'jquery' );
// }
// add_action( 'comment_form_before', 'BradMcGovern_enqueue_comment_reply_script' );
// function BradMcGovern_enqueue_comment_reply_script()
// {
// if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
// }
// add_filter( 'the_title', 'BradMcGovern_title' );
// function BradMcGovern_title( $title ) {
// if ( $title == '' ) {
// return '&rarr;';
// } else {
// return $title;
// }
// }
// add_filter( 'wp_title', 'BradMcGovern_filter_wp_title' );
// function BradMcGovern_filter_wp_title( $title )
// {
// return $title . esc_attr( get_bloginfo( 'name' ) );
// }
// add_action( 'widgets_init', 'BradMcGovern_widgets_init' );
// function BradMcGovern_widgets_init()
// {
// register_sidebar( array (
// 'name' => __( 'Sidebar Widget Area', 'BradMcGovern' ),
// 'id' => 'primary-widget-area',
// 'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
// 'after_widget' => "</li>",
// 'before_title' => '<h3 class="widget-title">',
// 'after_title' => '</h3>',
// ) );
// }
// function BradMcGovern_custom_pings( $comment )
// {
// $GLOBALS['comment'] = $comment;
// ?>
// <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
// <?php 
// }
// add_filter( 'get_comments_number', 'BradMcGovern_comments_number' );
// function BradMcGovern_comments_number( $count )
// {
// if ( !is_admin() ) {
// global $id;
// $comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
// return count( $comments_by_type['comment'] );
// } else {
// return $count;
}
}*/