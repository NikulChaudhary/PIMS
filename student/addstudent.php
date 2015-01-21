<?php
session_start();
 include('../connect.php');

 $id=$_SESSION['name'];
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
            	<a class="brand" href="index.php"> STUDENT </a>
                <div class="nav-collapse collapse">
                	
                      	
						
						<?php
						if(isset($_SESSION['name']))
						{
						?>
							<div style="float:right; margin-top: 2px;color: #ffffff;font-size: 17px;margin-right:6px;">
						<?php	echo "Welcome &nbsp;<a href=\"viewprofile.php\">".$_SESSION['fname']; ?>  </a>
						
						<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"../logout.php\" class=\"btn btn-info\">Logout</a>";
						}
						else
						{
						?>	
						<div style="float:right; margin-right:-17px;">
						<a href="#myModal" role="button" class="btn btn-info" data-toggle="modal" style="margin-right:20px;" data-target="#myModal">Sign In</a>
                       <a href="#myModal1" role="button" class="btn btn-info" data-toggle="modal" style="margin-right:20px;" data-target="#myModal1">Sign Up</a>
                       <?php } ?>
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
    <div class="navbar">
  		<div class="navbar-inner">
		    
			    <ul class="nav">
               
					<li><a href="../student/index.php">Student's Home</a></li>
			      <li><a href="../student/viewprofile.php">Profile</a></li>
			 <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Project Details <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="../student/editprofile3.php">Group Details</a></li>
          <li><a href="../student/viewprojectprofile.php">Edit Project Details</a></li>
        </ul>
      </li>
				  
			    </ul>
		  </div>
  
	</div>
    <!-- Navbar Starts Here -->
    <div class="bs-docs-example">
	    <div class="hero-unit">
    	    <fieldset>
    			<legend style="color:#06F; width:450px;">Your Project Profile</legend>
        		
<div class="modal-header" >
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		    <h3 id="myModalLabel">Register Here</h3>
	  </div>
	  <div class="modal-body">
		    <form name="registration" method="post" action="register.php" onsubmit="return formValidation()">
			<table style="margin-top:20px;" >		
				<tr>	
					<td > User Name <font color="#FF0000"> * </font>  </td>
					<span id="c" style="visibility:hidden;"><span>
					<td> <input type="text" name="uid" placeholder="User Name" onblur="return name1()" />
					<span id="u1"><span>
					<br /></td>
				</tr>
				<tr>
					<td> First Name <font color="#FF0000"> * </font> &nbsp; </td>
					<td> <input type="text" id="fn" name="fname" placeholder="Enter Your First Name " />
	<!--				<span id="fn1" style="visibility:hidden;">Must Contain Atleast 6 character <span>
					<span id="id1" style="visibility:hidden;"></span><br /></td>-->
				</tr>
				<tr>
					<td> Last Name <font color="#FF0000"> * </font> &nbsp; </td>
					<td><input type="text" name="lname" id="ln" placeholder="Enter Your Last Name"  />
<!--					<span id="ln1" style="visibility:hidden;">Must Contain Atleast 6 character <span><br /></td>-->
				</tr>
				<tr>
					<td> Profession <font color="#FF0000"> * </font> &nbsp; </td>
					<td>
                    	<select name="profession">
                        <option> Select </option>
                        <option value="student"> Student </option>
                        <option value="industry_eng_detail"> Industry </option>
                        <option value="faculty"> Faculty </option>
                     	</select>
                    </td>
					 
             	</tr>
				
				<tr>
					<td> Password  <font color="#FF0000"> * </font> &nbsp; </td>
					<td><input type="password" name="pass1" class="password_test"  /> 
					<span id="p1">&nbsp; &nbsp; Must contain character and digits</span> <br /></td>
				</tr>
				<tr>
					<td> Confritm Password <font color="#FF0000"> * </font> &nbsp; </td>
					<td><input type="password" name="pass2"  /><span id="p2"></span><br /></td>
				</tr>
				<tr>
					<td> Email Id <font color="#FF0000"> * </font> &nbsp; </td>
					<td><input class="span3" type="email" required="required" class="input-block-level" name="email" placeholder="Enter Your Email id Here" style="width:205px;"  /><span id="e1></span>"<br /></td>
				</tr>

				<tr>
					<td style="border-top:0px;"> Date of Birth <font color=red>* </font></td>
					<td style="border-top:0px;"><input type="date" class="input-medium"  name="dob"></td>
					<span id="d"></span>
				</tr>
				

				<tr>
					<td> Gender <font color="#FF0000"> * </font> &nbsp; </td>
					<td>
					<select style="width:90px;" name="gnd">
						<option> Male </option>
						<option> Female </option>
					</select>
				</tr>
				<tr>
				<tr />
				
				
				</div>
					
											
		</table>
		
            
            
            
	  </div>
	  <div class="modal-footer">
	    
	    <button class="btn btn-info" type="submit"> Submit </button>
        <button class="btn btn-info" type="reset"> Reset </button>
	  </div>
	  </form> 
	</div>
  div   >
				
				<p class="pull-left" style="padding-left:30px;">&copy; 2013 Copyrights, Inc. </p>
				<p class="pull-right" style="padding-right:30px;">PIMS</p>		
			</div>
</div>
 

</body>
</html>
<?php

if(isset($_SESSION['update']))
{
if($_SESSION['update']==1)
{
echo "<script>document.getElementById(\"update\").style.visibility=\"\";;</script>";
}

}
$_SESSION['update']=0;
?>