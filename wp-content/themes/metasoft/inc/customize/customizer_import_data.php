<?php
class metasoft_import_dummy_data {

	private static $instance;

	public static function init( ) {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof metasoft_import_dummy_data ) ) {
			self::$instance = new metasoft_import_dummy_data;
			self::$instance->metasoft_setup_actions();
		}

	}

	/**
	 * Setup the class props based on the config array.
	 */
	

	/**
	 * Setup the actions used for this class.
	 */
	public function metasoft_setup_actions() {

		// Enqueue scripts
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'metasoft_import_customize_scripts' ), 0 );

	}
	
	

	public function metasoft_import_customize_scripts() {

	wp_enqueue_script( 'metasoft-import-customizer-js', get_template_directory_uri() . '/assets/js/metasoft-import-customizer.js', array( 'customize-controls' ) );
	}
}

$metasoft_import_customizers = array(

		'import_data' => array(
			'recommended' => true,
			
		),
);
metasoft_import_dummy_data::init( apply_filters( 'metasoft_import_customizer', $metasoft_import_customizers ) );