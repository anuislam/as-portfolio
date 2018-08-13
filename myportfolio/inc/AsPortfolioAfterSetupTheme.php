<?php 

namespace Inc;
/**
 * After setup theme
 */
class AsPortfolioAfterSetupTheme
{
	
	function __construct(){
		add_action('after_setup_theme', [ $this, 'init' ]);
		add_action('after_setup_theme', [ $this, 'portfolio' ]);
		add_action('widgets_init', [ $this, 'register_widget_areas' ]);
		add_filter( 'style_loader_src', [ $this, 'remove_css_js_ver' ], 10, 2 );
		add_filter( 'script_loader_src', [ $this, 'remove_css_js_ver' ], 10, 2 ); 
		add_filter('comment_reply_link', [ $this, 'replace_reply_link_class']);
		add_filter( 'comment_form_fields', [ $this,  'move_comment_field_to_bottom'] );

	}

	public function init(){
		load_theme_textdomain( 'as' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'as-portfolio-image', 960, 470, true );
		add_image_size( 'as-portfolio-about-image', 600, 810, true );
		add_image_size( 'as-portfolio-showcase-image', 535, 400, true );
		add_image_size( 'as-portfolio-blogsingle-image', 748, 364, true );
		add_image_size( 'as-portfolio-thumb-image', 90, 70, true );
		add_image_size( 'as-portfolio-video-image', 577, 320, true );
	}

	public function  remove_css_js_ver( $src ) {
		if( strpos( $src, '?ver=' ) )
		$src = remove_query_arg( 'ver', $src );
		return $src;
	}

	public function portfolio() {

		$labels = array(
			'name'                  => _x( 'Portfolios', 'Post Type General Name', 'as' ),
			'singular_name'         => _x( 'Portfolio', 'Post Type Singular Name', 'as' ),
			'menu_name'             => __( 'Portfolio', 'as' ),
			'name_admin_bar'        => __( 'Portfolio', 'as' ),
			'archives'              => __( '', 'as' ),
			'attributes'            => __( '', 'as' ),
			'parent_item_colon'     => __( '', 'as' ),
			'all_items'             => __( 'All Portfolios', 'as' ),
			'add_new_item'          => __( 'Add New Portfolio', 'as' ),
			'add_new'               => __( 'Add New', 'as' ),
			'new_item'              => __( 'New Portfolio', 'as' ),
			'edit_item'             => __( 'Edit Portfolio', 'as' ),
			'update_item'           => __( 'Update Portfolio', 'as' ),
			'view_item'             => __( 'View Portfolio', 'as' ),
			'view_items'            => __( 'View Portfolios', 'as' ),
			'search_items'          => __( 'Search Portfolio', 'as' ),
			'not_found'             => __( 'Not found', 'as' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'as' ),
			'insert_into_item'      => __( 'Insert into Portfolio', 'as' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'as' ),
			'items_list'            => __( 'Portfolios list', 'as' ),
			'items_list_navigation' => __( 'Portfolios list navigation', 'as' ),
			'filter_items_list'     => __( 'Filter Portfolios list', 'as' ),
		);
		$args = array(
			'label'                 => __( 'Portfolio', 'as' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'thumbnail' ),
			'hierarchical'          => false,
			'public'                => false,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => false,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'portfolio', $args );

	}	

	public function register_widget_areas() {
	    register_sidebar( array(
	        'name' => __( 'Sidebar', 'as' ),
	        'id' => as_portfolio_prifix.'rigth_sidebar',
	        'before_widget' => '<div class="widget as_portfolio_widget_meta_data_54587">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3 class="widget-title">',
	        'after_title' => '</h3>',
	    ) );

	    register_widget('AsRecentPostWithPic');
	}

	public function replace_reply_link_class($class){
		$class = str_replace("class='comment-reply-link", "class='comment-reply-link comment-reply", $class);
		return $class;
	}


	public function move_comment_field_to_bottom( $fields ) {
		$comment_field = $fields['comment'];
		unset( $fields['comment'] );
		$fields['comment'] = $comment_field;
		return $fields;
	}
	 

}