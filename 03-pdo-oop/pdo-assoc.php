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
$res_assoc = $query->fetchAll(PDO::FETCH_ASSOC);

$query->execute();
$res_obj = $query->fetchAll(PDO::FETCH_OBJ);

echo "<pre>";
echo "# ASSOC\n";
var_dump($res_assoc);
echo "\n";

echo "# OBJ\n";
var_dump($res_obj); // we have no idea here if the objects are students or teachers or whatever since they all are of the same stdClass
echo "\n";
echo "</pre>";
