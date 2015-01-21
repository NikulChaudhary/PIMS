<?php

session_start();
include('../connect.php');
//echo $name2;
$fid=$_GET['name'];
$sid=$_GET['name1'];
echo $fid;
echo $sid;
$tbl_name1="project_faculty_guide";
$tbl_name2="project_group_details";
//For Minfo Table

$result1=mysql_query("DELETE FROM $tbl_name1 WHERE f_id='$fid'");
if($result1)
{echo $result1;
$_SESSION['noproid']=3;
header('location:editprofile3.php'); 
$result1=mysql_query("SELECT * FROM $tbl_name2 WHERE f_id='$name'");
$row=mysql_fetch_array($result1);
 
}
else
{$_SESSION['noproid']=4;
header('location:editprofile3.php');  
}

//For SINFO table
$result=mysql_query("DELETE FROM $tbl_name2 WHERE st_id='$sid'");
if($result)
{
echo $result;
$_SESSION['st_grp']=3;
header('location:editprofile3.php');  
$result1=mysql_query("SELECT * FROM $tbl_name2 WHERE st_id='$name1'");
$row=mysql_fetch_array($result1);

}
else
{$_SESSION['st_grp']=4;
header('location:editprofile3.php');  
}


?>