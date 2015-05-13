<?php
//InsertProduct.php
include "DBConnect.php";
if (($message!="")||(empty($message))){
	include "ProductClass.php";
	$product=new Product("", $_POST['name'], $_POST['price'], $_POST['active']);
	$insertSQL="INSERT INTO products (name, price, active) VALUES "
		."('".$product->name."','".$product->price."','".$product->active."');";
	$result=$conn->query($insertSQL);
	if ($conn->error){
		$message = "Query Error: $conn->error";
	}
	else{
		if ($result) {
			$product->id = $conn->insert_id;
			echo json_encode($product); 
		}else{
			$message="That record could not be inserted.";
		}
	}	
}
include "DBClose.php";
if (!empty($message)){ 
	echo $message;
}
?>