<?php
//InsertCustomer.php
include "DBConnect.php";
if (($message!="")||(empty($message))){
	include "CustomerClass.php"; 
	$customer=new Customer("", $_POST['first'], $_POST['last'], $_POST['active']);
	$insertSQL="INSERT INTO customers (first, last, active) VALUES "
		."('".$customer->first."','".$customer->last."','".$customer->active."');";
	$result=$conn->query($insertSQL);
	if ($conn->error){
		$message = "Query Error: $conn->error";
	}
	else{
		if ($result) {
			$customer->id = $conn->insert_id;
			echo json_encode($customer); 
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