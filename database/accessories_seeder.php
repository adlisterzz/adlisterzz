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

	array('category'=> 'Outdoor', 'type'=> 'Regulator', 'price'=> 500,  'description'=> 'Regulator for Propane Cylinder', 'image'=> '/img/propaneAccessory1.jpeg'),

	array('category'=> 'Outdoor', 'type'=> 'Regulator', 'price'=> 400,  'description'=> 'Regulator for Propane Cylinder', 'image'=> '/img/propaneAccessory11.jpeg'),

	array('category'=> 'Outdoor and Indoor', 'type'=> 'Valve', 'price'=> 100,  'description'=> 'Valve for Propane Cylinder', 'image'=> '/img/propaneAccessory12.jpeg'),

	array('category'=> 'Outdoor and Indoor', 'type'=> 'Cylinder Set', 'price'=> 950,  'description'=> 'Complete accessories set for Propane Cylinder', 'image'=> '/img/propaneAccessory14.jpeg'),

	array('category'=> 'Outdoor', 'type'=> 'Heaters', 'price'=> 750,  'description'=> 'Selection of outdoor Propane Heaters', 'image'=> '/img/propaneAccessory15.jpeg'),

	array('category'=> 'Outdoor', 'type'=> 'Pressure Regulator', 'price'=> 250,  'description'=> 'Pressure Regulator for Propane Cylinder', 'image'=> '/img/propaneAccessory2.jpeg'),

	array('category'=> 'Outdoor', 'type'=> 'Regulator Set', 'price'=> 630,  'description'=> 'Regulator Set for Propane Cylinder', 'image'=> '/img/propaneAccessory3.jpeg'),

	array('category'=> 'Outdoor and Indoor', 'type'=> 'Portable Heater', 'price'=> 450,  'description'=> 'Portable Propane Heaters', 'image'=> '/img/propaneAccessory5.jpeg'),

	array('category'=> 'Outdoor and Indoor', 'type'=> 'Misc', 'price'=> 25,  'description'=> 'Misc Propne and Propane Accessories stuff', 'image'=> '/img/propaneAccessory6.jpeg'),

	array('category'=> 'Outdoor', 'type'=> 'Grill', 'price'=> 720,  'description'=> 'Outdoor Propane Grill', 'image'=> '/img/propaneAccessory7.jpeg'),

	array('category'=> 'Outdoor and Indoor', 'type'=> 'Tubes', 'price'=> 99,  'description'=> 'Supply Tubes', 'image'=> '/img/propaneAccessory8.jpeg')

	

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