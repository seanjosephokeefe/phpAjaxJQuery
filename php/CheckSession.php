<?php
session_start();
if (!((array_key_exists('uname', $_SESSION))&&(!empty($_SESSION['uname'])))) {
	header('Location: login.php');
}
?>