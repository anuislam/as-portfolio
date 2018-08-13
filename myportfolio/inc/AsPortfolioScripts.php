<?php
namespace Inc;
/**
 * Load Scripts
 */
class AsPortfolioScripts
{
	
	function __construct(){
		add_action('wp_enqueue_scripts', [$this, 'load_css']);
		add_action('wp_enqueue_scripts', [$this, 'load_js']);
		add_action( 'customize_preview_init', [$this, 'customize_controls_enqueue_scripts'] );
	}

	public function load_css(){
		wp_enqueue_style( 'as_portfolio_style', get_stylesheet_uri() );
		wp_enqueue_style( 'as_portfolio_google_fonts_Poppins', '//fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i' );
		wp_enqueue_style( 'as_portfolio_google_fonts_open', '//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' );

		wp_enqueue_style( 'as_portfolio_font-awesome', get_theme_file_uri( 'css/font-awesome.min.css' ) );
		wp_enqueue_style( 'as_portfolio_animatedheadline', get_theme_file_uri( 'css/jquery.animatedheadline.css' ) );
		wp_enqueue_style( 'as_portfolio_materialize', get_theme_file_uri( 'css/materialize.min.css' ) );
		wp_enqueue_style( 'as_portfolio_main_style', get_theme_file_uri( 'css/main.css' ) );
		wp_enqueue_style( 'as_portfolio_skins', get_theme_file_uri( 'css/skins/orange.css' ) );
	}


	public function load_js(){
		wp_register_script( 'as_portfolio_modernizr', get_theme_file_uri( "js/modernizr.custom.js" ), null, 1.0, false );
		wp_enqueue_script( 'as_portfolio_modernizr' );
		
		//wp_register_script( 'as_portfolio_jquery', get_theme_file_uri( "js/jquery-2.2.4.min.js" ), 'jquery', 1.0, true );
		wp_register_script( 'as_portfolio_animatedheadline', get_theme_file_uri( "js/jquery.animatedheadline.js" ), 'jquery', 1.0, true );
		wp_register_script( 'as_portfolio_boxlayout', get_theme_file_uri( "js/boxlayout.js" ), 'jquery', 1.0, true );
		wp_register_script( 'as_portfolio_materialize', get_theme_file_uri( "js/materialize.min.js" ), 'jquery', 1.0, true );
		wp_register_script( 'as_portfolio_hoverdir', get_theme_file_uri( "js/jquery.hoverdir.js" ), 'jquery', 1.0, true );
		wp_register_script( 'as_portfolio_custom', get_theme_file_uri( "js/custom.js" ), 'jquery', 1.0, true );

		wp_enqueue_script('jquery');
		wp_enqueue_script('as_portfolio_animatedheadline');
		wp_enqueue_script('as_portfolio_boxlayout');
		wp_enqueue_script('as_portfolio_materialize');
		wp_enqueue_script('as_portfolio_hoverdir');
		wp_enqueue_script('as_portfolio_custom');
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}

	public function customize_controls_enqueue_scripts(){
		wp_enqueue_script( 'as_portfolio_customize', get_theme_file_uri( "js/customize.custom.js" ),  array( 'jquery', 'customize-preview' ), false, true  );
	}
}