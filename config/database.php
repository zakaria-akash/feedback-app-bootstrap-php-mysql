<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'zakaria');
define('DB_PASS', '123456');
define('DB_NAME', 'live_feedback_db');

//create a connection
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//check connection
if ($connection->connect_error) {
    die('Connection Failed' . $connection->connect_error);
}

echo "connected";