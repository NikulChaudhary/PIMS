<?php

session_start();
include('connect.php');
//echo $name2;
$fid=$_GET['name'];

echo $fid;

$tbl_name1="project_faculty_guide";

//For Minfo Table

$result1=mysql_query("DELETE FROM $tbl_name1 WHERE f_id='$fid'");
if($result1)
{echo $result1;
$_SESSION['noproid']=3;
header('location:editprofile3.php'); 

 
}
else
{$_SESSION['noproid']=4;
header('location:editprofile3.php');  
}


?>