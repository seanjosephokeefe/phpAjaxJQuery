<?php
//SelectCustomers.php
include "DBConnect.php";
if (($message!="")||(empty($message))){
	require "CustomerClass.php";
	$where="";
	if (isset($_POST['id']))
		$where=" WHERE id='".$_POST['id']."'";
	$customers = Array();
	$selectSQL="SELECT SQL_NO_CACHE * FROM customers".$where.";";
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
					array_push($customers, new Customer($row["id"], $row["first"], $row["last"],  $row["active"]));
				}
				echo json_encode($customers);
			}
		}		
	}
}
include "DBClose.php";
if (!empty($message)){ 
	echo $message;
}
?>