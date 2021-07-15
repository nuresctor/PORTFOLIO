<?php
/* Notifications in customizer */

require get_template_directory() . '/inc/customizer-notify/metasoft-customizer-notify.php';
$metasoft_config_customizer = array(
	'recommended_plugins'       => array(
		'clever-fox' => array(
			'recommended' => true,
			'description' => sprintf(__('Install and activate <strong>Clever Fox</strong> plugin for taking full advantage of all the features this theme has to offer <strong>Metasoft</strong>.', 'metasoft')),
		),
	),
	'recommended_actions'       => array(),
	'recommended_actions_title' => esc_html__( 'Recommended Actions', 'metasoft' ),
	'recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'metasoft' ),
	'install_button_label'      => esc_html__( 'Install and Activate', 'metasoft' ),
	'activate_button_label'     => esc_html__( 'Activate', 'metasoft' ),
	'metasoft_deactivate_button_label'   => esc_html__( 'Deactivate', 'metasoft' ),
);
Metasoft_Customizer_Notify::init( apply_filters( 'metasoft_customizer_notify_array', $metasoft_config_customizer ) );
?>