<?php
add_action( 'tgmpa_register', 'weiboo_register_required_plugins' );
function weiboo_register_required_plugins() {
	$plugins = array(	
  
	array(
		'name' 		=> 'Template Library and Redux Framework',
		'slug' 		=> 'redux-framework',
		'required' 	=> true,
	),  

	array(
		'name' 		=> 'Elementor',
		'slug' 		=> 'elementor',
		'required' 	=> true,
	),    
    array(
		'name' 		=> 'Breadcrumb NavXT',
		'slug' 		=> 'breadcrumb-navxt',
		'required' 	=> true,
	),

	array(
		'name' 		=> 'Contact Form 7',
		'slug' 		=> 'contact-form-7',
		'required' 	=> true,
	),
	array(
		'name' 		=> 'WooCommerce',
		'slug' 		=> 'woocommerce',
		'required' 	=> true,
	),	

	array(
		'name' 		=> 'Mailchimp for WordPress',
		'slug' 		=> 'mailchimp-for-wp',
		'required' 	=>  false,
	),

	
	array(
		'name' 		=> 'One Click Demo Import',
		'slug' 		=> 'one-click-demo-import',
		'required' 	=> true,
	),

	array(
		'name' 		=> 'Perfect Brands for WooCommerce',
		'slug' 		=> 'perfect-woocommerce-brands',
		'required' 	=> true,
	),

	array(
		'name' 		=> 'Variation Swatches for WooCommerce',
		'slug' 		=> 'woo-variation-swatches',
		'required' 	=> true,
	),

	array(
		'name' 		=> 'YITH WooCommerce Quick View',
		'slug' 		=> 'yith-woocommerce-quick-view',
		'required' 	=> true,
	),
	array(
		'name' 		=> 'YITH WooCommerce Wishlist',
		'slug' 		=> 'yith-woocommerce-wishlist',
		'required' 	=> true,
	),

	array(
		'name'               => 'RT Elements', // The plugin name.
		'slug'               => 'rt-elements', // The plugin slug (typically the folder name).
		'source'             => get_template_directory() .'/inc/tgm/plugins/rt-elements.zip', // The plugin source.
		'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
		'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
		'external_url'       => '', // If set, overrides default API URL and points to an external URL.
		'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
	),

	array(
		'name'               => 'RT Custom Framework', // The plugin name.
		'slug'               => 'rt-custom-framework', // The plugin slug (typically the folder name).
		'source'             => get_template_directory() .'/inc/tgm/plugins/rt-custom-framework.zip', // The plugin source.
		'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
		'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
		'external_url'       => '', // If set, overrides default API URL and points to an external URL.
		'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
	),
		

);
	// Change this to your theme text domain, used for internationalising strings
	$theme_text_domain = 'weiboo';
	$config = array(
		'domain'       		=> 	$theme_text_domain,         // Text domain - likely want to be the same as your theme.
		'default_path' 		=> '',                         	// Default absolute path to pre-packaged plugins
		'parent_menu_slug' 	=> 'themes.php', 				// Default parent menu slug
		'parent_url_slug' 	=> 'themes.php', 				// Default parent URL slug
		'menu'         		=> 'install-required-plugins', 	// Menu slug
		'has_notices'      	=> true,                       	// Show admin notices or not
		'is_automatic'    	=> true,					   	// Automatically activate plugins after installation or not
		'message' 			=> '',							// Message to output right before the plugins table
		'strings'      		=> array(
			'page_title'                       			=> __( 'Install Required Plugins', "weiboo" ),
			'menu_title'                       			=> __( 'Install Plugins', "weiboo" ),
			'installing'                       			=> __( 'Installing Plugin: %s', "weiboo" ), // %1$s = plugin name
			'oops'                             			=> __( 'Something went wrong with the plugin API.', "weiboo" ),
			'notice_can_install_required'     			=> _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.','weiboo' ), // %1$s = plugin name(s)
			'notice_can_install_recommended'			=> _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.','weiboo' ), // %1$s = plugin name(s)
			'notice_cannot_install'  					=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.','weiboo' ), // %1$s = plugin name(s)
			'notice_can_activate_required'    			=> _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.','weiboo' ), // %1$s = plugin name(s)
			'notice_can_activate_recommended'			=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ,'weiboo'), // %1$s = plugin name(s)
			'notice_cannot_activate' 					=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.','weiboo' ), // %1$s = plugin name(s)
			'notice_ask_to_update' 						=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ,'weiboo'), // %1$s = plugin name(s)
			'notice_cannot_update' 						=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ,'weiboo'), // %1$s = plugin name(s)
			'install_link' 					  			=> _n_noop( 'Begin installing plugin', 'Begin installing plugins','weiboo' ),
			'activate_link' 				  			=> _n_noop( 'Activate installed plugin', 'Activate installed plugins' ,'weiboo'),
			'return'                           			=> __( 'Return to Required Plugins Installer', "weiboo" ),
			'plugin_activated'                 			=> __( 'Plugin activated successfully.', "weiboo" ),
			'complete' 									=> __( 'All plugins installed and activated successfully. %s', "weiboo" ), // %1$s = dashboard link
			'nag_type'									=> 'updated' // Determines admin notice type - can only be 'updated' or 'error'
		)
	);
	tgmpa( $plugins, $config );
}