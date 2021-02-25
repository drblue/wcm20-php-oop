<?php

require('includes/Student.php');
require('includes/Teacher.php');

define('DB_HOST', 'localhost');
define('DB_NAME', 'demo');
define('DB_USERNAME', 'www');
define('DB_PASSWORD', 'apa');

// init dbh (database handle)
$dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USERNAME, DB_PASSWORD);

// prepare a query using dbh
$student_query = $dbh->prepare("SELECT * FROM students");
$student_query->execute();

$students = $student_query->fetchAll(PDO::FETCH_CLASS, 'Student');

// prepare a query using dbh
$teacher_query = $dbh->prepare("SELECT * FROM teachers");
$teacher_query->execute();

$teachers = $teacher_query->fetchAll(PDO::FETCH_CLASS, 'Teacher');

$mix = array_merge($students, $teachers);
foreach ($mix as $person) {
	echo "{$person->getFullName()} ({$person->getEmail()}) is a " . get_class($person) . " with ID {$person->getId()}<br>";
}

echo "<pre>";
echo "# Mix\n\n";
var_dump($mix);
echo "\n\n";
echo "</pre>";

/*
echo "<pre>";
echo "# FETCH_CLASS Student\n\n";
var_dump($students);
echo "\n\n";

echo "# FETCH_CLASS Teacher\n\n";
var_dump($teachers);
echo "\n\n";
echo "</pre>";
*/
