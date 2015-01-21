<?php
include 'connect.php';
session_start();
if(!isset($_SESSION['projectid']) || (trim($_SESSION['projectid']) == '')) {
		header("location: index.php");
		exit();
	}
$id=$_SESSION['name'];
$proid=$_SESSION['projectid'];

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
  	
    <link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/inner.css" />
    <link rel="stylesheet" type="text/css" href="css/layerslider.css" />
    <link rel="stylesheet" type="text/css" href="css/color.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/style2.css" />
	<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" />
	
	 <!-- Java Script
	================================================== -->
	<script type="text/javascript" src="js/man.js"></script>
    <script type="text/javascript" src="js/layerslider.kreaturamedia.jquery-min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	
	
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
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/skeleton.css" />
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
	
</head>

<body >
<?php
if(isset($_GET['phase1']))
{
$p1=$_GET['phase1'];
}
if(isset($_GET['phase2']))
{
$p1=$_GET['phase2'];
}
if(isset($_GET['phase3']))
{
$p1=$_GET['phase3'];
}

 
if(isset($_GET['cat']))
{
$cat=$_GET['cat'];
if(isset($_GET['cat3']))
{
$subcat=$_GET['cat3'];}}?>

	<!-- Sign In -->
	<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    	<h3 id="myModalLabel">Sign In</h3>
	    </div>
		
		
			<div class="modal-body">
	    		

		
				<a href="login_project.php"><img class="img_txt" width="250" height="160" alt="" src="images/img0.jpg"></img></a>
				<a href="login_common.php?type=Student"><img class="img_txt" width="250" height="160" alt="" src="images/img11.jpg"></img></a>
			
				</div>	
				<div class="modal-body">
				
				<a href="login_common.php?type=Faculty"><img class="img_txt" width="250" height="160" alt="" src="images/img22.jpg"></img></a>
				<a href="login_common.php?type=Industry"><img class="img_txt" width="250" height="160" alt="" src="images/img33.jpg"></img></a>
				
				</div>
				<div class="modal-footer">
	    
				<a href="login_common.php?type=Admin"> <button class="btn btn-info" > LOGIN AS ADMIN</button></a>
				
		
	</div>
	</div>
			
			
		
	
	<!-- End Of Sign In -->
    <!-- Sign Up -->
    
    <div id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
					 <br /></td>
				</tr>
				<tr>
					<td> Confirm Password <font color="#FF0000"> * </font> &nbsp; </td>
					<td><input type="password" name="pass2"  /><span id="p2"></span><br /></td>
				</tr>
				<tr>
					<td> Email Id <font color="#FF0000"> * </font> &nbsp; </td>
					<td><input class="span3" type="email" required="required" class="input-block-level" name="email" placeholder="Enter Your Email id Here" style="width:205px;"  /><span id="e1></span>"<br /></td>
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
  
     
    

<div id="bodychild">
	<div id="outercontainer">
    
        <!-- HEADER -->
        <div id="outerheader">
					
        	
            <header id="top">
            	<div class="main">
					
                    <div id="logo" class="six columns alpha"><a href="index.php"><img src="images/logon.png" height="120px" width="610px" alt=""></a></div>
                    <div id="headerright" class="six columns omega">
                            <ul id="sn">
								<?php
						if(isset($_SESSION['name']))
						{
							
						?>
							<div style="float:right; margin-top: 2px;color: #ffffff;font-size: 17px;margin-right:6px;">
						<?php	echo "<div style=\"float:left; margin-top: 50px;\"><font size=\"5\" color=\"black\">Welcome &nbsp;".$_SESSION['fname']; ?> </font></div>
						
						<?php echo "&nbsp;<a href=\"logout.php\"><span class=\"icon-img\" style=\"background:url(images/logout.png)\"></span></a>";
						}
						else
						{
						?>	<li ><a href="#myModal" role="button"  data-toggle="modal"  data-target="#myModal" ><span class="icon-img" style="background:url(images/login.png)"></span></a></li>
							<li><a href="#myModal1" role="button"  data-toggle="modal"  data-target="#myModal1" ><span class="icon-img" style="background:url(images/reg1.png)"></span></a></li>
							
                         <?php } ?>
						</ul> 
                     
                    </div>
                    <div class="clear"></div>
                </div>
                
                <section id="navigation">
                    <div class="main container">
                        <nav id="nav-wrap">
                            <ul id="topnav" class="sf-menu">
                                <li><a href="index.php">Home</a></li>
                                
                                <li><a>Members</a>
                                    <ul>
                                        <li><a href="underconstruction.php">Studemt</a></li>
                                        <li><a href="underconstruction.php">Faculty</a></li>
										 <li><a href="underconstruction.php">Industry Person</a></li>
                                    </ul>
                                </li>
								
								<li><a>About</a>
                                    <ul>
                                    	<li><a href="underconstruction.php">Introduction</a></li>
                                        <li><a href="underconstruction.php">Problems</a></li>
                           
                                    </ul>
                                </li>
                                
								<li><a href="underconstruction.php">NEWS</a></li>
                                <li><a href="underconstruction.php">Useful Links</a></li>
                                <li><a href="underconstruction.php">Contact</a></li>
								<li><a href="#">Search</a></li>
                            </ul><!-- topnav -->
                        </nav><!-- nav -->	
                        <div class="clear"></div>
                      </div>
                </section>
                <div class="clear"></div>
            </header>
        </div>
        <!-- END HEADER -->
		

