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

// Now I'm going to see if the version number specified in the git tag has any effect on the auto-updates. So far I have been naming tags using the version number specified in the plugin, so the version number and the tag name _should_ always be identical. But based on my last test I don't think that is required. This time I'm going to try naming the tag with a _lower_ version number than the version number specified in the theme, to see if that causes any problem with the auto-updates. If it does not, I can conclude that the tag name is not relevant to the auto-update process.

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
