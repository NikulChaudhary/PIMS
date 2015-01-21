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
	<meta name="GENERATOR" content="Arachnophilia 4.0">
<meta name="FORMATTER" content="Arachnophilia 4.0">
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
    
	<meta name="GENERATOR" content="Arachnophilia 4.0">
<meta name="FORMATTER" content="Arachnophilia 4.0">
<SCRIPT language=JavaScript>
function reload(f1)
{
var val=f1.cat.options[f1.cat.options.selectedIndex].value; 
if(val>0)
{
self.location='editprofile3.php?cat=' + val ;}
}
function reload3(f1)
{

var val=f1.cat.options[f1.cat.options.selectedIndex].value; 
var val2=f1.subcat.options[f1.subcat.options.selectedIndex].value; 
if(val>0)
{
self.location='editprofile3.php?cat=' + val + '&cat3=' + val2 ;}
}

</script>	
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

<?php 
if(isset($_GET['cat']))
{
$cat=$_GET['cat'];
if(isset($_GET['cat3']))
{
$subcat=$_GET['cat3'];}}?>

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
          <li><a href="../student/editprojectprofile.php">Enter Project Details</a></li>
        </ul>
      </li>
				  
			    </ul>
		  </div>
  
	</div>
    
    <!-- Navbar Starts Here -->
        <div class="bs-docs-example">
    	<div class="hero-unit">
        	 <fieldset>
    			<legend style="color:#06F; width:450px;">Enter Your Group Information</legend>
                   	<legend >Add Your Faculty Mentor </legend>
                      	<div id="view-table-mentor">
							
							<?php
			
						$id=$_SESSION['name'];
						$r = mysql_query("SELECT pro_id FROM student_project_information WHERE ref_id='$id'");
						while($row = mysql_fetch_array($r))
						{
							$proid=$row['pro_id'];
						}		
						
						$result = mysql_query("SELECT * FROM project_faculty_guide WHERE pro_id='$proid'");
				
						?>
							
							<table class="table table-hover">
								<thead>
                                	<tr>
                                    	
                  						<th>Name</th>
                  						<th>Designation</th>
                  						<th>Email</th>
                                        <th>Edit</th>
                					</tr>
              					</thead>
                                <tbody>
									<?php
										while($row = mysql_fetch_array($result))
										{
											$fid=$row['f_id'];
								
											$result1 = mysql_query("SELECT f_fname,f_designation,f_email FROM faculty WHERE f_id='$fid'");
											while($row=mysql_fetch_array($result1))
											{
									?>

					                <tr>
                  	                  <td><?php echo $row['f_fname']; ?></td>
					                  <td><?php echo $row['f_designation']; ?></td>
					                  <td><?php echo $row['f_email']; ?></td>
									  <td><a style="text-decoration:none;" href="editminfo.php?name=<?php echo $fid; ?>" onclick="return confirm('Are you sure? \nU want to Delete News \n&quot;<?php echo $row['f_fname']; ?>&quot;')">
                                      <i style="color:#F00;">Delete</i></a></td>
                					</tr>
								  <?php
									}
									}
				                  ?> 
									<tr><td>
									 <span id="facultyadd" style="visibility:hidden;"><font style="color:green;">&nbsp; &nbsp;Your Faculty Added Successfully </font></span>
									</td><td>	
									<span id="deletefaculty" style="visibility:hidden;"><font style="color:red;">&nbsp; &nbsp;Your Faculty Deleted Successfully </font></span>
									</td><td></td><td></td></tr>								  
								</tbody>
							</table> 
						</div>
