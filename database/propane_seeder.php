<?php

DEFINE('DB_PASS', 'codeup1');
DEFINE('DB_USER', 'codeup1');
DEFINE('DB_NAME', 'dbname=ad');
DEFINE('DB_HOST', 'mysql:host=127.0.0.1;');

require 'db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$deleteRecords = 'TRUNCATE propane_and_accessories';
$dbc->exec($deleteRecords);


$propanes = array(

	array('name'=> 'Coleman', 'maker'=> 'Coleman', 'grade'=> 'HD5', 'type'=> 'liquid', 'price'=> 1000, 'description'=> 'Pre-filled propane cylinders with quality steel construction, a stable base and reliable valves provide safe and easy-to-use operation. Cylinders are a universal size and fit all standard portable propane appliances, tabletop grills and propane torches.', 'image'=> '/img/Coleman_Propane.jpeg'),

	array('name'=> 'BlueRhino', 'maker'=> 'Various', 'grade'=> 'HD5 and HD2', 'type'=> 'vapor and liquid', 'price'=> 1500, 'description'=> 'When you need propane, bring your empty propane tank and exchange for a full tank.', 'image'=> '/img/blueRhino_Propane.jpeg'),

	array('name'=> 'Bernzomatic', 'maker'=> 'Bernzomatic', 'grade'=> 'HD5 and HD2', 'type'=> 'vapor and liquid', 'price'=> 1000, 'description'=> "There''s a fire in each of us. Waiting to ignite. We believe in empowering those who''ve found their flame and dare to follow it. Because the ones who do, create bold transformations within themselves and in their environments.", 'image'=> '/img/bernzomatic_propane.jpeg')

	);

foreach ($propanes as $propane) {

		$query = "INSERT INTO propane_and_accessories (name, maker, grade, type, price, description, image)
			   VALUES (:name, :maker, :grade, :type, :price, :description, :image)";



$statement = $dbc->prepare($query);
$statement->bindValue(':name', $propane['name'], PDO::PARAM_STR);
$statement->bindValue(':maker', $propane['maker'], PDO::PARAM_STR);
$statement->bindValue(':grade', $propane['grade'], PDO::PARAM_STR);
$statement->bindValue(':type', $propane['type'], PDO::PARAM_STR);
$statement->bindValue(':price', $propane['price'], PDO::PARAM_STR);
$statement->bindValue(':description', $propane['description'], PDO::PARAM_STR);
$statement->bindValue(':image', $propane['image'], PDO::PARAM_STR);
			   		  


$statement->execute();
echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}
?>