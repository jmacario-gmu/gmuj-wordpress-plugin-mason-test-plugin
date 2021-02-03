<?php

/**
 * Main plugin file for the Mason Test plugin
 */

/**
 * Plugin Name:       Mason WordPress: Mason Test Plugin
 * Author:            Jan Macario
 * Plugin URI:        https://github.com/jmacario-gmu/gmuj-wordpress-plugin-mason-test-plugin
 * Description:       Mason WordPress plugin used for testing purposes.
 * Version:           1.0.3
 */

// This is an unimportant change. This is supposed to be version 1.0.3, but I'm going to forget to modify the version number and commit the change and tag it. Will the auto update process make the update because it's a new tag, or will it not because it thinks the version is the same?

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
