<?php
//UpdateProduct.php
include "DBConnect.php";
if (($message!="")||(empty($message))){
	require "ProductClass.php";
	$product=new Product($_POST['id'], $_POST['name'], $_POST['price'], $_POST['active']);	
	$updateSQL="UPDATE products SET name='".$product->name."', price='".$product->price."', active='".$product->active."'"
		." WHERE id='".$product->id."';";
	$result=$conn->query($updateSQL);
	if ($conn->error){
		$message = "Query Error: $conn->error";
	}
	else{
		if ($result) {
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