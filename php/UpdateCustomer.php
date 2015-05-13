<?php
//UpdateCustomer.php
include "DBConnect.php";
if (($message!="")||(empty($message))){
	require "CustomerClass.php";
	$customer=new Customer($_POST['id'], $_POST['first'], $_POST['last'], $_POST['active']);	
	$updateSQL="UPDATE customers SET first='".$customer->first."', last='".$customer->last."', active='".$customer->active."'"
		." WHERE id='".$customer->id."';";
	$result=$conn->query($updateSQL);
	if ($conn->error){
		$message = "Query Error: $conn->error";
	}
	else{
		if ($result) {
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