<?php

session_start();
include 'connect.php';

$clg=$_POST['clg'];
$enno=$_POST['enno'];
$branch=$_POST['branch'];
$year=$_POST['yr'];
$dis=$_POST['discipline'];


$r= mysql_query("SELECT * FROM student WHERE st_enroll='$enno'");
if(mysql_num_rows($r)>0)
{											
				while($row = mysql_fetch_array($r))
				{
				$stid=$row['st_id'];
				$fname=$row['st_fname'];
				}



if($dis=='yes')
{
$dis1=1;
}
else if($dis=='no')
{
$dis1=0;
}
	$result = mysql_query("SELECT clg_id FROM college WHERE clg_name='$clg'");
											
											while($row = mysql_fetch_array($result))
											
											{
												
												$clgid=$row['clg_id'];
										}
$proid="";
echo "COLLEGE:$clgid";
$year1=substr($year,-2,2);
echo "Year:$year1";
if($clgid<10)
{
$clgid="00"."$clgid";
}
else if($clgid>=10)
{
$clgid="0"."$clgid";
}
if($branch<10)
{
$branch="0"."$branch";
}
else if($branch>=10)
{
$branch=$branch;
}


function randString($length) {
    $char = "0123456789";
    $char = str_shuffle($char);
    for($i = 0, $rand = '', $l = strlen($char) - 1; $i < $length; $i ++) {
        $rand .= $char{mt_rand(0, $l)};
    }
    return $rand;
}
$r=randString(5);
//echo "Random:$r";

$proid="$year1"."$clgid"."$branch"."$dis1"."$r";
//echo "POOOOOOOID:$proid";

$sql1="INSERT INTO student_project_information(pro_id,ref_id,disciplinary,yearofproject,phase1,phase2,phase3) VALUES ('$proid','$stid','$dis','$year','no','no','no')";
$result=mysql_query($sql1);

$s="INSERT INTO project_group_details(pro_id,st_id) VALUES ('$proid','$stid')";
$re=mysql_query($s);

$_SESSION['projectid']=$proid;
$_SESSION['name']=$stid;

$_SESSION['fname']=$fname;
echo "here";
header("location:project/phase1.php");
}
else
{
$_SESSION['error']=1;

header("location:registerproject.php");

}
?>