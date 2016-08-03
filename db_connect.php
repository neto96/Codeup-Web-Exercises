<?php
//DEFINE('DB_HOST', '127.0.0.1');
//DEFINE('DB_NAME', 'databasename');
//DEFINE('DB_USER', 'username');
//DEFINE('DB_PASS', 'password');

$dbc = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
