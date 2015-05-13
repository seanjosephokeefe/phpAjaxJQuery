<?php
//SelectProducts.php
include "DBConnect.php";
if (($message!="")||(empty($message))){
	require "ProductClass.php";
	$where="";
	if (isset($_POST['id']))
		$where=" WHERE id='".$_POST['id']."'";
	$products = Array();
	$selectSQL="SELECT SQL_NO_CACHE * FROM products".$where.";";
	$results=$conn->query($selectSQL);
	if ($conn->error){
		$message = $conn->error;
	}
	else{
		if($results){
			if($results->num_rows === 0)
				$message="No results returned.";
			else{
				while($row = mysqli_fetch_assoc($results)) {
					array_push($products, new Product($row["id"], $row["name"], $row["price"],  $row["active"]));
				}
				echo json_encode($products);
			}
		}		
	}
}
include "DBClose.php";
if (!empty($message)){ 
	echo $message;
}
?>