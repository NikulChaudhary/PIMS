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
$name1=$_POST['adm_name1'];
$name2=$_POST['adm_name2'];
$clg=$_POST['college'];
$dpt=$_POST['daprt'];
$qua=$_POST['qualification'];
$profession=$_POST['adm_designation'];
$mail=$_POST['adm_email'];
$con=$_POST['adm_contact'];


$sql=mysql_query("UPDATE faculty SET f_fname='$name1',f_lname='$name2',f_clgname='$clg',f_department='$dpt',f_qualification='$qua', f_designation='$profession', f_email='$mail', f_mo_no='$con' WHERE f_id='$id'");
$result=mysql_query($sql);

move_uploaded_file($_FILES["file"]["tmp_name"],"../images/" . "$name.jpg");

$_SESSION['update']=1;
echo "updated";
header("location: ../faculty/index.php");
?>