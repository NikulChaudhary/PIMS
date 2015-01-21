<?php

include('connect.php');
session_start();

$=$_POST['ptitle'];
$=$_POST['pdetail'];

$sql1="INSERT INTO $tbl_name(post_title,post_detail) VALUES ('$post_title','$post_detail')";
$result=mysql_query($sql1);

header("location:news.php");
?>