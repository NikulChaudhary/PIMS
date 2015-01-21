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
//Sanitize the POST 
$id=$_GET['id'];
$pr_id=$_SESSION['name'];
$title=$_POST['title'];
$desc=$_POST['desc'];
$disc=$_POST['branch'];
$area=$_POST['area'];
$tool=$_POST['tools'];
$plat=$_POST['platform'];
$status=$_POST['status'];

echo $id;
echo $title;
echo $desc;
echo $disc;
echo $area;
echo $status;


$sql=mysql_query("UPDATE pro_requirement SET pro_title='$title',pro_desc='$desc',pro_discipline='$disc',pro_area='$area',pro_tools='$tool', pro_platform='$plat', pro_status='$status' WHERE prreq_id='$id' and id='$pr_id'");
$result=mysql_query($sql);



$_SESSION['update']=1;
echo "updated";
header("location: ../faculty/viewdetail.php?done=2&id=$id");

?>