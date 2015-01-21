<?php
include('../connect.php');

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
$uname=$_POST['adm_username'];
$name=$_POST['adm_name'];
$profession=$_POST['adm_designation'];
$pass=$_POST['adm_password'];
$mail=$_POST['adm_email'];
$con=$_POST['adm_contact'];
$id=0;
$q1=mysql_query("SELECT adm_id FROM admin ORDER BY adm_id desc  LIMIT 0 , 1");
while($row = mysql_fetch_array($q1))
  {
	  $id=$row['adm_id'];
	}
$id++;
//echo $id;
mysql_query("INSERT INTO admin(adm_id,adm_name,adm_contact,adm_email,adm_designation) VALUES ('$id','$name','$con','$mail','$profession')");
mysql_query("INSERT INTO user(ref_id,username,password,profession) VALUES ('$id','$uname','$pass','admin')");
header("location: ../admin/alladmin.php");
?>