<?php
include '../connect.php';
session_start();
if(!isset($_SESSION['projectid']) || (trim($_SESSION['projectid']) == '')) {
		header("location: index.php");
		exit();
	}

$proid=$_SESSION['projectid'];
$id=$_SESSION['name'];

$s="SELECT phase1,phase2,phase3 FROM student_project_information WHERE pro_id='$proid'";
$r=mysql_query($s);	
				
			if(mysql_num_rows($r)>0)
			{  
			while($row = mysql_fetch_array($r))
					{
					$p1=$row['phase1'];
					$p2=$row['phase2'];
					$p3=$row['phase3'];
					}	
					
					//echo "p1:$p1";
					//echo "p2:$p2";
					//echo "p3:$p3";
					}
				
				
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Project Management Portal</title>
<link rel="shortcut icon" href="../images/favicon.ico"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS
  ================================================== -->
  	
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
	<link rel="stylesheet" type="text/css" href="../css/inner.css" />
    <link rel="stylesheet" type="text/css" href="../css/layerslider.css" />
    <link rel="stylesheet" type="text/css" href="../css/color.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="../css/style2.css" />
	<link rel="stylesheet" type="text/css" href="../css/prettyPhoto.css" />
	
	 <!-- Java Script
	================================================== -->
	<script src="../js/jquery.js"></script>
	
	<script src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/man.js"></script>
    <script type="text/javascript" src="../js/layerslider.kreaturamedia.jquery-min.js"></script>
	<script type="text/javascript" src="../js/jquery.prettyPhoto.js"></script>
<SCRIPT language=JavaScript>
function reload(f1)
{
var val=f1.cat.options[f1.cat.options.selectedIndex].value; 
if(val>0)
{
self.location='phase3.php?cat=' + val ;}
}
function reload3(f1)
{

var val=f1.cat.options[f1.cat.options.selectedIndex].value; 
var val2=f1.subcat.options[f1.subcat.options.selectedIndex].value; 
if(val>0)
{
self.location='phase3.php?cat=' + val + '&cat3=' + val2 ;}
}

</script>	

	
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="../css/skeleton.css" />
</head>

<body >
<?php 
if(isset($_GET['cat']))
{
$cat=$_GET['cat'];
if(isset($_GET['cat3']))
{
$subcat=$_GET['cat3'];}}?>

<div id="bodychild">
	<div id="outercontainer">
    
        <!-- HEADER -->
        <div id="outerheader">
					
        	
            <header id="top">
            	<div class="main">
					
                    <div id="logo" class="six columns alpha"><a href="../index.php"><img src="../images/logon.png" height="120px" width="610px" alt=""></a></div>
                    <div id="headerright" class="six columns omega">
                            <ul id="sn">
								<?php
						if(isset($_SESSION['name']))
						{
							
						?>
							<div style="float:right; margin-top: 2px;color: #ffffff;font-size: 17px;margin-right:6px;">
						<?php	echo "<div style=\"float:left; margin-top: 50px;\"><font size=\"5\" color=\"black\">Welcome &nbsp;".$_SESSION['projectid']; ?> </font></div>
						
						<?php echo "&nbsp;<a href=\"../logout.php\"><span class=\"icon-img\" style=\"background:url(../images/logout.png)\"></span></a>";
						}
						else
						{
						header("location: ../login_project.php");

                         } ?>
						</ul> 
                     
                    </div>
                    <div class="clear"></div>
                </div>
                
                <section id="navigation">
                    <div class="main container">
                        <nav id="nav-wrap">
                            <ul id="topnav" class="sf-menu">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="members.php">Members</a>
                                    
                                </li>
								
								<li><a href="projectactivity.php">Project Activity</a>
                                
                                </li>
								
                                <li><a>Registration Phases</a>
                                    <ul>
                                       <li><a href="phase1.php">Add Project Partners</a></li>
                                        <li><a href="phase2.php">Add Project Information</a></li>
										 <li><a href="phase3.php">Add Guides</a></li>
                                    </ul>
                                </li>
								
                            </ul><!-- topnav -->
                        </nav><!-- nav -->	
                        <div class="clear"></div>
                      </div>
                </section>
                <div class="clear"></div>
            </header>
  -      </div>
        <!-- END HEADER -->
		

