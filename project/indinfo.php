<?php
session_start();
include('../connect.php');

$indid=$_GET['name1'];
$tbl="student_project_information";
$tbl1="project_guide_industryperson";

$id=$_SESSION['name'];
$proid=$_SESSION['projectid'];

			$qry1="SELECT * FROM $tbl1 WHERE pro_id='$proid' AND ie_ref_id='$indid'";
			$result=mysql_query($qry1);

					if(mysql_num_rows($result) > 0)
					{
						$_SESSION['industry']=5;
						echo "Yes faculty";
						header("location:phase3.php");
					} 
					else
					{


					$sql11="INSERT INTO $tbl1 (ie_ref_id,pro_id) VALUES ('$indid','$proid')";

					$r=mysql_query($sql11);
					if($r)
						{
						echo "UPDATEEEEd";
						}
					$_SESSION['industry']=1;
						
					echo "Updated";
					//$_SESSION['name']=$id;
					
					header("location:phase3.php");

											

					}	
			
			


?>