<!-- MAIN CONTENT -->
<div id="outermain">
        	  
        	<div class="main bg-white">
            <div class="shadow"></div>
        	<div class="container1">
			
			 <div class="row-fluid">
			 <div class="span3">
			 
				<img alt="" src="images/Main.jpg"></img>
				<img alt="" src="images/leftbg.jpg"></img></div>
			
			<div class="span9">
			
          <div class="tabbable tabs-below">

    <div class="tabbable" style="margin-bottom: 18px;">

    <ul class="nav nav-tabs">
        <li class="active">
            <a data-toggle="tab" href="#tab1">

                PHASE 1

            </a>
        </li>
        <li>
            <a data-toggle="tab" href="#tab2">

                PHASE 2

            </a>
        </li>
        <li>
            <a data-toggle="tab" href="#tab3">

                PHASE 3

            </a>
        </li>
    </ul>
    <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
        <div id="tab1" class="tab-pane active">
		
		
		
					<legend ><?php if($p1=!'yes'){ ?>Add<?php }?> Your Project Partners </legend>

					<div id="view-table-mentor">
							

							<table class="table table-hover">
								<thead>
                                	<tr>
                                    	
                  						<th>Name</th>
                  						<th>Enrollment</th>
                  						<th>Email</th>
										<?php if($p1=!'yes')
									  { ?>
                                        <th>Edit</th><?php }?>
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
									  <?php if($p1=!'yes')
									  { ?>
									  <td><a style="text-decoration:none;" href="editsinfo.php?name1=<?php echo $st_id; ?>" onclick="return confirm('Are you sure? \nU want to Delete News \n&quot;<?php echo $row['st_fname']; ?>&quot;')">
                                      <i style="color:#F00;">Delete</i></a></td>
                					</tr><?php } ?>
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

<?php
 
