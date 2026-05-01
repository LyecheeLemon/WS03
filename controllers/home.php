<?php

loadView('home');

$config = require basePath('config/db.php');
$db = new Database($config);
$listings = $db->query("SELECT * FROM listings LIMIT6")->fetchAll();

inspect($listings);
?>