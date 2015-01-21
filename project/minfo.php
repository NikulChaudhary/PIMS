<?php
session_start();
include('../connect.php');

$cat=$_GET['cat'];
$subcat=$_GET['cat3'];
echo "$cat";
echo "$subcat";
$fid=$_POST['subcat3'];
$clg=$_POST['cat'];
$branch=$_POST['subcat'];
$tbl="student_project_information";
$tbl1="project_faculty_guide";

$id=$_SESSION['name'];
$proid=$_SESSION['projectid'];

			$qry1="SELECT * FROM $tbl1 WHERE pro_id='$proid' AND f_id='$fid'";
			$result=mysql_query($qry1);

					if(mysql_num_rows($result) > 0)
					{
						$_SESSION['noproid']=5;
						echo "Yes faculty";
						header("location:phase3.php?cat=$cat&cat3=$subcat");
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
					
					header("location:phase3.php?cat=$cat&cat3=$subcat");

											

					}	
			
			


?>