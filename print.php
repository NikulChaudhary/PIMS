<?php
	include('connect.php');
	session_start();
	$q=$_SESSION['query'];
	$res=mysql_query($q);
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Projrct Management Portal</title>
<link rel="shortcut icon" href="images/favicon.ico"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS
  ================================================== -->
  	<link rel="stylesheet" type="text/css" href="css/skeleton.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/inner.css" />
    <link rel="stylesheet" type="text/css" href="css/layerslider.css" />
    <link rel="stylesheet" type="text/css" href="css/color.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/style2.css" />
	<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" />
	
	 <!-- Java Script
	================================================== -->
	<script src="js/jquery.js"></script>
	
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
    <script type="text/javascript" src="js/layerslider.kreaturamedia.jquery-min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>

	
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />


</head>

<body >
<div style="width:90% ;margin-left:60px;">
<div class="hero-unit">
               <font style="font-family: cursive; font-size: 24px;">Your Project Profile</font>
      </div>
	<?php
	 echo '<center>';
               
	
	
	echo '<table width="80%" border=1 cellspacing="1" cellpadding="1" class="table table-striped">';
							
	while($row = mysql_fetch_array($res))
						 {
							 echo '<tr><th>Project Group:</th>';
							 echo '<td><div align="left">'.$row['pro_id'].'</div></td></tr>';
							 echo '<tr><th>Project Type:</th>';
							 echo '<td><div align="left">'.$row['pro_type'].'</div></td></tr>';
							 echo '<tr><th>Project Title:</th>';
							 echo '<td><div align="left">'.$row['pro_title'].'</div></td></tr>';
							 echo '<tr><th>Project Definition:</th>';
							 echo '<td><div align="left">'.$row['pro_def'].'</div></td></tr>';
							 echo '<tr><th>Project Area:</th>';
							 echo '<td><div align="left">'.$row['pro_area'].'</div></td></tr>';
							 echo '<tr><th>Year of Project:</th>';
							 echo '<td><div align="left">'.$row['yearofproject'].'</div></td></tr>';
							 echo '<tr><th>Project Tools Used:</th>';
							 echo '<td><div align="left">'.$row['pro_tools_used'].'</div></td></tr>';
							 echo '<tr><th>Project Platform:</th>';
							 echo '<td><div align="left">'.$row['pro_platform'].'</div></td></tr>';
							
							
						 }
			 
		
      echo "</table>";
	echo "<input type=\"button\" style=\"margin-left:280px;font-family: cursive; font-size: 15px;\" onclick=\"window.print()\" value=\"Print PDF\"></input> ";
		echo "&nbsp;Works Only with Google CROME";
	
	echo "</body></html>";
?>