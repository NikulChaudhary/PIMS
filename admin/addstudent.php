<?php
include('../connect.php');
session_start();
if(!isset($_SESSION['name']) || (trim($_SESSION['name']) == '')) {
		header("location: ../index.php");
		exit();
	}

$id=$_SESSION['name'];



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
  	<link rel="stylesheet" type="text/css" href="../css/skeleton.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
	<link rel="stylesheet" type="text/css" href="../css/inner.css" />
    <link rel="stylesheet" type="text/css" href="../css/layerslider.css" />
    <link rel="stylesheet" type="text/css" href="../css/color.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/style2.css" />
	<link rel="stylesheet" type="text/css" href="../css/prettyPhoto.css" />
	
	 <!-- Java Script
	================================================== -->
	<script src="../js/jquery.js"></script>
	
	<script src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/man.js"></script>
    <script type="text/javascript" src="../js/layerslider.kreaturamedia.jquery-min.js"></script>
	<script type="text/javascript" src="../js/jquery.prettyPhoto.js"></script>

	
	<script type="text/javascript">
	jQuery(window).load(function() {
	
	jQuery('#layerslider').hover(function(){
		jQuery('a.ls-nav-prev,a.ls-nav-next').fadeTo('slow',1);	
	},
	function(){
		jQuery('a.ls-nav-prev,a.ls-nav-next').fadeTo('slow',0);	
	});

    jQuery('#layerslider.slideritems').layerSlider({
		skinsPath : 'images/layerslider-skins/',
		skin : 'broadway',
		autoStart : true,
		cbInit: function(){jQuery('a.ls-nav-prev,a.ls-nav-next').css('display','none');	},  
	});
});
  
</script>
	
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
<script type="text/javascript">

function update1()
{
ir=document.getElementByID("mr");
ir.start();
}
function update()
{
ir=document.getElementByID("mr");
ir.stop();
} 
</script>
</head>

<body >
     
	
<div id="bodychild">
	<div id="outercontainer">
    
        <!-- HEADER -->
        <div id="outerheader">
					
        	
          <header id="top">
            	<div class="main">
					
                    <div id="logo" class="six columns alpha"><a href="index.php"><img src="../images/logon.png" height="120px" width="610px" alt=""></a></div>
                    <div id="headerright" class="six columns omega">
                        <ul id="sn">
								<?php
						if(isset($_SESSION['name']))
						{
							
						?>
							<div style="float:right; margin-top: 2px;color: #ffffff;font-size: 17px;margin-right:6px;">
						<?php	echo "<div style=\"float:left; margin-top: 50px;\"><font size=\"5\" color=\"black\">Welcome &nbsp;<a href=\"index.php\" >".$_SESSION['fname']; ?> </font> </a></div>
						
						<?php echo "&nbsp;<a href=\"../logout.php\"><span class=\"icon-img\" style=\"background:url(../images/logout.png)\"></span></a>";
						}
						else
						{
							unset($_SESSION['name']);
							header("location:../index.php");
						}
						?>	
						</ul> 
                    </div>
                    <div class="clear"></div>
                </div>
                
                <section id="navigation">
                    <div class="main container">
                        <nav id="nav-wrap">
                            <ul id="topnav" class="sf-menu">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="student.php">Student</a></li>
                                <li><a href="faculty.php">Faculty</a></li>
								<li><a href="industry.php">Industry Person</a></li>
								<li><a href="project.php">Project</a></li>
                                
					        </ul><!-- topnav -->
                        </nav><!-- nav -->	
                        <div class="clear"></div>
                      </div>
                </section>
                <div class="clear"></div>
           
        </div>
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
			<div class="subtextbox" style="background-color: #178CAF;">
			Admin Controls</div>
          <div class="well sidebar-nav">
             <ul class="nav nav-list">
			<li ><a href="student.php" >All Student</a></li>
            <li class='active'><a href="addstudent.php" >Add Student</a></li>
			<li ><a href="studentsearch.php" >Search</a></li>
			 </ul>
				

		
          </div><!--/.well -->
        </div><!--/span-->
        
		
		<div class="span9">
          <div class="hero-unit">
		<h3>ADD Student</h3><?php if(isset($_SESSION['stadd']))
				{$p=$_SESSION['stadd'];if($p==3){ ?><font style="color:red;font-family:cursive; "> Student Already Added</font>
        <br/><?php unset($_SESSION['stadd']);}}?>
		<?php 
		if(isset($_SESSION['stadd']) && $_SESSION['stadd']==2 && isset($_GET['en']))
		{
		$en=$_GET['en'];
		$u=$_SESSION['uname'];
		$pass=$_SESSION['pass'];
		echo "  <font style=\"font-family: cursive; \"> Student Added</font>
        <br/>";
		echo "Enrollment No:$en<br/>";
		echo "Username:$u<br/>";
		echo "Password:$pass<br/><hr/>";
		unset($_SESSION['uname']);
		unset($_SESSION['pass']);
		}
		?>
		<form method="post" action="addstudentpro.php">
            	<table cellpadding="1" cellspacing="1" class="table table-hover">
				<tr>	
					<th> Name   </th>
					<td> <input type="text" name="st_fname"  placeholder="Enter Your First name" /></td>
					<td> <input type="text" name="st_lname"  placeholder="Enter Your Last name" /></td>
					
				</tr>
				
				<tr>	
					<th> Enrollment No   </th>
					<td> <input type="text" name="enno"   placeholder="Enter Enrollment no" /></td>
                    
				</tr>
				<tr>	
					<th> Email   </th>
					<td> <input type="email" required="required" name="st_email"  placeholder="Enter Email" /></td>
                    
				</tr>
				<tr>	
					<th> Date Of Birth   </th>
					<td> <input type="date" name="st_dob"   placeholder="Enter DOB" /></td>
                    
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
							echo '<option value="'.$branch.'"> '.$branch.' </option>';
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
							if($clg_name=="BVM")
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
                    <td><input type="text" name="city"   placeholder="Enter Your Address" />
                    	
                        
                   </td>
				</tr>
                
                <tr>
                	<th> Contact No   </th>
                    <td> <input type="text" name="cno"  placeholder="Enter Mobile Number"</td>
                </tr>
                
                <tr>
                	<td></td><td></td>
                </tr>
                </fieldset>
   			</table>
            
            	<button class="btn btn-primary" type="submit" style="margin-left:135px;width:130px;"> Save </button>
			
            </form>
           <a href="viewprofile.php"><button class="btn btn-info" style="margin-left:135px;width:130px;" > Cancle </button></a>
      
		 
	</div><!--Span9 -->
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
       *             <div class="clear"></div>
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