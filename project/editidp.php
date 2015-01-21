<?php
// for IDP
session_start();
include("../connect.php");


$tbl_name="student_project_information";

	$type="IDP";
	$def=$_POST['idef'];
	$title=$_POST['ititle'];
	$area=$_POST['iarea'];
	//$year=$_POST['iyear'];
	$cname=$_POST['indname'];
	$email=$_POST['indemail'];
	$caddr=$_POST['indaddr'];
	$tool=$_POST['itools'];
	$platform=$_POST['iplatform'];
	//$city=$_POST['icity'];
	
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
					@$k=0;
			}
			
			$j=0;
			$k=0;
			$terms1= explode(" ",$tool);
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
			
			$j=0;
			$k=0;
			$terms1= explode(" ",$platform);
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

		
	echo "Defi :".$def."<br />";
	//echo "Field :".$field."<br />";
	echo "Area :".$area."<br />";
	echo "Year ;".$year."<br />";
	echo "Name : ".$cname."<br />";
	echo "Email : ".$email."<br />";
	echo "Addr :".$caddr."<br />";
//	echo "City :".$city."<br />";
	
$name=$_SESSION['name'];
$proid=$_SESSION['projectid'];

$sql="select ref_id from user where ref_id='$name'";
$result=mysql_query($sql);
while($row = mysql_fetch_array($result))
{
	$id = $row['ref_id'];		
}
$sql="UPDATE student_project_information SET pro_title='$title',pro_def='$def',pro_area='$area',pro_keywords='$word',pro_tools_used='$tool',pro_platform='$platform',phase2='yes',pro_type='$type',pro_company_name='$cname',pro_company_addr='$caddr',pro_company_email='$email' WHERE pro_id='$proid'";
	
$res=mysql_query($sql);
	// echo "....inin...".$res."_____________".$sql;
	if($res)
	{echo ".........success...";
		
		$_SESSION['phase']=2;
		header("location:phase2.php");
	}	
else
{
echo "fail";
		$r=mysql_query($s);	
		$_SESSION['phase']=0;
header("location:phase2.php");
}	


	
?>