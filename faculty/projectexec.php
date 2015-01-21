<?php
include('../connect.php');
session_start();
//Function to sanitize values received from the form. Prevents SQL injection
function clean($str)
	{
		$str = @trim($str);
		if(get_magic_quotes_gpc())
			{
			$str = stripslashes($str);
			}
		return mysql_real_escape_string($str);
	}
//Sanitize the POST values
$id=$_SESSION['name'];
$year=$_POST['year'];
$branch=$_POST['branch'];
echo $year...;
echo $branch....;

$r = mysql_query("SELECT ref_id FROM student_project_information WHERE yearofproject=$year");
						while($row = mysql_fetch_array($r))
						{
							$refid=$row['ref_id'];
							$r1 = mysql_query("SELECT st_id FROM student WHERE st_id=$refid AND st_branch=$branch");
						while($row1 = mysql_fetch_array($r1))
						{
							$stid=$row['st_id'];
							$r2 = mysql_query("SELECT pro_id FROM student_project_information WHERE ref_id=$stid");
							
				
						}		
						
echo "updated";
header("location: ../admin/index.php");
?>