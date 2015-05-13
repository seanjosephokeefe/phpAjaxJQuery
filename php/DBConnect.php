<?php
//DBConnect.php

require "Config.php";

$conn = mysqli_connect($dbHost,$dbUser,$dbPassWord,$dataBase);

// Check connection
$message = $conn->connect_error;
?>