if($p1=!'yes')
{ ?>

<div class="table">    
  
                            	<form class="form-inline" method="post" action="sinfo.php">
                                	<table>
                                	<tr>
                       					<td> Student Enrollment no &nbsp; &nbsp;</td>
                                        <td><input type="text" name="st_enroll" placeholder="Enter Enrollment Number Here" /></td>
                                    </tr>
                                 </table>
                                 <div style="margin-top:15px; margin-left:115px;">
            						<button class="btn btn-info" type="submit"> Add</button>
      								<button class="btn" type="reset" style="margin-left:30px;"> Reset </button>
									<span id="alrstudent" style="visibility:hidden;">&nbsp;<font style="color:red;">&nbsp; &nbsp;Your Partner Already Added<!-- Bech****D -----FUCK YOU ----- --></font></span>
									
								</div> 
                                </form>
                        		                          
                       </div>
<span id="nostudent" style="visibility:hidden;">&nbsp;<font style="color:red;">&nbsp; &nbsp;No student Found Please click Add Partner Info Button</font></span>
<br/>
<div class="table">    
  
                            	<form class="form-inline" method="post" action="comphase1.php">
                                	<table>
                                	<tr>
                       					<td>Click Submit Project Membres only after all project members are added&nbsp; &nbsp;</td>
                                        </tr>
										<tr><td>
										<button class="btn btn-info" type="Submit"> Submit Project Membres</button>
      								
												
										</td></tr>
										<tr><td>
										
										<span id="phase1" style="visibility:hidden;"><font style="color:green;">&nbsp; &nbsp;Phase 1 Completed Sucessfully.. Go to PHASE2 </font></span>
										</td></tr>
										
										
                                 </table>
                                 </form>
                        		                          
                       </div>

<?php }?>
</div><!-- //TAB 1-->
 



	<div id="tab2" class="tab-pane">
            <legend style="color:#06F; width:450px;">Enter Your Project Information</legend>
        			<div class="table">
			        	
							<table style="margin-top:20px;" >		
								<tr>	
									<td> Select Project Type <font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
				                    <td>
				                    	<select name="type" id="main">
                                        <option > Select </option>
				                        <option name="idp"> IDP </option>
				                        <option name="udp"> UDP </option>
				                        </select>    
                                     </td>
								</tr>
								</table>
						
                <!-- IDP Table Content Starts here -->
               	
				<div class="myidp" style="display:none;">			
				
					<form name="idp" method="post" action="editidp.php" onsubmit="return formValidation()">
            	
						<table style="margin-top:20px;" >		   
										<table style="margin-top:20px;" >		   
							<tr>
                				<td> Project Title <font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
                                <td><textarea rows="5" name="ititle" cols="10" placeholder="Write Project Title here"></textarea>           
							</tr>
							<tr>
                				<td> Project Brief Description <font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
                                <td><textarea rows="5" name="idef" cols="10" placeholder="Write Project Defination here"></textarea>           
							</tr>
                            <tr>	
								<td> Field <font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
								<td>
                    				<select name="ifield">
		                        	<option> Select </option>
		                            <option value="civil"> Civil </option>
		                            <option value="computer"> Computer </option>
		                            <option value="electrical"> Electrical </option>
		                            <option value="et"> Electronics & Tele. Commu.</option>
		                            <option value="it"> IT </option>
		                            <option value="mechanical"> Mechanical </option>
		                            <option value="production"> Production </option>
			
			                        </select>
			                    </td>                    
							</tr>
                            <tr>
                            	<td> Area Of Project <font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
                                <td><input type="text" name="iarea" placeholder="Enter Field Here" /></td>
                            </tr>
			                <tr>
                            	<td> Industry Name <font color="#FF0000"> *&nbsp; &nbsp;  </font> </td>
                                <td> <input type="text" name="iname" placeholder="Enter Industry Name" /></td>                        
                            </tr>
                            <tr>
                            	<td>Industry Email <font color="#FF0000"> * &nbsp; &nbsp; </font></td>
                                <td><input class="span3" type="email" name="iemail" required="required" placeholder="Enter Email Here" /></td>
                            </tr>
                           
                            <tr>
                            	<td> Address Of Industry <font color="#FF0000"> *&nbsp; &nbsp;  </font> </td>
                                <td><textarea rows="5" name="iaddr" cols="10" placeholder="Write Industry Address Here"></textarea>                           
                            </tr>
                            
							<tr>
                            	<td> Tools Used<font color="#FF0000"> *&nbsp; &nbsp;  </font> </td>
                                <td><textarea rows="5" name="itools" cols="10" placeholder="Write Tools used in project ex .net,php"></textarea>                           
                            </tr>
							<tr>
                            	<td> Platform <font color="#FF0000"> *&nbsp; &nbsp;  </font> </td>
                                <td><textarea rows="5" name="iplatform" cols="10" placeholder="Write Platform ex windows,ubuntu"></textarea>                           
                            </tr>
			
							<tr>
								<td></td><td></td>
							</tr>
					
						</table>
                        <div>
            				<button class="btn btn-info" type="submit" style="margin-left:170px;"> Next </button>
      						<button class="btn btn-info" type="reset" style="margin-left:30px;"> Reset </button>
            			</div>
                        </form>
				</div> 
                 <!-- IDP Table Content Ends Here -->          
                            
                <!-- UDP Table Content Starts here -->
                
				<div class="myudp" style="display:none;">			
					
					<form name="udp" method="post" action="editudp.php" onsubmit="return formValidation()">
            	
					
					<table style="margin-top:20px; margin-left:14px;">
				            
					 <tr>
                            	<td> Project Title<font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
                                <td><input type="text" name="utitle" placeholder="Enter Project Title Here" /></td>
                            </tr>
							
                            <tr>
                				<td> Brief Description <font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
                                <td><textarea rows="5" name="udef" cols="10" placeholder="Write Project Definition Here"></textarea>           
							</tr>
                            
                            <tr>
                            	<td> Area Of Project <font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
                                <td><input type="text" name="uarea" placeholder="Enter Field Here" /></td>
                            </tr>
							
	
			  			<tr>
                            	<td> Tools Used<font color="#FF0000"> *&nbsp; &nbsp;  </font> </td>
                                <td><textarea rows="5" name="utools" cols="10" placeholder="Write Tools used in project ex .net,php"></textarea>                           
                            </tr>
							<tr>
                            	<td> Platform Used <font color="#FF0000"> *&nbsp; &nbsp;  </font> </td>
                                <td><textarea rows="5" name="uplatform" cols="10" placeholder="Write Platform ex windows,ubuntu"></textarea>                           
                            </tr>
									
    
							<tr>
								<td></td><td></td>
							</tr>
						</table>
					
					
         <!-- UDP Table Content Ends here -->
                    <div>
            			<button class="btn btn-info" type="submit" style="margin-left:165px;"> Next </button>
      					<button class="btn btn-info" type="reset"  style="margin-left:30px;"> Reset </button>
            		</div>
                    </form>    
			</div>           
                                

           
            </form>
             <legend style="color:#999; width:450px;"></legend>
          
           </div>
           
        </div><!-- //TAB 2-->
        
		
		<div id="tab3" class="tab-pane">
		
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
		
		
		
		
		</div><!-- //TAB 3-->
    </div>

</div>		
		

</div>
</div>			
 </div>
 </div>
</div> </div>           			

	
	

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
                                <img src="images/content/map.png"  alt="" class="alignnone">
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

}
$_SESSION['phase']=0;
?>



