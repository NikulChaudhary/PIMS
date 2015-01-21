<?php
include('../connect.php');
session_start();
//Function to sanitize values received from the form. Prevents SQL injection
function clean($str)
	{
		$str = @trim($str);
		if(get_magic_quotes_gpc())
			{
			$str = stripslashes($str);
			}
		return mysql_real_escape_string($str);
	}
//Sanitize the POST values
$id=$_SESSION['name'];
$name=$_POST['adm_name'];
$profession=$_POST['adm_designation'];
$mail=$_POST['adm_email'];
$con=$_POST['adm_contact'];

move_uploaded_file($_FILES["file"]["tmp_name"],"../images/" . "$name.jpg");

$sql=mysql_query("UPDATE admin SET adm_name='$name', adm_designation='$profession', adm_email='$mail', adm_contact='$con',pic='$name.jpg' WHERE adm_id='$id'");
$result=mysql_query($sql);
$sql1=mysql_query("UPDATE user SET profession='$profession' WHERE ref_id='$id'");
$res=mysql_query($sql1);

$_SESSION['update']=1;
echo "updated";
header("location: ../admin/index.php");
?>