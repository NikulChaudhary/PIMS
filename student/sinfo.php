<?php

session_start();
include("../connect.php");

//$tbl1="project_group_details";
$enrollment=$_POST['st_enroll'];
$id=$_SESSION['name'];
echo $enrollment;
echo $id;


$sql11="SELECT st_id FROM student WHERE st_enroll='$enrollment'";
echo $sql11;
$res=mysql_query($sql11);	
if(mysql_num_rows($res) > 0) 
{
					while($row = mysql_fetch_array($res))
					{
					$parid=$row['st_id'];
					echo $parid;
					}

$qry="SELECT * FROM student_project_information WHERE ref_id='$id'";
echo $qry;
$result1=mysql_query($qry);
if($result1) 
{
		if(mysql_num_rows($result1) > 0) 
		{
		
				$member = mysql_fetch_assoc($result1);
				$proid = $member['pro_id'];
				echo $proid;
		
				$qry1="SELECT * FROM project_group_details WHERE st_id='$parid' AND pro_id='$proid'";
				$result=mysql_query($qry1);

					if(mysql_num_rows($result) > 0)
					{
						$_SESSION['st_grp']=5;
						echo "Yes Par";
						header("location:editprofile3.php");
					} 
					else
					{
					$sql11="INSERT INTO project_group_details (st_id,pro_id) VALUES ('$parid','$proid')";
					$r=mysql_query($sql11);
					$_SESSION['st_grp']=1;
					if($r)
						{
						echo "UPDATEEEEd";
						}
					
						
					echo "Updated";
					$_SESSION['name']=$id;

					header("location:editprofile3.php");
					echo $_SESSION['st_grp'];	
											

					}	
			
			}		
}
			
else
{
		$_SESSION['noproid']=2;
		echo "noproid";
		header("location:editprojectprofile.php");
}

//$_SESSION['name']=$id;
header("location:editprofile3.php");
					
					
}
else
	{	
	$_SESSION['st_grp']=2;//no student matched
	echo "no student";
	header("location:editprofile3.php");
	}
		
		


?>