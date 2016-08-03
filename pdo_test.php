<?php

DEFINE('DB_HOST', '127.0.0.1');
DEFINE('DB_NAME', 'parks_db');
DEFINE('DB_USER', 'parks_user');
DEFINE('DB_PASS', 'parks');

require "db_connect.php";

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
