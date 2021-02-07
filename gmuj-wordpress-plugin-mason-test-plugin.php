<?php

/**
 * Main plugin file for the Mason Test plugin
 */

/**
 * Plugin Name:       Mason WordPress: Mason Test Plugin
 * Author:            Jan Macario
 * Plugin URI:        https://github.com/jmacario-gmu/gmuj-wordpress-plugin-mason-test-plugin
 * Description:       Mason WordPress plugin used for testing purposes.
 * Version:           1.0.4
 */

// Now I'm going to modify the code and test using an SSH key instead of a username/password.

// Exit if this file is not called directly.
	if (!defined('WPINC')) {
		die;
	}

require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/jmacario-gmu/gmuj-wordpress-plugin-mason-test-plugin/',
	__FILE__,
	'gmuj-wordpress-plugin-mason-test-plugin'
);
