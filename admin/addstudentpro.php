<?php

include '../connect.php';
session_start();

$enroll=$_POST['enno'];
$branch=$_POST['branch'];
$clg_name=$_POST['cname'];
$city=$_POST['city'];
$contact_no=$_POST['cno'];
$fname=$_POST['st_fname'];
$lname=$_POST['st_lname'];
$dob=$_POST['st_dob'];
$mail=$_POST['st_email'];
$uname=$mail;
$profession="student";

$name=$_SESSION['name'];
$sql="SELECT * FROM student WHERE st_enroll=$enroll";
$result=mysql_query($sql);
if(mysql_num_rows($result)<=0)
{

$sid=uniqid("st",false);
function rand_password($length=8,$chars='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890')
{
	return substr(str_shuffle($chars),0,$length);	
}
$pass=rand_password();
$pass1=md5($pass);

$sql="SELECT * FROM user WHERE username='$uname'";
$result=mysql_query($sql);
//$row=mysql_fetch_array($result)

if (mysql_num_rows($result) >= 1)
{
	echo "username already exist.";
	$_SESSION["stadd"]=1;
	header("location:addstudent.php");
	
			
}
else 
{
		$sql1="INSERT INTO user (ref_id,username,password,profession,realpassword) VALUES ('$sid','$uname','$pass1','$profession','$pass')";
		$re=mysql_query($sql1);
		if($re)
		{
		
		echo "Entered into user";
		$sql="INSERT INTO student (st_id,st_fname,st_lname,st_email,st_enroll,st_branch,st_college,st_addr,st_mo_no) VALUES ('$sid','$fname','$lname','$mail','$enroll','$branch','$clg_name','$city','$contact_no')";
		$res=mysql_query($sql);
		
		if($res)
		{
		echo "student";
		$_SESSION['stadd']=2;
		$_SESSION['uname']=$uname;
		$_SESSION['pass']=$pass;
		
		echo "SUCC";
		header("location:addstudent.php?en=$enroll");
		}
		
		}	
}		
}
else
{
$_SESSION["stadd"]=3;
echo "Fail";
header("location:addstudent.php");


}
?>

