<?php
session_start();
include('connect.php');

$proid=$_POST['proid'];//130070704Hfi0
$enno=$_POST['enno'];
echo "$enno";
$st= mysql_query("SELECT * FROM student WHERE st_enroll=$enno");
while($row = mysql_fetch_array($st))
{
				$stid=$row['st_id'];
				$fname=$row['st_fname'];
}		
$r= mysql_query("SELECT * FROM project_group_details WHERE st_id='$stid' AND pro_id='$proid'" );
								
				
if(mysql_num_rows($r) >= 1)
{								

$sql="SELECT * FROM student_project_information WHERE pro_id='$proid'";
$result = mysql_query($sql)or trigger_error(mysql_error().$sql);

if(mysql_num_rows($result) < 1)
{								
//echo "<p><font color=/”/red” size=/”+1/″>You forgot to enter your password!</font></p>";
	 
	echo "fail inner";
	unset($_SESSION['projectid']);
	
	unset($_SESSION['fname']);
	unset($_SESSION['name']);
	session_destroy();
	$_SESSION['error'] = 1;
	header("location:login_project.php");
}
else
{
echo "matched";
while($row = mysql_fetch_array($result))
		{
		$proid=$row['pro_id'];
		$stid=$row['ref_id'];
		$p1=$row['phase1'];
		$p2=$row['phase2'];
		$p3=$row['phase3'];
		}
		
	
session_regenerate_id();
				$_SESSION['projectid'] = $proid;
				$_SESSION['name'] = $stid;
				$_SESSION['fname'] = $fname;
				session_write_close();
		
if($p1=="no" || $p2=="no" || $p3=="no")
{
echo "register needee";
header("location: project/phase1.php");
		
}
else
{
echo "project success no register";
header("location: project/index.php");
			exit();
}

}

}
else
{
echo "fail";
unset($_SESSION['projectid']);
	
	$_SESSION['error'] = 1;
	unset($_SESSION['fname']);
	unset($_SESSION['name']);
	//session_destroy();
	header("location:login_project.php");
}
	
?>

	