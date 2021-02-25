<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'demo');
define('DB_USERNAME', 'www');
define('DB_PASSWORD', 'apa');

// init dbh (database handle)
$dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USERNAME, DB_PASSWORD);

// prepare a query using dbh
$query = $dbh->prepare("SELECT * FROM students");
$query->execute();

// do fun stuff with result
$res = $query->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
var_dump($res);
echo "</pre>";
