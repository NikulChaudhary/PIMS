<?php

session_start();
include("../connect.php");

$proid=$_SESSION['projectid'];
$id=$_SESSION['name'];

	$sql11="UPDATE student_project_information set phase1='no',phase2='no',phase3='no' WHERE pro_id='$proid'";
					$r=mysql_query($sql11);
					$_SESSION['phase']=0;
	header("location:phase1.php");

?>