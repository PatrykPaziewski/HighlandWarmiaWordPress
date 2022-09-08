<?php
	function highlandWarmia_theme_support(){
		add_theme_support( 'title-tag' );
		add_theme_support('post-thumbnails');
	}
	add_action('after_setup_theme', 'highlandWarmia_theme_support');


	function highlandWarmia_menus(){

		$locations = array(
			'headerLeft' => "Header po lewej",
			'headerRight' => "Header po prawej",
			'HeaderMobile' => "Menu mobilne"
		);
		register_nav_menus( $locations );
	}
	add_action( 'init', 'highlandWarmia_menus' );


	function highlandWarmia_register_styles(){

		$version = wp_get_theme() -> get('Version');
		wp_enqueue_style('highlandWarmia-css', get_template_directory_uri() . "/style.css", array(), $version, 'all');

	}
	add_action( 'wp_enqueue_scripts', 'highlandWarmia_register_styles' );


	function highlandWarmia_register_scripts(){
		wp_enqueue_script('highlandWarmia-main-jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" , array(), '1.0', true);
		wp_enqueue_script('highlandWarmia-main', get_theme_file_uri('/assets/js/main.js'), array(), '1.0', true);
	}
	add_action( 'wp_enqueue_scripts', 'highlandWarmia_register_scripts' );
?>