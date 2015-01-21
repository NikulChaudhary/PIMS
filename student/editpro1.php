<?php
include('../connect.php');
session_start();

$name=$_SESSION['name'];
$sql="SELECT * FROM user WHERE ref_id='$name'";
$result=mysql_query($sql);
while($row = mysql_fetch_array($result))
{
$id = $row['ref_id'];		
}

$enroll_no=$_POST['enno'];
$branch=$_POST['branch'];
$clg_name=$_POST['cname'];
$city=$_POST['city'];
$contact_no=$_POST['cno'];
$stfname=$_POST['st_fname'];
$stlname=$_POST['st_lname'];
$dob=$_POST['st_dob'];
$email=$_POST['st_email'];

$sql1="SELECT * FROM $tbl_name WHERE st_id='$id'";
$result1=mysql_query($sql1);

while($row = mysql_fetch_array($result1))
{
$id1 = $row['st_id'];		
}

if($id==$id1)
{
	$sql="UPDATE $tbl_name SET st_enroll='$enroll_no',st_branch='$branch',st_college='$clg_name',st_addr='$city',st_mo_no='$contact_no',st_fname='$stfname',st_lname='$stlname',st_email='$email',st_dob='$dob' where st_id='$id'"; 
	$result=mysql_query($sql);
	$_SESSION['update']=1;
	echo 'updated';
}

//$_SESSION['name']=$id1;
header("location:viewprofile.php");

?>