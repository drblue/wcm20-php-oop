<?php
/**
 * Connect to DB via PDO
 * and get DB handle
 */

$dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USERNAME, DB_PASSWORD);
