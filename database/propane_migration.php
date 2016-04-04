<?php
DEFINE('DB_PASS', 'codeup1');
DEFINE('DB_USER', 'codeup1');
DEFINE('DB_NAME', 'dbname=ad');
DEFINE('DB_HOST', 'mysql:host=127.0.0.1;');

require 'db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$droptable = 'DROP TABLE IF EXISTS propane';
$dbc->exec($droptable);


$createtable = 'CREATE TABLE propane(
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


$droptable = 'DROP TABLE IF EXISTS propane_and_accessories';
$dbc->exec($droptable);

$createtable = 'CREATE TABLE propane_and_accessories(
				  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
				  name VARCHAR(200) NOT NULL,
				  type VARCHAR(200) NOT NULL,
				  price FLOAT(8,2) NOT NULL,
				  description VARCHAR(450) NOT NULL,
				  image VARCHAR(200),
				  PRIMARY KEY(id)
				  )';

$dbc->exec($createtable);


$droptable = 'DROP TABLE IF EXISTS users';
$dbc->exec($droptable);

$createtable = 'CREATE TABLE users(
				 id INT UNSIGNED NOT NULL AUTO_INCREMENT,
				 firstname VARCHAR(50) NOT NULL,
				 lastname VARCHAR(75) NOT NULL,
				 email VARCHAR(30) NOT NULL,
				 username VARCHAR(20) NOT NULL,
				 password VARCHAR(15) NOT NULL,
				 PRIMARY KEY(id),
				 UNIQUE (username),
				 UNIQUE (password),
				 UNIQUE (email)
				 )';

$dbc->exec($createtable);

?>


