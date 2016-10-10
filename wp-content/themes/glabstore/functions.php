<?php
	
	function mis_menus(){
		register_nav_menus(
			array(
				'menu-principal' => __('Menú principal'),
				'menu-header' => __('Menú header')
				)
			);
	}
	add_action('init','mis_menus');	

	function mis_widgets(){
		register_sidebar(
			array(
				'name' => __('Sidebar'),
				'id' => __('sidebar'),
				'before_widget' => '<div class="col-md-3><div class="widget">',
				'after_widget' => '</div></div>',
				'before_title' => '<h4>',
				'after_title' => '</h4>',
			)
		);
	}
	add_action('init', 'mis_widgets');

	function buscar_solo_posts($query){
		if($query->is_serach){
			$query->set('post_type', 'post');
		}
		return $query;
	}
	add_filter('pre_get_posts', 'buscar_solo_posts');


	// Logo personalizado en la página de login
	function custom_login_logo() {
	        echo '<style type="text/css">
	        h1 a { background-image: url('.get_bloginfo('template_directory').'/assets/images/logo.jpg) !important; }
	        </style>';
	}
	add_action('login_head', 'custom_login_logo');

	function scripts_elementales(){
		wp_enqueue_style('bootstrapstyle', get_template_directory_uri() . '/assets/css/bootstrap.css');
		wp_enqueue_style('style', get_stylesheet_uri() );
		wp_enqueue_style('jQuery');
		wp_enqueue_style('bootstrapscript', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(jQuery), true);
	}
	add_action('wp_enqueue_scripts', 'scripts_elementales');


	add_action( 'after_setup_theme', 'woocommerce_support' );
	function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


