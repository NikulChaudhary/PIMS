<?php
// for IDP
session_start();


$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="pims"; // Database name
$tbl_name="pro_requirement";

mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");


	$def=$_POST['def'];
	$title=$_POST['title'];
	$area=$_POST['area'];
	$branch=$_POST['branch'];
	$time=$_POST['time'];
	
	$status=$_POST['status'];
	$tool=$_POST['tool'];
	$platform=$_POST['platform'];
	
			$word="";
			$j=0;
			$terms = explode(" ",$title);
		
			$a=array('over','and','&','the','how','in','which','is','a','this','of','my','on','here');
		
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
					@$k=0;
			}
		
	echo "Defi :".$def."<br />";
	echo "title :".$title."<br />";
	echo "Area :".$area."<br />";
	echo "time ;".$time."<br />";
	echo "tool : ".$tool."<br />";
	echo "plat : ".$platform."<br />";
	echo "branch :".$branch."<br />";
	echo "keyword :".$word."<br />";
	echo "status :".$status."<br />";

$name=$_SESSION['name'];
$sql="select ref_id from user where ref_id='$name'";
$result=mysql_query($sql);
while($row = mysql_fetch_array($result))
{
	$id = $row['ref_id'];		
}

	$sql="INSERT INTO $tbl_name (id,pro_title,pro_desc,pro_discipline,pro_area,pro_keyword,pro_tools,pro_platform,pro_expected_time,pro_status) VALUES ('$id','$title','$def','$branch','$area','$word','$tool','$platform','$time','$status')";	
	$res=mysql_query($sql);
	 echo "....inin...".$res."_____________".$sql;
	if($res)
		echo ".........success...";
	header("location:index.php");

	
?>