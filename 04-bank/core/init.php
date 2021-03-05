<?php
/**
 * Initialize app
 */

// register autoloading of classes
require_once('vendor/autoload.php');

// config
require_once('config/app.php');

// db
require_once('core/bootstrap.php');  // Eloquent

// helpers
require_once('includes/helpers.php');
