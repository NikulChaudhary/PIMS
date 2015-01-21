<?php

session_start();
include('../connect.php');
//echo $name2;
$fid=$_GET['name'];

$cat=$_GET['cat'];
$subcat=$_GET['cat3'];

echo "FID:$fid";
echo "CAT:$cat";
$tbl_name1="project_faculty_guide";

//For Minfo Table

$result1=mysql_query("DELETE FROM $tbl_name1 WHERE f_id='$fid'");
if($result1)
{
//echo $result1;
$_SESSION['noproid']=3;
header("location:phase3.php?cat=$cat&cat3=$subcat"); 

 
}
else
{$_SESSION['noproid']=4;
//header('location:phase3.php');  
}


?>