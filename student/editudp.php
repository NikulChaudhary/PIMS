	<?php
// for UDP
session_start();
	
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="pims"; // Database name
$tbl_name="student_project_information";

mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$type="UDP";
$title=$_POST['utitle'];
$def=$_POST['udef'];
$area=$_POST['uarea'];
$year=$_POST['uyear'];
$email=$_POST['uemail'];
$tool=$_POST['utool'];
$platform=$_POST['uplatform'];
$cname=$_POST['cname'];

			$word="";
			$j=0;
			$terms = explode(" ",$title);
		
			$a=array('the','how','in','which','is','a','this','of','my','on','here');
		
			foreach ($terms as $each)
			{
				foreach($a as $i)
				{
					if($each == $i)
					{
						$j=1;
					}
				}
				if($j == 0)
				{		
					$word .= $each;
					$word .= " ";				
				}
				$j=0;
			}
			$j=0;
			$k=0;
			$terms1= explode(" ",$def);
			foreach ($terms1 as $each)
			{
				foreach($a as $i)
				{
					if($each == $i)
					{
						$j=1;
					}
				}
				$t = explode(" ",$word);
				foreach($t as $i)
				{
					if($each == $i)
					{
						$k=1;				
					}
				}
				if($j == 0 && $k==0)
				{
				$word .= $each;
				$word .= " ";
				}		
				$j=0;
				$k=0;
			}

	/*
	echo "Type :".$type."<br />";
	echo "Defi :".$def."<br />";
	
	echo "Area :".$area."<br />";
	echo "Year ;".$year."<br />";
	echo "Email : ".$email."<br />";
	echo "City :".$city."<br />";
	*/
$name=$_SESSION['name'];
//echo "..........$name....";
$sql="select * from user where ref_id='$name'";
$result=mysql_query($sql);
while($row = mysql_fetch_array($result))
{
	$id = $row['ref_id'];		
}
//echo $id;
	
$sql="INSERT INTO $tbl_name (ref_id,pro_title,pro_def,pro_area,pro_keywords,pro_tools_used,pro_platform,yearofproject,pro_type,pro_company_name) VALUES ('$id','$title','$def','$area','$word','$tool','$platform','$year','$type','$cname')";	
	
	$res=mysql_query($sql);
	// echo "....inin...".$res."_____________".$sql;
	if($res)
	//	echo ".........success...";
		header("location:viewprofile.php");
	
?>