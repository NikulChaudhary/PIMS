<?php
session_start();
 include('../connect.php');
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
		   <li><a href="../student/viewprojectprofile.php">View Project Details</a></li>
          <li><a href="../student/editprojectprofile.php">Eneter Project Details</a></li>
        </ul>
      </li>
				  
			    </ul>
		  </div>
  
	</div>
    
    <!-- Navbar Starts Here -->
      <div class="bs-docs-example">
	    <div class="hero-unit">
    	    <fieldset>
    			<legend style="color:#06F; width:450px;">Edit Your Profile</legend>
        		
			<div class="table">
        	<form method="post" action="editpro1.php">
            	<?php
					include('../connect.php');
					$id=$_SESSION['name'];
					$result = mysql_query("SELECT * FROM student WHERE st_id='$id'");
					while($row = mysql_fetch_array($result))
						{
							$stfname=$row['st_fname'];
							$stlname=$row['st_lname'];
							$dob=$row['st_dob'];
							$email=$row['st_email'];
							$enno=$row['st_enroll'];
							$addr=$row['st_addr'];
							$cnno=$row['st_mo_no'];
							$clg=$row['st_college'];
							$br=$row['st_branch'];
							}
							
						?>
			
				<table cellpadding="1" cellspacing="1" class="table table-hover">
				<tr>	
					<th> Name   </th>
					<td> <input type="text" name="st_fname"  value="<?php echo $stfname;?>" placeholder="Enter Your First name" /></td>
					<td> <input type="text" name="st_lname"  value="<?php echo $stlname;?>" placeholder="Enter Your Last name" /></td>
					
				</tr>
				
				<tr>	
					<th> Enrollment No   </th>
					<td> <input type="text" name="enno"  value="<?php echo $enno;?>" placeholder="Enter Enrollment no" /></td>
                    
				</tr>
				<tr>	
					<th> Email   </th>
					<td> <input type="text" name="st_email"  value="<?php echo $email;?>" placeholder="Enter Email" /></td>
                    
				</tr>
				<tr>	
					<th> Date Of Birth   </th>
					<td> <input type="text" name="st_dob"  value="<?php echo $dob;?>" placeholder="Enter Email" /></td>
                    
				</tr>
                <tr>	
					<th> Branch   </th>
					<td>
					<select name="branch">
									 
                        	<option> SELECT </option>
							<?php
						$result = mysql_query("SELECT * FROM branch ORDER BY branch_id");
						
						while($row = mysql_fetch_array($result))
						
						{
							$branch=$row['branch_name'];
							if($branch==$br)
							{
                            echo '<option value="'.$branch.'" selected="selected"> '.$branch.' </option>';
							}
							else
							{echo '<option value="'.$branch.'"> '.$branch.' </option>';
							
								}
						}
						?>
                        </select>
                    </td>                    
				</tr>
                
                
                
                <tr>	
					<th> College   </th>
					<td>
					<select name="cname">
					
							<option> SELECT </option>
							<?php
						$result = mysql_query("SELECT * FROM college ORDER BY clg_id");
						
						while($row = mysql_fetch_array($result))
						
						{
							$clg_name=$row['clg_name'];
							if($clg_name==$clg)
							{
                            echo '<option value="'.$clg_name.'" selected="selected"> '.$clg_name.' </option>';
							}
							else
							{
								echo '<option value="'.$clg_name.'" > '.$clg_name.' </option>';
							
							}
						}
						?>
                        </select>
                    </td>                    
				</tr>
                
                <tr>	
					<th> Address   </th>
                    <td><input type="text" name="city" value="<?php echo $addr;?>"  placeholder="Enter Your Address" />
                    	
                        
                   </td>
				</tr>
                
                <tr>
                	<th> Contact No   </th>
                    <td> <input type="text" name="cno" value="<?php echo $cnno;?>" placeholder="Enter Mobile Number"</td>
                </tr>
                
                <tr>
                	<td></td><td></td>
                </tr>
                </fieldset>
   			</table>
            
            	<button class="btn btn-primary" type="submit" style="margin-left:135px;width:130px;"> Save </button>
			
            </form>
           <a href="viewprofile.php"><button class="btn btn-info" style="margin-left:135px;width:130px;" > Cancle </button></a>
      
           </div>
           
  	
	</div>   
    <!-- Profile Editing  Ends Here -->
		
        
		
		</div>
	
	
	<!-- Navbar Ends Here -->
<div   >
				
				<p class="pull-left" style="padding-left:30px;">&copy; 2013 Copyrights, Inc. </p>
				<p class="pull-right" style="padding-right:30px;">PIMS</p>		
			</div>
</div>

 

</body>
</html>
	