<div name="d">
<form class="form-inline" method="post" action="minfo.php">
                            	<table style="margin-top:50px;" >
                                	<tr>
                       					<th>Add Guide &nbsp; &nbsp;</th>
                                      <td>				
										<select name="cat"  onchange="reload(this.form)">
										<option>-- College --</option>
												
										<?php
											$res = mysql_query("SELECT st_college FROM student WHERE st_id='$id'");
											$clg=mysql_result($res,0,'st_college');
											$result = mysql_query("SELECT DISTINCT * FROM college ORDER BY clg_id");
											
											while($row = mysql_fetch_array($result))
											
											{
												$clg1=$row['clg_name'];
												$id1=$row['clg_id'];
												if($id1==$cat){
												echo '<option selected value="'.$id1.'"> '.$clg1.' </option>';
												}
												
												else
												{
													echo '<option value="'.$id1.'"> '.$clg1.' </option>';
												
												}
											}
											?>
											</select>
										</td>
										
										
										<td>
										<select name="subcat" onchange="reload3(this.form)">
										<option>-- Department--</option>
										<?php
										$clg=$_GET['cat'];
										if(isset($clg) and strlen($clg) > 0){
										
										$result=mysql_query("SELECT DISTINCT branch_id FROM college_branch where clg_id=$clg order by branch_id"); 
										}
											while($row = mysql_fetch_array($result))
											
											{
												$br=$row['branch_id'];
												$r=mysql_query("SELECT DISTINCT branch_name FROM branch where branch_id=$br order by branch_id"); 
												if(mysql_num_rows($r) > 0) {
		
													$member = mysql_fetch_assoc($r);
													$br_name=$member['branch_name'];
													}
												if($br==$subcat){
												echo '<option selected value="'.$br.'"> '.$br_name.' </option>';
												}
												else
												{
												echo '<option value="'.$br.'"> '.$br_name.' </option>';
												}
											}
											?>
											</select>
										</td>
											
											
											<td>
										<select name="subcat3">
										<option>-- Faculty-- </option>
												
										<?php
										$br=$_GET['cat3'];
										$r=mysql_query("SELECT * FROM branch where branch_id='$br'"); 
										while($row = mysql_fetch_array($r))
										{	$brname=$row['branch_name'];}
										$r1=mysql_query("SELECT * FROM college where clg_id='$cat'"); 
										while($row = mysql_fetch_array($r1))
										{	$clgname=$row['clg_name'];}
										if(isset($br) and strlen($br) > 0){
										
										$result=mysql_query("SELECT DISTINCT f_id,f_fname,f_lname FROM faculty where f_department='$brname' AND f_clgname='$clgname' order by f_id"); 
										}
											
											while($row = mysql_fetch_array($result))
											
											{
												$fid=$row['f_id'];
												$ffname=$row['f_fname'];
												$flname=$row['f_lname'];
												
												echo '<option value="'.$fid.'"> '.$ffname.'&nbsp'.$flname.' </option>';
												
											}
											?>
											</select>
										</td>
											
											
											
											
									</tr>
                                 </table>
                                 <div style="margin-top:15px; margin-left:105px;">
            						<button class="btn btn-info" type="submit"> Add</button>
      								<button class="btn" type="reset" > Reset </button><span id="alrfaculty" style="visibility:hidden;">&nbsp;<font style="color:red;">&nbsp; &nbsp;Your Faculty Already Added<!-- Bech****D -----FUCK YOU ----- --></font></span>
            					 </div> 
								  </form>
                                 
</div>




<legend >Choose Your Project Partners </legend>

<div id="view-table-mentor">
							

							<table class="table table-hover">
								<thead>
                                	<tr>
                                    	
                  						<th>Name</th>
                  						<th>Enrollment</th>
                  						<th>Email</th>
                                        <th>Edit</th>
                					</tr>
              					</thead>
                                <tbody>
									<?php
									$result = mysql_query("SELECT * FROM project_group_details WHERE pro_id='$proid'");
				
										while($row = mysql_fetch_array($result))
										{
											$st_id=$row['st_id'];
								
											$result1 = mysql_query("SELECT st_fname,st_lname,st_enroll,st_email FROM student WHERE st_id='$st_id'");
											while($row=mysql_fetch_array($result1))
											{
									?>

					                <tr>
                  	                  <td><?php echo $row['st_fname']; ?> &nbsp; <?php echo $row['st_lname'];?></td>
					                  <td> <?php echo $row['st_enroll'];?></td>
					                  <td><?php echo $row['st_email']; ?></td>
									  <td><a style="text-decoration:none;" href="editsinfo.php?name1=<?php echo $st_id; ?>" onclick="return confirm('Are you sure? \nU want to Delete News \n&quot;<?php echo $row['st_fname']; ?>&quot;')">
                                      <i style="color:#F00;">Delete</i></a></td>
                					</tr>
								  <?php
									}
									}
				                  ?> 
									<tr><td>
									 <span id="studentadd" style="visibility:hidden;"><font style="color:green;">&nbsp; &nbsp;Your Project Partner Added Successfully </font></span>
									</td><td></td><td>	
									<span id="studentdelete" style="visibility:hidden;"><font style="color:red;">&nbsp; &nbsp;Your Project Partner Deleted Successfully </font></span>
									</td><td></td></tr>								  
								</tbody>
							</table> 
						</div>

