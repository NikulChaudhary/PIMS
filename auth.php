<?php
	//Start session
	session_start();
	
	//Check whether the session variable name is present or not
	if(!isset($_SESSION['name']) || (trim($_SESSION['name']) == '')) {
		header("location: ../index.php");
		exit();
	}
?>