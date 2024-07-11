<?php
/*
 * Plugin Name: Plugin Name
 * Description: Plugin Functionality.
 * Author: Author
 * Author URI: URI
 * Version: 0.0.1
 */

use PluginNamespace\Application;

require_once 'vendor/autoload.php';

/**
 * Registers the installation process, which runs when the plugin activates.
 */
register_activation_hook(__FILE__, function () {
  (new Application(__FILE__))->install();
});

/**
 * Bootstrap the plugin.
 */
(new Application(__FILE__))->init();
