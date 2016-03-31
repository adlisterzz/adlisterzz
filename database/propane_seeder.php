<?php

DEFINE('DB_PASS', 'codeup1');
DEFINE('DB_USER', 'codeup1');
DEFINE('DB_NAME', 'dbname=ad');
DEFINE('DB_HOST', 'mysql:host=127.0.0.1;');

require 'db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$deleteRecords = 'TRUNCATE national_parks';
$dbc->exec($deleteRecords);


$propanes = array(

	array('name'=> 'Testname', 'make'=> 'Testmake', 'grade'=> 'Testgrade', 'type'=> 'Testtype', 'price'=> 1000, 'description'=> 'Some description')



	);

foreach ($propanes as $propane) {

		$query = "INSERT INTO propane_and_accessories (name, make, grade, type, price, description)
			   VALUES (:name, :make, :grade, :type, :price, :description)";



$statement = $dbc->prepare($query);
$statement->bindValue(':name', $propane['name'], PDO::PARAM_STR);
$statement->bindValue(':make', $propane['make'], PDO::PARAM_STR);
$statement->bindValue(':grade', $propane['garde'], PDO::PARAM_STR);
$statement->bindValue(':type', $propane['type'], PDO::PARAM_STR);
$statement->bindValue(':price', $propane['price'], PDO::PARAM_STR);
$statement->bindValue(':description', $propane['description'], PDO::PARAM_STR);
			   		  


$statement->execute();
echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}
?>