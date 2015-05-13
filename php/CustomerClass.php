<?php

//CustomerClass.php

class Customer
{
	public $id;
	public $first;
	public $last;
	public $active;
	
	public function __construct($id, $first, $last, $active) {
        $this -> id = $id;
		$this -> first = $first;
		$this -> last = $last;
		$this -> active = $active;
	}
}
?>