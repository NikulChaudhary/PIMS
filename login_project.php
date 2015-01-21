<?php
include 'connect.php';
session_start();
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
			<div id="heading"><h2 style="color: #2462B5;">Project Sign IN</h2></div>
    
			<div class="row-fluid">
            <div class="span9">
                  <br></br>
                    <font size="4"> For understanding process,......<a href="asset/Instructions.pdf">
                            Help Document 
                        </a><br></br>
					<font color="red">First Sinup for System before entering project Details.......</font><br />
					<a href="registerproject.php" class="btn" >Register Team</a>
                        
                    </font>
                    <br></br>
                    
                    <div style="border-bottom:#C0C0C0 dashed 1px; width: 580px;"></div>
					
					
			<div class="modal-body">	
				<form name="login_project" method="post" action="loginproject.php" onsubmit="return formValidation()">
				<table>		
				 <tr>
                    <th><font size="2" color="red">* </font>Team ID</th><td></td>
                    <td><input type="text" placeholder="Enter Your Project ID"  name="proid"></input></td>
                
                </tr>
                  <tr>
                    <th><font size="2" color="red">* </font>Enrollment  Number</th><td></td>
                    <td><input type="text" placeholder="Enter Your Enrollment"  name="enno"></input></td>
                
                </tr>
				<tr>
				<td><button class="btn btn-info" style="width:130px;" type="submit">Login</button>
		</td><td><button class="btn btn-primary" type="reset">Resete</button>
		</td>
				<td><span id="wrong" style="visibility:hidden;">&nbsp;<font style="color:red;">&nbsp; &nbsp;Invalide Team Id / Enrollment</font></span>
</td>
				</tr>
				
	  </div>
					
											
		</table>
		<font size="3" color="red">**Keep your Team Id Private</font><br/><BR/>
		<font size="3" color="blue">**Any One Enrollment no of your team member</font>
<br></br><font size="3" color="blue">**For any kind of query mail us on mehulpatel100exp@gmail.com<br></font></br>
									
		
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


	
<?php

if(isset($_SESSION['error']))
{
if($_SESSION['error']==1)
{
echo "<script>document.getElementById(\"wrong\").style.visibility=\"\";;</script>";
}
}


?>
