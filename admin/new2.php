<?php

session_start();

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="pims"; // Database name
$tbl_name="news";

mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$post_title=$_POST['ptitle'];
@$post_detail=$_POST['pdetail'];

$sql1="INSERT INTO $tbl_name(post_title,post_detail) VALUES ('$post_title','$post_detail')";
$result=mysql_query($sql1);

header("location:news.php");
?>