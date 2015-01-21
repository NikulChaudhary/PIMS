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
          <li><a href="../student/editprojectprofile.php">Edit Project Details</a></li>
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
        	<form method="post" action="editpro2.php">
            	<?php
					include('../connect.php');
					$id=$_SESSION['name'];
					$result = mysql_query("SELECT * FROM student_project_information WHERE ref_id='$id'");
					while($row = mysql_fetch_array($result))
						{
							$proid=$row['pro_id'];
							$protype=$row['pro_type'];
							$protitle=$row['pro_title'];
							$prodef=$row['pro_def'];
							$proarea=$row['pro_area'];
							$y=$row['yearofproject'];
							$protools=$row['pro_tools_used'];
							$proplt=$row['pro_platform'];
						
							}
							
						?>
			
				<table cellpadding="1" cellspacing="1" class="table table-hover">
						
						<tr>
                            	<td> Project ID<font color="#FF0000"> &nbsp;   </font>  </td>
                                <td><input type="text" name="title" value="<?php echo $proid;?>" placeholder="Enter Project ID Here" /></td>
                            </tr>
							<tr>
                            	<td> Project Title<font color="#FF0000"> &nbsp;   </font>  </td>
                                <td><input type="text" name="title" value="<?php echo $protitle;?>" placeholder="Enter Project Title Here" /></td>
                            </tr>
							<tr>
                				<td> Project Type<font color="#FF0000"> &nbsp;  </font>  </td>
                                <td><input type="text" name="type" cols="10" value="<?php echo $protype;?>" placeholder="Write Project Definition Here"></textarea>           
							</tr>
                            <tr>
                				<td> Brief Description <font color="#FF0000"> &nbsp;   </font>  </td>
                                <td><input type="text" name="def" name="idef" cols="10" value="<?php echo $prodef;?>" placeholder="Write Project Definition Here"></textarea>           
							</tr>
                            
                            <tr>
                            	<td> Area Of Project <font color="#FF0000"> &nbsp; </font>  </td>
                                <td><input type="text" name="iarea" value="<?php echo $proarea;?>" placeholder="Enter Field Here" /></td>
                            </tr>
							<tr>
                            	<td> Tools Used <font color="#FF0000"> &nbsp;   </font>  </td>
                                <td><input type="text" name="utool" value="<?php echo $protools;?>" placeholder="Enter Tool Here" /></td>
                            </tr>
							 <tr>
                            	<td> Platform used <font color="#FF0000"> &nbsp;   </font>  </td>
                                <td><input type="text" name="uplatform" value="<?php echo $proplt;?>" placeholder="Enter Plateform Here" /></td>
                            </tr>
			                <tr>
			                <tr>
                            	<td> Year Of Project <font color="#FF0000"> &nbsp;   </font> </td>
                                <td> <input type="text" name="iyear" value="<?php echo $y;?>" placeholder="Year" /></td>                        
                            </tr>
                            					
							<tr>
								<td></td><td></td>
							</tr>
					
						</table>
                        <div>
            					<button class="btn btn-primary" type="submit" style="margin-left:135px;width:130px;"> Save </button>
            			</div>
                        </form>
				
           <a href="viewprojectprofile.php"><button class="btn btn-info" style="margin-left:135px;width:130px;" > Cancle </button></a>
      
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
	
