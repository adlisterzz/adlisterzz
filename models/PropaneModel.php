<?php
require_once __DIR__ . '/BaseModel.php';

class Propane extends Model

{
	protected static $table = 'propane';
    protected $columns = [
        'id',
        'user_id',
        'name',
        'maker',
        'grade',
        'type',
        'price',
        'description',
        'image',
    ];

    protected function insert()
    {
    	$insert = "INSERT INTO propane (name, maker, grade, type, price, description, user_id, image)
			   VALUES (:name, :maker, :grade, :type, :price, :description, :user_id, :image)";
      
	$statement = self::$dbc->prepare($insert);
	$statement->bindValue(':name', $this->attributes['name'], PDO::PARAM_STR);
	$statement->bindValue(':maker', $this->attributes['maker'], PDO::PARAM_STR);
	$statement->bindValue(':grade', $this->attributes['grade'], PDO::PARAM_STR);
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