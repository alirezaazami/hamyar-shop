<?php


require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );

function my_theme_register_required_plugins() {

	$plugins = array(

		array(
			'name'      => 'advanced custom fields',
			'slug'      => 'advanced-custom-fields',
			'required'  => true,
			'force_activation'   => false
		),
		array(
			'name'        => 'redux framework',
			'slug'        => 'redux-framework',
			'required'  => true,
			'force_activation'   => true
		),
		array(
			'name'        => 'woocommerce',
			'slug'        => 'woocommerce',
			'required'  => true,
		),
		array(
			'name'        => 'regenerate thumbnails',
			'slug'        => 'regenerate-thumbnails',
			'required'  => false,
		),
		array(
			'name'               => 'gravity form', // The plugin name.
			'slug'               => 'gravityforms-master', // The plugin slug (typically the folder name).
			'source'             => get_stylesheet_directory() . 'tgm/plugin/gravityforms-master.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			),

	);


	$config = array(
		'id'           => 'hamyar_tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.


		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'hamyar' ),
			'menu_title'                      => __( 'Install Plugins', 'hamyar' ),
			'installing'                      => __( 'Installing Plugin: %s', 'hamyar' ),
			'updating'                        => __( 'Updating Plugin: %s', 'hamyar' ),
			'oops'                            => __( 'Something went wrong with the plugin API.', 'hamyar' ),
			'notice_can_install_required'     => _n_noop(
				'This theme requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'hamyar'
			),
			'notice_can_install_recommended'  => _n_noop(
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'hamyar'
			),
			'notice_ask_to_update'            => _n_noop(
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'hamyar'
			),
			'notice_ask_to_update_maybe'      => _n_noop(
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'hamyar'
			),
			'notice_can_activate_required'    => _n_noop(
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'hamyar'
			),
			'notice_can_activate_recommended' => _n_noop(
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'hamyar'
			),
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'hamyar'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'hamyar'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'hamyar'
			),
			'return'                          => __( 'Return to Required Plugins Installer', 'hamyar' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'hamyar' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'hamyar' ),
			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'hamyar' ),
			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'hamyar' ),
			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'hamyar' ),
			'dismiss'                         => __( 'Dismiss this notice', 'hamyar' ),
			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'hamyar' ),
			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'hamyar' ),

			'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
		),
	);

	tgmpa( $plugins, $config );
}