<!-- MAIN CONTENT -->
<div id="outermain">
        	  
        	<div class="main bg-white">
            <div class="shadow"></div>
        	<div class="container1">
			
            
		<div class="row-fluid">
        <div class="span3">
			<div class="subtextbox" style="background-color: #178CAF;">
			Project Registration</div>
          <div class="well sidebar-nav">
             <ul class="nav nav-list">
			<li ><a href="phase1.php" >Add Project Partner</a></li>
			<li ><a href="phase2.php" >Add Project Information</a></li>
            <li class='active'><a href="phase3.php" >Add Guides</a></li>
             
			 </ul>
				

		
          </div><!--/.well -->
        </div><!--/span-->
        
		
		<div class="span9">
		
          <div class="hero-unit">
		  <font style="font-family: cursive; font-size: 24px;"><?php if($p3=="no"){?>Add<?php }?> Your Faculty Mentor</font>
        		
		</div>
		                  	<div id="view-table-mentor">
							
							<?php
			
						$result = mysql_query("SELECT * FROM project_faculty_guide WHERE pro_id='$proid'");
				
						?>
							
							<table class="table table-hover">
								<thead>
                                	<tr>
                                    	
                  						<th>Name</th>
                  						<th>Designation</th>
                  						<th>Email</th>
                                       <?php if($p3=="no"){?>  <th>Edit</th> <?php } ?>
                					</tr>
              					</thead>
                                <tbody>
									<?php
										while($row = mysql_fetch_array($result))
										{
											$fid=$row['f_id'];
								
											$result1 = mysql_query("SELECT f_fname,f_lname,f_designation,f_email FROM faculty WHERE f_id='$fid'");
											while($row=mysql_fetch_array($result1))
											{
									?>

					                <tr>
                  	                  <td><?php echo "".$row['f_fname']." ".$row['f_lname']; ?></td>
					                  <td><?php echo $row['f_designation']; ?></td>
					                  <td><?php echo $row['f_email']; ?></td>
									   <?php if($p3=="no"){?> <td><a style="text-decoration:none;" href="editminfo.php?name=<?php  echo "$fid"; ?>&cat=<?php echo "$cat";?>&cat3=<?php echo "$subcat";?>" onclick="return confirm('Are you sure? \nU want to Delete \n&quot;<?php echo $row['f_fname']." ".$row['f_lname']; ?>&quot;')">
                                      <i style="color:#F00;">Delete</i></a></td> <?php } ?>
                					</tr>
								  <?php
									}
									}
									if(isset($_SESSION['noproid']))
									{if($_SESSION['noproid']==1 || $_SESSION['noproid']==3)
									{
				                  ?> 
									<tr><td>
									 <span id="facultyadd" style="visibility:hidden;"><font style="color:green;font-family: cursive; font-size: 15px;">&nbsp; &nbsp;Your Faculty Added Successfully </font></span>
									</td><td>	
									<span id="deletefaculty" style="visibility:hidden;"><font style="color:red;font-family: cursive; font-size: 15px;">&nbsp; &nbsp;Your Faculty Deleted Successfully </font></span>
									</td><td></td><td></td></tr><?php } } ?>								  
								</tbody>
							</table> 
						</div>
 <?php if($p3=="no"){?> 						
<div name="d">
<form class="form-inline" method="post" action="minfo.php?cat=<?php echo "$cat";?>&cat3=<?php echo "$subcat";?>">
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
<?php } ?>
<?php 
						
						$mm = mysql_query("SELECT pro_type FROM student_project_information WHERE pro_id='$proid'");
						while($row = mysql_fetch_array($mm))
						{
							$protype=$row['pro_type'];
						}		
						
						if($protype=="IDP")
						{
						?>
						
						
						<div class="hero-unit">
		  <font style="font-family: cursive; font-size: 24px;"><?php if($p3=="no"){?>Add<?php }?> Your Industry Representative </font>
        		
		</div>
		                  	<div id="view-table-mentor">
							
							<?php
			
						$result = mysql_query("SELECT * FROM project_guide_industryperson WHERE pro_id='$proid'");
				
						?>
							
							<table class="table table-hover">
								<thead>
                                	<tr>
                                    	
                  						<th>Name</th>
                  						<th>Designation</th>
										<th>Company Name</th>
                  						<th>Email</th>
                                       <?php if($p3=="no"){?>  <th>Edit</th> <?php } ?>
                					</tr>
              					</thead>
                                <tbody>
									<?php
										while($row = mysql_fetch_array($result))
										{
											$ie_id=$row['ie_ref_id'];
								
											$mm1 = mysql_query("SELECT ie_fname,ie_lname,ie_designation,ie_email,company_name FROM industry_eng_detail WHERE ie_ref_id='$ie_id'");
											while($row=mysql_fetch_array($mm1))
											{
									?>

					                <tr>
                  	                  <td><?php echo "".$row['ie_fname']." ".$row['ie_lname']; ?></td>
					                  <td><?php echo $row['ie_designation']; ?></td>
					                  <td><?php echo $row['company_name']; ?></td>
									  <td><?php echo $row['ie_email']; ?></td>
									   <?php if($p3=="no"){?> <td><a style="text-decoration:none;" href="editindinfo.php?name2=<?php  echo "".$ie_id; ?>" onclick="return confirm('Are you sure? \nU want to Delete \n&quot;<?php echo $row['ie_fname']." ".$row['ie_lname']; ?>&quot;')">
                                      <i style="color:#F00;">Delete</i></a></td> <?php } ?>
                					</tr>
								  <?php
									}
									}
									if(isset($_SESSION['industry']))
									{if($_SESSION['industry']==1 || $_SESSION['industry']==3)
									{
				                  ?> 
									<tr><td>
									 <span id="industryadd" style="visibility:hidden;"><font style="color:green;font-family: cursive; font-size: 15px;">&nbsp; &nbsp;Your Industry Person Added Successfully </font></span>
									</td><td>	
									<span id="deleteindustry" style="visibility:hidden;"><font style="color:red;font-family: cursive; font-size: 15px;">&nbsp; &nbsp;Your Industry Person Deleted Successfully </font></span>
									</td><td></td><td></td></tr><?php } } ?>								  
								</tbody>
							</table> 
						</div>
						
<?php
 
if($p3=="no")
{ ?>

  
                            	<form class="form-inline" method="post" action="phase3.php">
                                	<table>
                                	<tr>
                       					<td> SEARCH : &nbsp; &nbsp;</td>
                                        <td><input type="text" name="ie_fname" placeholder="Enter Industry Person First Name" /></td>
										<td><input type="text" name="ie_lname" placeholder="Enter Industry Person Last Name" /></td>
                                    <td><button class="btn btn-info" type="Submit">Search</button></td>
									</tr>
									
                                 </table>
								 </form>
								 
								 <div id="view-table-mentor">
							
							<?php
					if(isset($_POST['ie_fname']) || isset($_POST['ie_lname']))
					{
						$fname=$_POST['ie_fname'];
						$lname=$_POST['ie_lname'];
						
						$new = mysql_query("SELECT * FROM industry_eng_detail WHERE ie_fname='$fname' OR ie_lname='$lname'");
				
						?>
							
							<table class="table table-hover">
								<thead>
                                	<tr>
                                    	
                  						<th>Name</th>
                  						<th>Designation</th>
										<th>Company Name</th>
                  						<th>Email</th>
                                        <th>Action</th>
                					</tr>
              					</thead>
                                <tbody>
									<?php
										while($row = mysql_fetch_array($new))
										{
											
									?>

					                <tr>
                  	                  <td><?php echo "".$row['ie_fname']." ".$row['ie_lname']; ?></td>
					                  <td><?php echo $row['ie_designation']; ?></td>
					                  <td><?php echo $row['company_name']; ?></td>
									  <td><?php echo $row['ie_email']; ?></td>
									  <td><a style="text-decoration:none;" href="indinfo.php?name1=<?php  echo "".$row['ie_ref_id']; ?>" onclick="return confirm('Are you sure? \nU want to ADD \n&quot;<?php echo $row['ie_fname']." ".$row['ie_lname']; ?>&quot;')">
                                      <i style="color:green;">ADD</i></a></td> <?php } ?>
                					</tr>
								  <?php
									}
									
									?>							  
								</tbody>
							</table> 
						</div>
								 
								 
								 
                                 <div style="margin-top:15px; margin-left:115px;">
							<a href="#myModal1" role="button" class="btn btn-info" data-toggle="modal" style="margin-left:50px;" data-target="#myModal1">Add Industry Person Info</a>
									
									<span id="alrindustry" style="visibility:hidden;">&nbsp;<font style="color:red;font-family: cursive; font-size: 15px;">&nbsp; &nbsp;Your Industry Person Already Added<!-- Bech****D -----FUCK YOU ----- --></font></span>
									
								</div> 
                                </form>
								
								
								<form class="form-inline" method="post" action="comphase3.php">
              	<font style="font-family: cursive; font-size: 18px;">Click Submit Faculty Mentors only after all faculty mentors are added&nbsp; &nbsp;</td>
                                    <br/> <br/>  <button class="btn btn-info" type="Submit">Submit Faculty Mentors</button>
      								</font>
										
										
								
         </form>
		
<span id="phase3" style="visibility:hidden;"><font style="color:green;font-family: cursive; font-size: 15px;">&nbsp; &nbsp;Phase 3 Completed Sucessfully. </font></span>

								

								<?php }?>
						
					
<a href="index.php" style="margin-left:80px;font-family: cursive; font-size: 15px;" class="btn btn-info" >Skip</a> 
		
<a href="index.php" style="font-family: cursive; font-size: 15px;" class="btn btn-info" >Main Page</a> 
				
						<?php }?>


		<div id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header" >
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		    <h3 id="myModalLabel">Add Industry Person Info</h3>
	  </div>
	  <div class="modal-body">
		    <form name="Add_IND_Info" method="post" action="addindinfo.php" onsubmit="return formValidation()">
			<table style="margin-top:20px;" >		
					
				<tr>
					<td> First Name <font color="#FF0000"> * </font> &nbsp; </td>
					<td> <input type="text" id="fn" name="iefname" placeholder="Enter Your First Name " /></td>
				</tr>
				<tr>
					<td> Last Name <font color="#FF0000"> * </font> &nbsp; </td>
					<td><input type="text" name="ielname" id="ln" placeholder="Enter Your Last Name"  /></td>
				</tr>
				<tr>
					<td> Email Id <font color="#FF0000"> * </font> &nbsp; </td>
					<td><input  type="email" required="required" class="input-block-level" name="email" placeholder="Enter Your Email id Here" style="width:205px;"  /><span id="e1></span>"<br /></td>
				</tr>
				<tr>
					<td>Company Name <font color="#FF0000"> * </font> &nbsp; </td>
					<td> <input type="text" id="cname" name="cname" placeholder="Enter Your Industry Person company Name " /></td>
				</tr>
				<tr>
					<td>Company Email <font color="#FF0000"> * </font> &nbsp; </td>
					<td> <input type="email" required="required" id="cemail" name="cemail" placeholder="Enter Your Industry Person company Email " /></td>
				</tr>
				<tr>
					<td>Company Address <font color="#FF0000"> * </font> &nbsp; </td>
					<td> <input type="text" id="caddr" name="caddr" placeholder="Enter Your Industry Person company Address " /></td>
				</tr>

				
				</div>
					
											
		</table>
	
	  <div class="modal-footer">
	    
	    <button class="btn btn-info" type="submit"> Submit </button>
        <button class="btn btn-info" type="reset"> Reset </button>
	  </div>
	  </form> 
	</div>							
