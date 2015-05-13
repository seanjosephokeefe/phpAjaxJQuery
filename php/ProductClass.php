<?php

//ProductClass.php

class Product
{
	public $id;
	public $name;
	public $price;
	public $active;
	
	public function __construct($id, $name, $price, $active) {
        $this -> id = $id;
		$this -> name = $name;
		$this -> price = $price;
		$this -> active = $active;
	}
}
?>