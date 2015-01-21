<?php
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Welcome To Projrct Management Portal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<!-- Bootstrap -->
    
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../css/bootstrap-responsive.css" rel="stylesheet">    
	<script src="../js/jquery.js"></script>
    <script>
		$(document).ready(function()
		{
			//alert($(window).width());
			var x=(($(window).width())-1024)/2;
			//alert(x);
			$('.wrap').css("left",x+"px");
		});

	</script>
	
	<script src="../js/bootstrap.min.js"></script>
    
	
<style>

	body
	{
		background-image:url(../images/1.png);
		background-repeat:repeat;
	}
	.modal-body
	{
		background-image:url(../images/.jpg);
		background-repeat:repeat;
	}
		
.head
{
	font-family:"Copperplate Gothic Bold";
	color:#333;
	text-decoration:none;
	
}
.wrap{
	position:absolute;
	width:1024px;
	background-color:#FFFFFF;
	padding:0 10px;
	
	-o-box-shadow: 10px 10px 5px #888;
	-moz-box-shadow: 10px 10px 5px #888;
	-webkit-box-shadow: 10px 10px 5px #888;
	box-shadow: 0px 0px 25px #666;

}
	
</style>    
    

</head>

<body >
	<div class="wrap">
	<!-- Navigation Bar -->
    
	<div class="navbar navbar-inverse navbar-fixed-top">
    	<div class="navbar-inner">
        	<div class="container">
            	<a class="brand" href="index.php"> Project Management </a>
                <div class="nav-collapse collapse">
                	<ul class="nav">
                    	<li class="active">
                        	<a href="index.php"> Home </a></li>
                         <li><a href="about.php"> About </a></li>
                         <li><a href="contact.php"> Contact </a></li>
                      </ul>
                      
                      	
						
						<?php
						if(isset($_SESSION['name']))
						{
						?>
							<div style="float:right; margin-top: 2px;color: #ffffff;font-size: 17px;margin-right:6px;">
						<?php	echo "Welcome &nbsp;<a href=\"viewprofile.php\">".$_SESSION['name']; ?>  </a>
						
						<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"../logout.php\" class=\"btn btn-info\">Logout</a>";
						}
						else
						{
						?>	
						<div style="float:right; margin-right:-17px;">
						<a href="#myModal" role="button" class="btn btn-info" data-toggle="modal" style="margin-right:20px;" data-target="#myModal">Sign In</a>
                       <a href="#myModal1" role="button" class="btn btn-info" data-toggle="modal" style="margin-right:20px;" data-target="#myModal1">Sign Up</a>
                       <? } ?>
					   </div>
                 </div>	          
    		</div>
         </div>
    </div>
    <!-- End Of Navigation Bar -->

    <!-- Sign In -->
	
    
    <div style="margin-top:50px;background-color:#FFFFFF;">
    	<a href="index.php"><img src="../images/gtu.png" style="height:120px; width:100px; padding:20px;" /></a>
        	
            	<a class="head" href="index.php" style="text-decoration:none; font-size:24px; margin-left:20px;">Project Information Management System</a> 
            
    </div>
    
    <!-- Navbar Starts Here -->
    <div class="navbar">
  		<div class="navbar-inner">
		    <a class="brand">Your Profile Information</a> </div>
			 
			 
			 </br>
			 </br>
			 <table cellpadding="1" cellspacing="1" class="table table-hover">
				<tr>
				
				<th style="border-left: 1px solid #C1DAD7">ID</td>
				<th>Username</th>
				<th>Password</th>
				<th>Name</th>
				<th>Profession</th>
				<th>Contect</th>
				<th>Email</th>
				<!--<th>Action</th>  -->
				</tr>
				
			 <?php
			 include('../connect.php');
			 $uname=$_SESSION['name'];
			 
			
			$result = mysql_query("SELECT * FROM admin WHERE adm_username='$uname'");
			
					while($row = mysql_fetch_array($result))
						 {
							 echo '<tr>';
							 echo '<td><div align="border-left">'.$row['adm_id'].'</div></td>';
							 echo '<td><div align="left">'.$row['adm_username'].'</div></td>';
							 echo '<td><div align="left">'.$row['adm_password'].'</div></td>';
							 echo '<td><div align="left">'.$row['adm_name'].'</div></td>';
							 echo '<td><div align="left">'.$row['adm_designation'].'</div></td>';
							 echo '<td><div align="left">'.$row['adm_contact'].'</div></td>';
							 echo '<td><div align="left">'.$row['adm_email'].'</div></td>';
							//echo '<td><div align="center"><a href="editadminprofile.php?id='.$row['adm_id'].'" title="Click To View Orders">Go</a></div></td>';
							 echo '</tr>';
						 }
			 ?> 
		</table>
          
		
		</div>
	
	
	<!-- Navbar Ends Here -->

</div>
</body>
</html>