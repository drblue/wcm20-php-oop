<?php
/**
 * Initialize app
 */

// config
require_once('config/app.php');

// db
require_once('core/db.php');

// helpers
require_once('includes/helpers.php');

// models
require_once('app/Models/Account.php');
require_once('app/Models/Person.php');

// controllers
require_once('app/Controllers/PersonController.php');
