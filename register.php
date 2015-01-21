<?php 
session_start();

include('connect.php');
$uname=$_POST['uid'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$enroll=$_POST['enno'];
$profession=$_POST['profession'];
$pass1=$_POST['pass1'];
$pass=md5($pass1);
$mail=$_POST['email'];
$sex=$_POST['gender'];
$designation=$_POST['designation'];
//$dob=$_POST['dob'];
$tbl_name="user";

$sql="SELECT * FROM $tbl_name WHERE username='$uname'";
$result=mysql_query($sql);
//$row=mysql_fetch_array($result)

if (mysql_num_rows($result) >= 1)
{
	$_SESSION['user']=0;
	header('location:registeruser.php');

	echo "username already exist.";
}
else 
{
	if($profession == "student")
	{
		$en=mysql_query("SELECT * from student WHERE st_enroll='$enroll'");
		if (mysql_num_rows($en) >= 1)
		{
			echo "alrady";
			$_SESSION['user']=1;
			header('location:registeruser.php');

		
		}
		else
		{
		$id=uniqid("st",false);
		$sql1="INSERT INTO $tbl_name (ref_id,username,password,profession,realpassword) VALUES ('$id','$uname','$pass','$profession','$pass1')";
		$re=mysql_query($sql1);
		
		$college_no=substr($enroll,2,3);
		$dept_no=substr($enroll,7,2);//100070107042
		
		$entry=mysql_query("SELECT branch_name from branch WHERE branch_id='$dept_no'");
		$dept_name=mysql_result($entry,0,'branch_name');
		$en=mysql_query("SELECT clg_name from college WHERE clg_id='$college_no'");
		$clg_name=mysql_result($en,0,'clg_name');
		
		$sql="INSERT INTO student (st_id,st_fname,st_lname,st_email,st_enroll,st_college,st_branch,st_gender) VALUES ('$id','$fname','$lname','$mail','$enroll','$clg_name','$dept_name','$sex')";
		
		$res=mysql_query($sql);
		
		if($res)
		{
		$_SESSION['name']=$id;
		$_SESSION['fname']=$fname;

		header('location:student/index.php');

		echo "student";
		}
		else
			echo 'no';
		}
	}
	else if($profession == "faculty")
	{
		$id=uniqid("fc",false);
		
		$sql1="INSERT INTO $tbl_name (ref_id,username,password,profession,realpassword) VALUES ('$id','$uname','$pass','$profession','$pass1')";
		
		$re=mysql_query($sql1);
		$tbl_name="faculty";
		$sql="INSERT INTO $tbl_name(f_id,f_fname,f_lname,f_email,f_gender,f_designation) VALUES ('$id','$fname','$lname','$mail','$sex','$designation')";
		$result=mysql_query($sql);
		
		$_SESSION['name']=$id;
		$_SESSION['fname']=$fname;

		header('location:faculty/index.php');

	} 
	else if($profession == "industry_eng_detail")
	{
		$id=uniqid("ie",false);
		
		$sql1="INSERT INTO $tbl_name (ref_id,username,password,profession,realpassword) VALUES ('$id','$uname','$pass','$profession','$pass1')";
		$re=mysql_query($sql1);
		$tbl_name="industry_eng_detail";
		$sql="INSERT INTO $tbl_name(ie_ref_id,ie_fname,ie_lname,ie_email,ie_gender) VALUES ('$id','$fname','$lname','$mail','$sex')";
		$result=mysql_query($sql);
		
		$_SESSION['name']=$id;
		$_SESSION['fname']=$fname;

		header('location:industry_eng_detail/index.php');

	} 
	
	echo "success......".$uname."....".$pass; 
}

//$_SESSION['name']=$id;
//$_SESSION['fname']=$fname;

//setcookie("Username", $fname, time()+3600);
//setcookie("Name", $name, time()+3600);
//header('location:registeruser.php');
?>