<div class="table">    
  
                            	<form class="form-inline" method="post" action="sinfo.php">
                                	<table style="margin-top:50px;" >
                                	<tr>
                       					<td> Student Info &nbsp; &nbsp;</td>
                                        <td><input type="text" name="st_enroll" placeholder="Enter Enrollment Number Here" /></td>
                                    </tr>
                                 </table>
                                 <div style="margin-top:15px; margin-left:115px;">
            						<button class="btn btn-info" type="submit"> Add</button>
      								<button class="btn" type="reset" style="margin-left:30px;"> Reset </button>
									<a href="#myModal1" role="button" class="btn btn-info" data-toggle="modal" style="margin-right:20px;" data-target="#myModal1">Add Partner Info</a>
									<span id="alrstudent" style="visibility:hidden;">&nbsp;<font style="color:red;">&nbsp; &nbsp;Your Partner Already Added<!-- Bech****D -----FUCK YOU ----- --></font></span>
									
								</div> 
                                </form>
                        		                          
                       </div>
<span id="nostudent" style="visibility:hidden;">&nbsp;<font style="color:red;">&nbsp; &nbsp;No student Found Please click Add Partner Info Button</font></span>
<br/>
<span id="studentadded" style="visibility:hidden;">&nbsp;<font style="color:green;">&nbsp; &nbsp;Partner Information Added Now you can add him/her to your group</font></span>                         

</div>
									</div>
</div>

</div>

<div id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header" >
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		    <h3 id="myModalLabel">Add Partner Info</h3>
	  </div>
	  <div class="modal-body">
		    <form name="Add_Partner_Info" method="post" action="addpartnerinfo.php" onsubmit="return formValidation()">
			<table style="margin-top:20px;" >		
					<tr>
					<td>Enrollment No <font color="#FF0000"> * </font> &nbsp; </td>
					<td> <input type="text" id="enno" name="enno" placeholder="Enter Your Enrollment Name " />
	<!--				<span id="fn1" style="visibility:hidden;">Must Contain Atleast 6 character <span>
					<span id="id1" style="visibility:hidden;"></span><br /></td>-->
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
					<td> Email Id <font color="#FF0000"> * </font> &nbsp; </td>
					<td><input class="span3" type="email" required="required" class="input-block-level" name="email" placeholder="Enter Your Email id Here" style="width:205px;"  /><span id="e1></span>"<br /></td>
				</tr>

				</div>
					
											
		</table>
		
            
            
            
	  </div>
	  <div class="modal-footer">
	    
	    <button class="btn btn-info" type="submit"> Submit </button>
        <button class="btn btn-info" type="reset"> Reset </button>
	  </div>
	  </form> 
	</div>
  
</body>
</html>
	
<?php

if(isset($_SESSION['noproid']))
{
if($_SESSION['noproid']==1)
{
echo "<script>document.getElementById(\"facultyadd\").style.visibility=\"\";;</script>";
}

if($_SESSION['noproid']==3)
{
echo "<script>document.getElementById(\"deletefaculty\").style.visibility=\"\";;</script>";
}
if($_SESSION['noproid']==5)
{
echo "<script>document.getElementById(\"alrfaculty\").style.visibility=\"\";;</script>";
}

}
if(isset($_SESSION['st_grp']))
{
if($_SESSION['st_grp']==1)
{
echo "<script>document.getElementById(\"studentadd\").style.visibility=\"\";;</script>";
}
if($_SESSION['st_grp']==2)
{
echo "<script>document.getElementById(\"nostudent\").style.visibility=\"\";;</script>";
}
if($_SESSION['st_grp']==3)
{
echo "<script>document.getElementById(\"studentdelete\").style.visibility=\"\";;</script>";
}
if($_SESSION['st_grp']==5)
{
echo "<script>document.getElementById(\"alrstudent\").style.visibility=\"\";;</script>";
}
if($_SESSION['st_grp']==6)
{
echo "<script>document.getElementById(\"studentadded\").style.visibility=\"\";;</script>";
}

}

$_SESSION['st_grp']=0;
$_SESSION['noproid']=0;
?>
