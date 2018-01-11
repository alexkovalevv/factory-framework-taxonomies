<?php
	/**
	 * Factory Taxonomies
	 *
	 * @author Paul Kashtanoff <paul@byonepress.com>
	 * @copyright (c) 2013, OnePress Ltd
	 *
	 * @package core
	 * @since 1.0.0
	 */

	if( defined('FACTORY_T_000_LOADED') ) {
		return;
	}
	define('FACTORY_TAXONOMIES_000_LOADED', true);

	define('FACTORY_TAXONOMIES_000_DIR', dirname(__FILE__));
	define('FACTORY_TAXONOMIES_000_URL', plugins_url(null, __FILE__));

	load_plugin_textdomain('factory_types_000', false, dirname(plugin_basename(__FILE__)) . '/langs');

	// sets version of admin interface
	if( is_admin() ) {
		if( !defined('FACTORY_FLAT_ADMIN') ) {
			define('FACTORY_FLAT_ADMIN', true);
		}
	}

	#comp merge	
	require(FACTORY_TAXONOMIES_000_DIR . '/taxonomy.class.php');
	require(FACTORY_TAXONOMIES_000_DIR . '/taxonomy.php');
	#endcomp