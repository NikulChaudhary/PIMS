<?php
include('../connect.php');
session_start();

$id=$_SESSION["name"];
$op=$_POST['oldpass'];
$op=md5($op);
$pass=$_POST['new1'];
$pass=md5($pass);



$result = mysql_query("SELECT * FROM user where ref_id='$id'");
while($row = mysql_fetch_array($result)) {
					$realpass= $row['password'];
					}
if($op==$realpass)
{
$date=date("d/m/Y");
date_default_timezone_set('Asia/Kolkata');
$time = date('h:i:s a', time())."  ".$date;

$sql=mysql_query("UPDATE user SET password='$pass'WHERE ref_id='$id'");
$result=mysql_query($sql);
$_SESSION['update']=2;
echo "updated";
header('location:index.php');
}
else
{
$_SESSION['update']=3;
echo "failed";
header('location:index.php');

}
?>