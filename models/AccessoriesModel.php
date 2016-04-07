<?php

require_once __DIR__ . '/BaseModel.php';

class Accessories extends Model
{
	protected static $table = 'propane_and_accessories';
    protected $columns = [
    		'id',
    		'user_id',
    		'category',
    		'type',
    		'price',
    		'description',
    		'image',

    ];

    protected function insert()
    {
    	$insert = "INSERT INTO propane_and_accessories (category, type, price, description, user_id, image)
			   VALUES (:category, :type, :price, :description, :user_id, :image)";

		$statement = self::$dbc->prepare($insert);
		$statement->bindValue(':category', $this->attributes['category'], PDO::PARAM_STR);
		$statement->bindValue(':type', $this->attributes['type'], PDO::PARAM_STR);
		$statement->bindValue(':price', $this->attributes['price'], PDO::PARAM_STR);
		$statement->bindValue(':description', $this->attributes['description'], PDO::PARAM_STR);
        $statement->bindValue(':user_id', $this->attributes['user_id'], PDO::PARAM_STR);
        $statement->bindValue(':image', $this->attributes['image'], PDO::PARAM_STR);
		$statement->execute();
		$this->attributes['id'] = self::$dbc->lastInsertId();
		}

	protected function update() {}	
}

?>