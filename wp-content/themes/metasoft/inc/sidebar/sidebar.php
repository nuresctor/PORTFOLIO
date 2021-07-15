<?php	
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MetaSoft
 */
function metasoft_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar Widget Area', 'metasoft' ),
		'id' => 'metasoft-sidebar-primary',
		'description' => __( 'The Primary Widget Area', 'metasoft' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Widget Area', 'metasoft' ),
		'id' => 'metasoft-footer-widget-area',
		'description' => __( 'The Footer Widget Area', 'metasoft' ),
		'before_widget' => '<div class="col-md-3 border-right"><aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside></div>',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );	
}
add_action( 'widgets_init', 'metasoft_widgets_init' );