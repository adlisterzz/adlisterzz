<?php

DEFINE('DB_PASS', 'codeup1');
DEFINE('DB_USER', 'codeup1');
DEFINE('DB_NAME', 'dbname=ad');
DEFINE('DB_HOST', 'mysql:host=127.0.0.1;');

require 'db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$deleteRecords = 'TRUNCATE propane_and_accessories';
$dbc->exec($deleteRecords);


$accessories = array(

	array('category'=> 'Outdoor', 'type'=> 'Regulator', 'price'=> 500,  'description'=> 'Regulator for Propane Cylinder', 'image'=> '/img/propaneAccessory1.jpeg')

	

	);

foreach ($accessories as $accessorie) {

		$query = "INSERT INTO propane_and_accessories (category, type, price, description, image)
			   VALUES (:category, :type, :price, :description, :image)";



$statement = $dbc->prepare($query);
$statement->bindValue(':category', $accessorie['category'], PDO::PARAM_STR);
$statement->bindValue(':type', $accessorie['type'], PDO::PARAM_STR);
$statement->bindValue(':price', $accessorie['price'], PDO::PARAM_STR);
$statement->bindValue(':description', $accessorie['description'], PDO::PARAM_STR);
$statement->bindValue(':image', $accessorie['image'], PDO::PARAM_STR);
			   		  


$statement->execute();
echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}
?>