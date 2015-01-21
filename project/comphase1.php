<?php

session_start();
include("../connect.php");

$proid=$_SESSION['projectid'];
$id=$_SESSION['name'];

echo "phase1";
//$tbl1="project_group_details";
$s="SELECT phase1,phase2,phase3 FROM student_project_information WHERE ref_id='$id' AND pro_id='$proid'";
				//echo $sql11;
				$r=mysql_query($s);	
				
					while($row = mysql_fetch_array($r))
					{
					$p1=$row['phase1'];
					$p2=$row['phase2'];
					$p3=$row['phase3'];
					}	
	if($p1=="no")
	{
	$sql11="UPDATE student_project_information set phase1='yes'";
					$r=mysql_query($sql11);
					$_SESSION['phase']=1;
	header("location:phase1.php");
	}
	else
	{
	$_SESSION['phase']=0;
	header("location:phase1.php");
	
	}
		
		


?>