<?php
DEFINE('DB_PASS', 'codeup1');
DEFINE('DB_USER', 'codeup1');
DEFINE('DB_NAME', 'ad');
DEFINE('DB_HOST', '127.0.0.1');

$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME,DB_USER,DB_PASS);
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>