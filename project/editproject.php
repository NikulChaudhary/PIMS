<?php
session_start();
include('../connect.php');

$id=$_SESSION['name'];
$proid=$_SESSION['projectid'];


	$title=$_POST['title'];
	$def=$_POST['def'];
	$area=$_POST['area'];
	$tool=$_POST['tool'];
	$platform=$_POST['platform'];
	
$word="";
			$j=0;
			$terms = explode(" ",$title);
		
			$a=array('the','how','in','which','is','a','this','of','my','on','here',',');
		
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

$sql="UPDATE student_project_information SET pro_title='$title',pro_def='$def',pro_area='$area',pro_keywords='$word',pro_tools_used='$tool',pro_platform='$platform',phase2='yes' WHERE pro_id='$proid' ";
$res=mysql_query($sql);
if($res)
header("location:index.php");

?>