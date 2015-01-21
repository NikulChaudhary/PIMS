<?php
include 'connect.php';

session_start();
if(isset($_SESSION['projectid']))
{

	unset($_SESSION['projectid']);
	unset($_SESSION['name']);
	unset($_SESSION['fname']);
	session_destroy();
	header("location:registerproject.php");
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
			<div id="heading"><h2 style="color: #2462B5;">Register Project</h2></div>
		
			<div class="row-fluid">
            <div class="span9">
                  <br></br>
            <h4>Lets Get Started with Basics</h4>        
			<div class="modal-body">	
				<form name="project_register" method="post" action="project_register.php" onsubmit="return formValidation()">
				<table>		
				 <tr>
                    <th>Enrollment No.<font size="2" color="red">* </font></th><td></td>
                    <td><input  type="text" placeholder="Enter Your Enrollment Nmuber"  name="enno" required></input></td>
					<td> 
					
					<?php if(isset($_SESSION['error']))
									{if($_SESSION['error']==1){?><font style="color:blue;font-family: cursive; font-size: 14px;">&nbsp;No Enrollment found Click on JOIN </font> <?php } unset($_SESSION['error']);}?></td>
                </tr>
				
				 <tr>
                    <th>College<font size="2" color="red">* </font></th><td></td>
                    <td><input type="text" placeholder="Enter Your College Name"   value="BVM" name="clg" required></input></td>
                
                </tr>
                  <tr>
                    <th>Department<font size="2" color="red">* </font></th><td></td>
                    <td>
										<select name="branch">
										<option>-- Department--</option>
										<?php
											
										$result=mysql_query("SELECT DISTINCT A.branch_id FROM college_branch as A,college as B where A.clg_id=B.clg_id and B.clg_name='BVM' order by branch_id"); 
											while($row = mysql_fetch_array($result))
											
											{
												$br=$row['branch_id'];
												$r=mysql_query("SELECT DISTINCT branch_name FROM branch where branch_id=$br order by branch_id"); 
												if(mysql_num_rows($r) > 0) {
		
													$member = mysql_fetch_assoc($r);
													$br_name=$member['branch_name'];
													}
												echo '<option value="'.$br.'"> '.$br_name.' </option>';
												
											}
											?>
											</select>
										</td>
										
                </tr>
				<tr>
                    <th>Year Of Project<font size="2" color="red">* </font></th><td></td>
                    <td><input type="text" placeholder="Enter Your project Year like 2013"  name="yr" required></input></td>
                
                </tr>
				<tr>
                    <th>Disciplinary<font size="2" color="red">* </font></th><td></td>
                    <td><select name="discipline" >
										<option selected>yes</option>
										<option >no</option>
										</select>
										</td>
                
                </tr>
				
	  </div>
					
											
		</table>
		<font size="3" color="blue">**Disciplinary Project Means Same Field of project </font>
<br></br><font size="3" color="blue">**If you are working with alternate department Choose NO </font>
<br></br><font size="3" color="blue">**For any kind of query mail us on mehulpatel100exp@gmail.com<br></font><br/>
<font size="3" color="red">**Only one project member has to register for whole team</font>

									
		<button class="btn btn-info" style="margin-left:135px;width:130px;" type="submit">Let's Go</button>
		<button class="btn btn-primary" type="reset">Resete</button>
		
	  </form></div> 
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



</body>
</html>


