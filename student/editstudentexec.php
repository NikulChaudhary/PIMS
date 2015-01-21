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
							$name1=$_POST['st_name1'];
							$name2=$_POST['st_name2'];
							$gender=$_POST['gender'];
							$enroll_no=$_POST['st_enroll'];
							$mail=$_POST['email'];
							$clg=$_POST['college'];
							$branch=$_POST['branch'];
							$dob=$_POST['dob'];
							$con=$_POST['contact'];
							$addr=$_POST['addr'];
							//$pic=$_POST['pic'];
echo $id;
echo $name1;
echo $name2;
echo $gender;
echo $enroll_no;
echo $dob;
							

$sql=mysql_query("UPDATE student SET st_fname='$name1',st_lname='$name2',st_college='$clg',st_branch='$branch',st_enroll='$enroll_no', st_gender='$gender', st_email='$mail', st_mo_no='$con',st_addr='$addr',st_dob='$dob',pic='$enroll_no.jpg' WHERE st_id='$id'");
$result=mysql_query($sql);
if($result)
{
echo "updated";
}
move_uploaded_file($_FILES["file"]["tmp_name"],"../images/profilepic/" . "$enroll_no.jpg");

$_SESSION['update']=1;

header("location: ../student/index.php");
?>