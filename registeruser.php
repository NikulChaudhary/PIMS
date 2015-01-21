<?php
include 'connect.php';

session_start();
if(isset($_SESSION['projectid']))
{

	unset($_SESSION['projectid']);
	unset($_SESSION['name']);
	unset($_SESSION['fname']);
	session_destroy();
	header("location:registeruser.php");
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
	<script src="js/jquery.js"></script>
	
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
    <script type="text/javascript" src="js/layerslider.kreaturamedia.jquery-min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>

	
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/skeleton.css" />

</head>

<body >

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
		    	
		
				
				<a href="registerproject.php"><img  width="250" height="160" alt="" src="images/registration.jpg"></img></a>
				<a href="registeruser.php"><img  width="250" height="160" alt="" src="images/user.jpg"></img></a>
				
				</div>
				
		
	  <div class="modal-footer">
	  </div>
	   
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
								<li ><a href="#myModal" role="button"  data-toggle="modal"  data-target="#myModal" ><span class="icon-img" style="background:url(images/login.png)"></span></a></li>
								<li><a href="#myModal1" role="button"  data-toggle="modal"  data-target="#myModal1" ><span class="icon-img" style="background:url(images/reg1.png)"></span></a></li>
							
                       
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
			<div id="heading"><h2 style="color: #2462B5;">Register User</h2></div>
		
			<div class="span10">
                  <br></br>
            <h4>Fill Up Registration form</h4>        
			<div class="modal-body">	
				<form name="registration" method="post" action="register.php" onsubmit="return formValidation()">
			<table  >		
				<tr>	
					<td > User Name <font color="#FF0000"> * </font>  </td>
					<td> <input type="text" name="uid" placeholder="Enter User Name" required="required"  />
					</td>
					<td> 
					
					<?php if(isset($_SESSION['user']))
									{if($_SESSION['user']==0){?><font style="color:red;font-family: cursive; font-size: 14px;">&nbsp;Username Already Exists... </font> <?php } unset($_SESSION['user']);}?></td>
                
				</tr>
				<tr>
					<td> First Name <font color="#FF0000"> * </font> &nbsp; </td>
					<td> <input type="text" id="fn" name="fname" placeholder="Enter Your First Name " />
	<!--				<span id="fn1" style="visibility:hidden;">Must Contain Atleast 6 character <span>
					<span id="id1" style="visibility:hidden;"></span><br />--></td>
				</tr>
				<tr>
					<td> Last Name <font color="#FF0000"> * </font> &nbsp; </td>
					<td><input type="text" name="lname" id="ln" placeholder="Enter Your Last Name"  />
<!--					<span id="ln1" style="visibility:hidden;">Must Contain Atleast 6 character <span><br />--></td>
				</tr>
				<tr>
					<td> Type <font color="#FF0000"> * </font> &nbsp; </td>
					<td>
                    	<select name="profession" id="profession" onchange="checkprof()">
                        <option value="s"> Select </option>
                        <option value="student"> Student </option>
                        <option value="industry_eng_detail"> Industry </option>
                        <option value="faculty"> Faculty </option>
                     	</select>
				
                    </td>
					<?php if(isset($_SESSION['user']))
									{ ?>
							<td> 
					<?php
					if($_SESSION['user']==0){ ?><font style="color:blue;font-family: cursive; font-size: 14px;">&nbsp;No Enrollment found Click on JOIN </font> <?php } unset($_SESSION['user']);?></td><?php }?>
                
					<td><span id="enroll" style="visibility:hidden;"><input type="text" name="enno" id="enno" placeholder="Enter Your Enrollment No."  /></span>
						</td> 
             	</tr>
				
				<tr>
				<td><span id="facultysow" style="visibility:hidden;">
				
				<select name="college">
										<option>College</option>
												
										<?php
											$result = mysql_query("SELECT DISTINCT * FROM college ORDER BY clg_id");
											
											while($row = mysql_fetch_array($result))
											
											{
												$clg1=$row['clg_name'];
												$id1=$row['clg_id'];
												if($clg1=='BVM'){
												echo '<option selected value="'.$id1.'"> '.$clg1.' </option>';
												}
												
												else
												{
													echo '<option value="'.$id1.'"> '.$clg1.' </option>';
												
												}
											}
											?>
											</select></span>
											
											
				</td><td><span id="facultysow1" style="visibility:hidden;">
				
				<select name="dept">
										<option>Department</option>
										<?php
										
										
												$r=mysql_query("SELECT DISTINCT branch_name FROM branch order by branch_id"); 
												while($row=mysql_fetch_array($r)) {
		
													$br_name=$row['branch_name'];
													$br=$row['branch_id'];
												
												echo '<option value="'.$br.'"> '.$br_name.' </option>';
												
													}
												
											?>
											</select>
										
				
				</span></td>
				<td><span id="facultysow3" style="visibility:hidden;">
                    	<select name="designation" >
                        <option value="dis"> Designation </option>
                        <option value="Assosiate Professor">Assosiate Professor</option>
                        <option value="Professor"> Professor</option>
                        <option value="Lab Assistant"> Lab Assistant </option>
                     	</select>
				</span>
                    </td>	
				
				</tr>
				
				<tr>
					<td> Password  <font color="#FF0000"> * </font> &nbsp; </td>
					<td><input id="p1" type="password" name="pass1"  />
					 <br /></td>
				</tr>
				<tr>
					<td> Confirm Password <font color="#FF0000"> * </font> &nbsp; </td>
					<td><input id="p22" type="password" onchange="check()"/><span id="passmatch" style="color:#ff0000;visibility:hidden;">&nbsp;&nbsp;Password Don't Match</span> 
				<br /></td>
				</tr>
				<tr>
					<td> Email Id <font color="#FF0000"> * </font> &nbsp; </td>
					<td><input  type="email" required="required"  name="email" placeholder="Enter Your Email id Here" /><br /></td>
				</tr>
		
					<tr>
					<td> Gender <font color="#FF0000"> * </font> &nbsp; </td>
					<td>
                    	<select name="gender">
                        <option> Select </option>
                        <option value="male"> Male </option>
                        <option value="female"> Female </option>
                        </select>
                    </td>
					 
             	</tr>
				
				
				</div>
					
											
		</table>
		
            
            
            
		</div>
	  <div class="modal-footer">
	    <button class="btn btn-info" type="submit" id="sub" disabled="disabled"> Submit </button>
        <button class="btn btn-info" type="reset"> Reset </button>
	  </div>
	  </form> 
				
				
				
      </div>
    </div>

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



 <script type="text/javascript">
function check(){

var p1=document.getElementById("p1").value;
var p2=document.getElementById("p22").value;
//alert(" p1 : "+p1+"  p2 : "+p2);

	if(p1 == p2)
	{	document.getElementById("passmatch").style.visibility="hidden";
		document.getElementById("sub").disabled=false;
	
		}else
	{
		document.getElementById("passmatch").style.visibility="";
	document.getElementById("sub").disabled=true;
		
	}
}
function checkprof(){

var pr=document.getElementById("profession").value;
//alert(" pr : "+pr);

	if(pr=="student")
	{	
			document.getElementById("enroll").style.visibility="";
		
	}else
	{
	document.getElementById("enroll").style.visibility="hidden";
		
		}
			if(pr=="faculty")
	{	
			document.getElementById("facultysow").style.visibility="";
			document.getElementById("facultysow3").style.visibility="";
		
			document.getElementById("facultysow1").style.visibility="";
		
	}else
	{
	document.getElementById("facultysow").style.visibility="hidden";
	document.getElementById("facultysow1").style.visibility="hidden";
	document.getElementById("facultysow3").style.visibility="hidden";
	
		}
	

		
}
</script>



</body>
</html>


