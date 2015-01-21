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
$tool=$_POST['utool'];
$platform=$_POST['uplatform'];
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


	/*
	echo "Type :".$type."<br />";
	echo "Defi :".$def."<br />";
	
	echo "Area :".$area."<br />";
	echo "Year ;".$year."<br />";
	echo "Email : ".$email."<br />";
	echo "City :".$city."<br />";
	*/
$id=$_SESSION['name'];
$proid=$_SESSION['projectid'];

$sql="UPDATE $tbl_name SET pro_title='$title',pro_def='$def',pro_area='$area',pro_keywords='$word',pro_tools_used='$tool',pro_platform='$platform',phase2='yes' ";
	
	$res=mysql_query($sql);
	// echo "....inin...".$res."_____________".$sql;
	if($res)
	{//	echo ".........success...";
		
		$s="SELECT phase1,phase2,phase3 FROM student_project_information WHERE ref_id='$id' AND pro_id='$proid'";
				//echo $sql11;
		$r=mysql_query($s);	
				
					while($row = mysql_fetch_array($r))
					{
					$p1=$row['phase1'];
					$p2=$row['phase2'];
					$p3=$row['phase3'];
					}	
					//header("location:registerteam.php?phase1=$p1&phase2=$p2&phase3=$p3");
	}	
else
{
$s="SELECT phase1,phase2,phase3 FROM student_project_information WHERE ref_id='$id' AND pro_id='$proid'";
				//echo $sql11;
		$r=mysql_query($s);	
				
					while($row = mysql_fetch_array($r))
					{
					$p1=$row['phase1'];
					$p2=$row['phase2'];
					$p3=$row['phase3'];
					}	
		
//header("location:registerteam.php?phase1=$p1&phase2=$p2&phase3=$p3");
}	
		
?>