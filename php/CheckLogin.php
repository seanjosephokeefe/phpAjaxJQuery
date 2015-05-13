<?php
//CheckLogin.php
include "DBConnect.php";
if (($message!="")||(empty($message))){
	$selectSQL="SELECT SQL_NO_CACHE * FROM users WHERE uname='".$_POST['uname']."' AND password='".$_POST['pword']."';";
	$results=$conn->query($selectSQL);
	if ($conn->error){
		$message = $conn->error;
	}else{
		if($results){
			if($results->num_rows === 0) {
				$message="No results returned.";
				$userMessage="login not found.";
			}
			else{
				session_start();
				$_SESSION['uname']=$_POST['uname'];
				header( 'Location: index.php' );
			}
		}				
	}
}
include "DBClose.php";
?>