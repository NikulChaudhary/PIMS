<?php
session_start();
include('connect.php');

$username=$_POST['uname'];
$password=$_POST['pass'];
$password=md5($password);	
$sql="SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysql_query($sql)or trigger_error(mysql_error().$sql);

if(mysql_num_rows($result) < 1)
{								
//echo "<p><font color=/”red/” size=/”+1/″>You forgot to enter your password!</font></p>";
	$_SESSION['nologin']=1;
	unset($_SESSION['name']);
	
//echo $_SESSION['nologin'];
	header("location:login_common.php");
}
else
{
while($row = mysql_fetch_array($result))
		{
		$profession=$row['profession'];
		$id=$row['ref_id'];
		}
	echo "$profession";

if ($profession == "admin")
{
		//Create query
		$qry="SELECT * FROM admin WHERE adm_id='$id'";
		$result1=mysql_query($qry);
	
		if($result1) 
		{
		if(mysql_num_rows($result1) > 0) {
		session_regenerate_id();
				$member = mysql_fetch_assoc($result1);
				$_SESSION['name'] = $member['adm_id'];
				$_SESSION['fname'] = $member['adm_name'];
				session_write_close();
			echo "admin";
			header("location: admin/index.php");
			exit();
			}
		else {
				//Login failed
				$_SESSION['nologin']==1;
				header("location: login_common.php");
		
			exit();
			}
		}else {
			die("Query failed");
		}
}
if ($profession == "student")
{
		//Create query
		$qry="SELECT * FROM student WHERE st_id='$id'";
		$result1=mysql_query($qry);
	
		if($result1) 
		{
		if(mysql_num_rows($result1) > 0) {
			session_regenerate_id();
				$member = mysql_fetch_assoc($result1);
				$_SESSION['name'] = $member['st_id'];
				$_SESSION['fname'] = $member['st_fname'];
				session_write_close();
			header("location: student/index.php");
			exit();
			}
		else {
		
				//Login failed
			$_SESSION['nologin']==1;
			header("location: login_common.php");
		
			exit();
			}
	}else {
			die("Query failed");
		}
}
if ($profession == "faculty")
{
		//Create query
		$qry="SELECT * FROM faculty WHERE f_id='$id'";
		$result1=mysql_query($qry);
	
		if($result1) 
		{
		if(mysql_num_rows($result1) > 0) {
			
			session_regenerate_id();
				$member = mysql_fetch_assoc($result1);
				$_SESSION['name'] = $member['f_id'];
				$_SESSION['fname'] = $member['f_fname'];
				session_write_close();
			
			header("location: faculty/index.php");
			exit();
			}
		else {
				//Login failed
			$_SESSION['nologin']==1;
				header("location: login_common.php");
		
			exit();
			}
	}else {
			die("Query failed");
		}
}
if ($profession == "industry_eng_detail")
{
		//Create query
		$qry="SELECT * FROM industry_eng_detail WHERE ie_ref_id='$id'";
		$result1=mysql_query($qry);
	
		if($result1) 
		{
		if(mysql_num_rows($result1) > 0) {
			session_regenerate_id();
				$member = mysql_fetch_assoc($result1);
				$_SESSION['name'] = $member['ie_ref_id'];
				$_SESSION['fname'] = $member['ie_fname'];
				session_write_close();
			
			echo "bfdibifkb";
			header("location: industry_eng_detail/index.php");
			exit();
			}
		else {
				//Login failed
			$_SESSION['nologin']==1;
				header("location: login_common.php");
		
			exit();
			}
	}else {
			die("Query failed");
		}
}
}

	
?>

	