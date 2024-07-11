<?php
/*
 * Plugin Name: Lighthouse By Novatorius
 * Description: Core directory functionality and search functionality.
 * Author: Novatorius, LLC
 * Author URI: https://novatori.us
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
