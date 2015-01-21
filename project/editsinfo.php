<?php

session_start();
include('../connect.php');
//echo $name2;

$sid=$_GET['name1'];

echo $sid;

$tbl_name2="project_group_details";

//For SINFO table
$result=mysql_query("DELETE FROM $tbl_name2 WHERE st_id='$sid'");
if($result)
{
echo $result;
$_SESSION['st_grp']=3;
header('location:phase1.php');  


}
else
{$_SESSION['st_grp']=4;
header('location:phase1.php');  
}


?>