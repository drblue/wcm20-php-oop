<?php

require('core/init.php');

use App\Content\Post;
use App\Content\Page;
use App\Content\Author;
use App\Users\Author as UserAuthor;
use App\Users\Subscriber;

echo "Before creating a new instance of Post...<br>";
$post = new Post();
echo "After creating a new instance of Post...<br>";

echo "<br>";

echo "Before creating a new instance of Page...<br>";
$page = new Page();
echo "After creating a new instance of Page...<br>";

echo "<br>";

echo "Before creating a new instance of Page #2...<br>";
$page2 = new Page();
echo "After creating a new instance of Page #2...<br>";

echo "<br>";

echo "Before creating a new instance of Author...<br>";
$author = new UserAuthor();
echo "After creating a new instance of Author...<br>";

echo "<br>";


echo "<pre>";
var_dump($post);
var_dump($page);
var_dump($page2);
var_dump($author);
echo "</pre>";