</div><!-- //span 9-->
 

		

</div>
</div>			
 </div>
 </div>

	
	

        <!-- END MAIN CONTENT -->
   <!-- FOOTER SIDEBAR -->
        <div id="outerfootersidebar">
        	<div class="main bg-white">
        	<div class="container">
            <div class="shadow2"></div>
                <div id="footersidebarcontainer" class="twelve columns"> 
                    <footer id="footersidebar">
                    <div id="footcol1"  class="three columns alpha">
                    <ul>
                        <li class="widget-container">
                            <h2 class="widget-title">About Us</h2>
                            <h6>This project is developed by Birlavishvakarma Mahavidhyalaya Engineering College,VVN. </h6>
                            <h6>Contact Us : bvmengineering.ac.in </h6>
                        </li>
                    </ul>
					
                            
                    </div>
                    <div id="footcol2"  class="three columns">
                         <ul>
                            <li class="widget-container">
                                <h2 class="widget-title"> Branch </h2>
                                <ul>
                                    <li><a href="#">Computer</a></li>
                                    <li><a href="#">IT</a></li>
                                    <li><a href="#">ET</a></li>
									<li><a href="#">Civil</a></li>
                                    <li><a href="#">Mechanical</a></li>
								   <li><a href="#">Electrical</a></li>
								</ul>
                                <div class="clear"></div>
                            </li>
                        </ul>
						
                    </div>
                    <div id="footcol3"  class="three columns">
                        <ul>
                            <li class="widget-container">
                                <h2 class="widget-title"> Search Categories</h2>
                                <ul>
                                    <li><a href="#">Java</a></li>
                                    <li><a href="#">Piston</a></li>
                                    <li><a href="#">.NET</a></li>
									<li><a href="#">Six Stroke</a></li>
                                    
								</ul>
                                <div class="clear"></div>
                            </li>
                        </ul>
                    </div>
                    <div id="footcol4"  class="three columns omega">
                        <ul>
                            <li class="widget-container">
                                <h2 class="widget-title">Find Us on Map</h2>
                                <div class="textwidget">
                                <img src="../images/content/map.png"  alt="" class="alignnone">
                                <p>Birlavishvakarma Mahavidhyalaya Engineering College,VVN. (Gujarat) - 388120 <br/> Ph. : +91 9879861889</p>
                                
                                </div>
                          </li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                    </footer>
                    
                </div>
            </div>
            </div>
        </div>

        <!-- END FOOTER SIDEBAR -->
        <!-- FOOTER -->
        <div id="outerfooter">
        	<div class="main bg-grey">
        	<div class="container">
                <div id="footercontainer" class="twelve columns">
                    <footer id="footer">Copyright &copy;2012- Project Information Management System. &nbsp;&nbsp; designed & developed by <a href="#"><b>Mehul&nbsp;<font color="grey">Hitesh&nbsp;</font>Nikul&nbsp;</b>Sunil&nbsp;</a></footer>
                    <div id="toTop"><span>Back to top</span> &uarr;</div>
                </div>
            </div>
            </div>
        </div>
        <!-- END FOOTER -->
        
	</div><!-- end outercontainer -->
