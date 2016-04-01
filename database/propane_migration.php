<?php
DEFINE('DB_PASS', 'codeup1');
DEFINE('DB_USER', 'codeup1');
DEFINE('DB_NAME', 'dbname=ad');
DEFINE('DB_HOST', 'mysql:host=127.0.0.1;');

require 'db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$droptable = 'DROP TABLE IF EXISTS propane_and_accessories';
$dbc->exec($droptable);

$createtable = 'CREATE TABLE propane_and_accessories(
				id INT UNSIGNED NOT NULL AUTO_INCREMENT,
				name VARCHAR(200) NOT NULL,
				maker VARCHAR(200) NOT NULL,
				grade VARCHAR(100) NOT NULL,
				type VARCHAR(100) NOT NULL,
				price FLOAT(8,2) UNSIGNED NOT NULL,
				description VARCHAR(450) NOT NULL,
				image VARCHAR(200),
				PRIMARY KEY(id)
				)';
$dbc->exec($createtable);
?>