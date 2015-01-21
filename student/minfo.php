<?php
session_start();
include('../connect.php');
$id=$_SESSION['name'];
$fid=$_POST['subcat3'];
$clg=$_POST['cat'];
$branch=$_POST['subcat'];
$tbl="student_project_information";
$tbl1="project_faculty_guide";


$qry="SELECT * FROM $tbl WHERE ref_id='$id'";
//echo $qry;
$result1=mysql_query($qry);
if($result1) 
{
		if(mysql_num_rows($result1) > 0) 
		{
		
				$member = mysql_fetch_assoc($result1);
				$proid = $member['pro_id'];
				echo $proid;
		
			
		
			$qry1="SELECT * FROM $tbl1 WHERE pro_id='$proid' AND f_id='$fid'";
			$result=mysql_query($qry1);

					if(mysql_num_rows($result) > 0)
					{
						$_SESSION['noproid']=5;
						echo "Yes faculty";
						header("location:editprofile3.php");
					} 
					else
					{


					$sql11="INSERT INTO $tbl1 (f_id,pro_id) VALUES ('$fid','$proid')";

					$r=mysql_query($sql11);
					if($r)
						{
						echo "UPDATEEEEd";
						}
					$_SESSION['noproid']=1;
						
					echo "Updated";
					//$_SESSION['name']=$id;

					header("location:editprofile3.php");

											

					}	
			
			}		
}
			
else
{
		$_SESSION['noproid']=2;
		echo "noproid";
		header("location:editprojectprofile.php");
}


if($r)
{
echo "UPDATEEEEd";
}


?>