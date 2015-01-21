<?php

session_start();
include('../connect.php');
//echo $name2;
$indid=$_GET['name2'];

$tbl_name1="project_guide_industryperson";

//For INDinfo Table

$result1=mysql_query("DELETE FROM $tbl_name1 WHERE ie_ref_id='$indid'");
if($result1)
{
//echo $result1;
$_SESSION['industry']=3;
header("location:phase3.php"); 

 
}
else
{$_SESSION['industry']=4;
//header('location:phase3.php');  
}


?>