</div><!-- end bodychild -->
<script>
		
		$("select#main").change(function () {
			var myc = document.getElementById('main').value;
				if(myc == "IDP")
				{
				$(".myidp").show(1000);
				$(".myudp").hide(1000);
				}else
				if(myc == "UDP")
				{
				$(".myudp").show(1000);
				$(".myidp").hide(1000);
				}else
				{
				$(".myidp").hide(1000);
				$(".myudp").hide(1000);
				}
				
		});

		
		
		/*
		
		$(document).ready(function()
		{
		//	$("#main").click(function()
			$("select idp:selected")
			{
				$(".myidp").show();
				$(".myudp").hide();
			});
  			
			/*$(document).ready(function()
			{
			
				$("select").click(function()
				{
    				$(".idp").show();	
  				});
  				//$("option").click(function()
				//{
    		//		$(".udp").fadeIn();
  			//	});
			});*/
		
</script>



</body>
</html>
<?php

if(isset($_SESSION['phase']))
{
if($_SESSION['phase']==0)
{
echo "<script>document.getElementById(\"nophase\").style.visibility=\"\";;</script>";
}
if($_SESSION['phase']==1)
{
echo "<script>document.getElementById(\"phase1\").style.visibility=\"\";;</script>";
}
if($_SESSION['phase']==1)
{
echo "<script>document.getElementById(\"phase2\").style.visibility=\"\";;</script>";
}

if($_SESSION['phase']==3)
{
echo "<script>document.getElementById(\"phase3\").style.visibility=\"\";;</script>";
}

}

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


if(isset($_SESSION['industry']))
{
if($_SESSION['industry']==1)
{
echo "<script>document.getElementById(\"industryadd\").style.visibility=\"\";;</script>";
}

if($_SESSION['industry']==3)
{
echo "<script>document.getElementById(\"deleteindustry\").style.visibility=\"\";;</script>";
}
if($_SESSION['industry']==5)
{
echo "<script>document.getElementById(\"alrindustry\").style.visibility=\"\";;</script>";
}

}
$_SESSION['noproid']=0;

$_SESSION['phase']=0;
?>



