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
$name1=$_POST['ie_name1'];
$name2=$_POST['ie_name2'];
$gender=$_POST['ie_gender'];
$dob=$_POST['ie_dob'];
$cpnname=$_POST['cpnname'];
$cpnemail=$_POST['cpnemail'];
$cpnaddr=$_POST['cpnaddr'];
$qua=$_POST['ie_qua'];
$doj=$_POST['ie_doj'];
$aoe=$_POST['ie_aoe'];
$exp=$_POST['ie_exp'];
$designation=$_POST['ie_designation'];
$email=$_POST['ie_email'];
$mo_no=$_POST['ie_mo_no'];
$pic_name=$id;
move_uploaded_file($_FILES["file"]["tmp_name"],"../images/" . "$pic_name.jpg");

$sql=mysql_query("UPDATE industry_eng_detail SET ie_fname='$name1',ie_lname='$name2',ie_gender='$gender',ie_dob='$dob',company_name='$cpnname',company_email='$cpnemail',company_addr='$cpnaddr',ie_qualification='$qua',ie_DOJoin='$doj',ie_area_of_expert='$aoe', ie_experience='$exp',ie_designation='$designation', ie_email='$email', ie_mo_no='$mo_no',pic='$pic_name.jpg' WHERE ie_ref_id='$id'");
$result=mysql_query($sql);
//$sql1=mysql_query("UPDATE user SET profession='$profession' WHERE ref_id='$id'");
//$res=mysql_query($sql1);

$_SESSION['update']=1;

header("location: ../industry_eng_detail/index.php");
?>