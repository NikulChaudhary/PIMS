<?php 
session_start();
include("../connect.php");



$uname=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$profession="student";
$mail=$_POST['email'];
$enroll=$_POST['enno'];

$sid=uniqid("st",false);
function rand_password($length=8,$chars='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890')
{
	return substr(str_shuffle($chars),0,$length);	
}
$pass=rand_password();
$pass1=md5($pass);

echo "'.$pass.'<br/>";
echo $uname;
echo "'.$sid.'<br/>";


$sql="SELECT * FROM user WHERE username='$uname'";
$result=mysql_query($sql);
//$row=mysql_fetch_array($result)

if (mysql_num_rows($result) >= 1)
{
	echo "username already exist.";
}
else 
{
		$sql1="INSERT INTO user (ref_id,username,password,profession,realpassword) VALUES ('$sid','$uname','$pass1','$profession','$pass')";
		$re=mysql_query($sql1);
		if($re)
		{
		
		echo "Entered into user";
		$sql="INSERT INTO student (st_id,st_fname,st_lname,st_email,st_enroll) VALUES ('$sid','$fname','$lname','$mail','$enroll')";
		$res=mysql_query($sql);
		
		if($res)
		{
		echo "student";
	/*	echo 
  "<script type=\"text/javascript\">".
  "window.alert('Your Partner Details: USERNAME='$uname' AND <br/>PASSWORD='$pass'');".
  "</script>"; */
		$_SESSION["st_grp"]=6;
		$_SESSION["emailto"]=$mail;
		$_SESSION["mailpass"]=$pass;
		
		header("location:../smtpmail/smtpgmail.php");
		}
		
		}	
}		
?>