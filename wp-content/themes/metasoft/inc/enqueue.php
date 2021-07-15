<?php
 /**
 * Enqueue scripts and styles.
 */
function metasoft_scripts() {
	
	// Styles		
	wp_enqueue_style('bootstrap-min',get_template_directory_uri().'/assets/css/bootstrap.min.css');
	
	wp_enqueue_style('owl-carousel-min',get_template_directory_uri().'/assets/css/owl.carousel.min.css');
	
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/css/fonts/font-awesome/css/font-awesome.min.css');
	
	wp_enqueue_style('metasoft-editor-style',get_template_directory_uri().'/assets/css/editor-style.css');

	wp_enqueue_style('metasoft-menus', get_template_directory_uri() . '/assets/css/mainmenu.css');

	wp_enqueue_style('metasoft-widgets',get_template_directory_uri().'/assets/css/widgets.css');

	wp_enqueue_style('metasoft-main', get_template_directory_uri() . '/assets/css/main.css');
	
	wp_enqueue_style('metasoft-media-query', get_template_directory_uri() . '/assets/css/responsive.css');

	
	wp_enqueue_style( 'metasoft-style', get_stylesheet_uri() );
	
	// Scripts
	wp_enqueue_script( 'jquery' );
	
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), false, true);
	
	wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), true);	
	
	wp_enqueue_script('wow-min', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), false, true);

	wp_enqueue_script('metasoft-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), false, true);
	
	wp_enqueue_script('metasoft-theme-js', get_template_directory_uri() . '/assets/js/theme.min.js', array('jquery'), false, true);
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'metasoft_scripts' );

//Admin Enqueue for Admin
function metasoft_admin_enqueue_scripts(){
	wp_enqueue_style('metasoft-admin-style', get_template_directory_uri() . '/assets/css/admin.css');
	wp_enqueue_script( 'metasoft-admin-script', get_template_directory_uri() . '/assets/js/metasoft-admin-script.js', array( 'jquery' ), '', true );
    wp_localize_script( 'metasoft-admin-script', 'metasoft_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'metasoft_admin_enqueue_scripts' );