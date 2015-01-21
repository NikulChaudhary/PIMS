<?php
include '../connect.php';
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

	
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="../css/skeleton.css" />
</head>

<body >



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
						<?php	echo "<div style=\"float:left; margin-top: 50px;\"><font size=\"5\" color=\"black\">Welcome &nbsp;<a href=\"index.php\" >".$_SESSION['projectid']; ?> </font> </a></div>
						
						<?php echo "&nbsp;<a href=\"../logout.php\"><span class=\"icon-img\" style=\"background:url(../images/logout.png)\"></span></a>";
						}
						else
						{
						?>	<li ><a href="#myModal" role="button"  data-toggle="modal"  data-target="#myModal" ><span class="icon-img" style="background:url(../images/login.png)"></span></a></li>
							<li><a href="#myModal1" role="button"  data-toggle="modal"  data-target="#myModal1" ><span class="icon-img" style="background:url(../images/reg1.png)"></span></a></li>
							
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
                                <li><a href="members.php">Members</a>
                                    
                                </li>
								
								<li><a href="project.php">Project Activity</a>
                                
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
			Project Activities</div>
          <div class="well sidebar-nav">
             <ul class="nav nav-list">
			<li class='active'><a href="project.php" >All Project Details</a></li>
            <li ><a href="editproject1.php" >Edit all Project details</a></li>
				 </ul>
			 </div>
			 </div>
			
			<div class="span9">
			
			<div class="row-fluid">
           
                  
        
			<div class="hero-unit">
		  <font style="font-family: cursive; font-size: 24px;"> Project Information</font>
        		
		</div> <table cellpadding="1" cellspacing="1" class="table table-bordered">
				
			 <?php
			
			$result = mysql_query("SELECT * FROM student_project_information WHERE ref_id='$id' AND pro_id='$proid'");
			
					while($row = mysql_fetch_array($result))
						 {
							 echo '<tr><th>Project:</th>';
							 echo '<td><div align="left">'.$row['pro_id'].'</div></td></tr>';
							 echo '<tr><th>Project Type:</th>';
							 echo '<td><div align="left">'.$row['pro_type'].'</div></td></tr>';
							 echo '<tr><th>Project Title:</th>';
							 echo '<td><div align="left">'.$row['pro_title'].'</div></td></tr>';
							 echo '<tr><th>Project Definition.:</th>';
							 echo '<td><div align="left">'.$row['pro_def'].'</div></td></tr>';
							 echo '<tr><th>Project Area:</th>';
							 echo '<td><div align="left">'.$row['pro_area'].'</div></td></tr>';
							 echo '<tr><th>Year of Project:</th>';
							 echo '<td><div align="left">'.$row['yearofproject'].'</div></td></tr>';
							 echo '<tr><th>Project Tools Used:</th>';
							 echo '<td><div align="left">'.$row['pro_tools_used'].'</div></td></tr>';
							 echo '<tr><th>Project Platform:</th>';
							 echo '<td><div align="left">'.$row['pro_platform'].'</div></td></tr>';
							
							
						 }
			 ?> 
		</table>
          
		<div id="view-table-mentor">
							
							<?php
			
						
						$result = mysql_query("SELECT * FROM project_faculty_guide WHERE pro_id='$proid'");
				
						?>
			<div class="hero-unit">
		  <font style="font-family: cursive; font-size: 24px;"> Faculty Mentors</font>
        		
		</div>				<table class="table table-bordered">
								<thead>
                                	<tr>
                                    	
                  						<th>Name</th>
                  						<th>Designation</th>
                  						<th>Email</th>
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
									  </tr>
								  <?php
									}
									}
				                  ?> 
																	  
								</tbody>
							</table> 
						</div>
						<?php 
						
						$r1 = mysql_query("SELECT pro_type FROM student_project_information WHERE pro_id='$proid'");
						while($row = mysql_fetch_array($r1))
						{
							$protype=$row['pro_type'];
						}		
						
						if($protype=="IDP")
						{
						
						?>
	<div id="view-table-mentor">
	<div class="hero-unit">
		  <font style="font-family: cursive; font-size: 24px;">Industry Representatives</font>
        		
		</div>						<table class="table table-bordered">
								<thead>
                                	<tr>
                                    	
                  						<th>Name</th>
                  						<th>Designation</th>
                  						<th>Email</th>
                                     </tr>
              					</thead>
                                <tbody>
									<?php
									$result11 = mysql_query("SELECT * FROM project_guide_industryperson WHERE pro_id='$proid'");
									
									
										while($row = mysql_fetch_array($result11))
										{
											$ieid=$row['ie_ref_id'];
								
											$result1 = mysql_query("SELECT * FROM industry_eng_detail WHERE ie_ref_id='$ieid'");
											while($row=mysql_fetch_array($result1))
											{
									?>

					                <tr>
                  	                  <td><?php echo $row['ie_fname']; ?></td>
					                  <td><?php echo $row['ie_designation']; ?></td>
					                  <td><?php echo $row['ie_email']; ?></td>
									
                					</tr>
								  <?php
									}
									}
				                  ?> 
																	  
								</tbody>
							</table>
					
						</div>
						
						<?php } ?>
						
						<div class="hero-unit">
		  <font style="font-family: cursive; font-size: 24px;"> Project Partners</font>
        		
		</div>
<div id="view-table-mentor">
							

							<table class="table table-bordered">
								<thead>
                                	<tr>
                                    	
                  						<th>Name</th>
                  						<th>Enrollment</th>
                  						<th>Email</th>
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
									  
                					</tr>
								  <?php
									}
									}
				                  ?> 
																  
								</tbody>
							</table> 
						</div>
		<?php 
		
		echo "<a href=\"printall.php\" style=\"margin-left:280px;font-family: cursive; font-size: 15px;\" class=\"btn btn-info\" >Print PDF</a> 
		&nbsp;Works Only with Google CROME";	
		
		
		?>
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