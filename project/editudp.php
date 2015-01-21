	<?php
// for UDP
session_start();
	
include('../connect.php');

$type="UDP";
echo "$type"; 
$title=$_POST['utitle'];
$def=$_POST['udef'];
$area=$_POST['uarea'];
$tool=$_POST['utools'];
$platform=$_POST['uplatform'];
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


	echo "Type :".$type."<br />";
	echo "Defi :".$def."<br />";
	
	echo "Area :".$area."<br />";
	echo "WORD:$word";
$id=$_SESSION['name'];
$proid=$_SESSION['projectid'];

$sql="UPDATE student_project_information SET pro_title='$title',pro_def='$def',pro_area='$area',pro_keywords='$word',pro_tools_used='$tool',pro_platform='$platform',phase2='yes',pro_type='$type' WHERE pro_id='$proid'";
	
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