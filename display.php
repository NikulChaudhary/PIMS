<?php 
include('connect.php');	
		@$id=$_GET['id'];	
		$title="";
		$description="";
		$ref_id="";
		
		$query="SELECT * FROM student_project_information WHERE pro_id='$id'";
	
		$query= mysql_query($query);
		$numrows = mysql_num_rows($query);
	
	if($numrows > 0)
	{		
			while ($row = mysql_fetch_assoc($query))
			{
				global $title;
				global $ref_id;
			$ref_id=$row['ref_id'];
			$title = $row['pro_title'];
		    $def = $row['pro_def'];
			$area=$row['pro_area'];
			$year=$row['yearofproject'];
			$tools=$row['pro_tools_used'];
			$platform=$row['pro_platform'];
			$type=$row['pro_type'];
		
		
			}
	}
		
	$query="SELECT * FROM student WHERE pro_id='$id'";
		
	
if(isset($_POST['submit']))
	{
		
		global $title;
		global $description;
	
		include_once('dompdf/dompdf_config.inc.php');
			
		$html = '<!DOCTYPE html >
				<html lang="en">
				<head>
				<meta charset=utf-8" />

				<style type= "text/css">
	
				h2{		margin-top:10px;
						background-color:#A9A9A9;
						color:red;
					}
				</style>
				</head>

				<body style="border-style:groove;border: 2px solid black; ">
				<div class="wrap" >
				<h2>PROJECT DETAIL</h2>
				<table>
				<tr>
					<td>
						project titlefgggfhsfgh :
					</td>
					<td>'.$title.' </td>
				</tr>
				<tr>
					<td>
						project definition:	
					</td>
					<td>'.$def.'</td>
				</tr>

				<tr>
					<td>	project area:</td>
					<td>	'.$area.'</td>
				</tr>
				<tr>
					<td>
						year of project:</td>
					<td>	'.$year.'</td>
				</tr>
				<tr>
						<td>
						tools used:</td>
					<td>'.$tools.'</td>
				</tr>
				<tr>
					<td>
						platform :	</td>
					<td>'.$platform.'</td>
				</tr>
				<tr>
						<td>
						project type:</td>
						<td>'.$type.'</td></tr>
						</table>
	</div>
	</body>
	</html>';
					
			$dompdf = new DOMPDF();
			$dompdf->load_html($html);
			$dompdf->render();
			$dompdf->stream('Sample.pdf');
			
//to open pdf in the browser window
			//$dompdf->stream("my_pdf.pdf", array("Attachment" => 0));
	
	}	
?>

<?php
include('connect.php');

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
  	<link rel="stylesheet" type="text/css" href="css/skeleton.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/inner.css" />
    <link rel="stylesheet" type="text/css" href="css/layerslider.css" />
    <link rel="stylesheet" type="text/css" href="css/color.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="css/style2.css" />
	<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" />
	
	 <!-- Java Script
	================================================== -->
	<script src=" js/jquery.js"></script>
	
	<script src=" js/bootstrap.min.js"></script>
	<script type="text/javascript" src=" js/man.js"></script>
    <script type="text/javascript" src=" js/layerslider.kreaturamedia.jquery-min.js"></script>
	<script type="text/javascript" src=" js/jquery.prettyPhoto.js"></script>
</head>

<body >
     
	
<div id="bodychild">
	<div id="outercontainer">
    
        <!-- HEADER -->
        <div id="outerheader">
					
        	
          <header id="top">
            	<div class="main">
					
                    <div id="logo" class="six columns alpha"><a href="index.php"><img src=" images/logon.png" height="120px" width="610px" alt=""></a></div>
                    <div id="headerright" class="six columns omega">
                        <ul id="sn">
								<?php
						if(isset($_SESSION['name']))
						{
							
						?>
							<div style="float:right; margin-top: 2px;color: #ffffff;font-size: 17px;margin-right:6px;">
						<?php	echo "<div style=\"float:left; margin-top: 50px;\"><font size=\"5\" color=\"black\">Welcome &nbsp;<a href=\"index.php\" >".$_SESSION['fname']; ?> </font> </a></div>
						
						<?php echo "&nbsp;<a href=\" logout.php\"><span class=\"icon-img\" style=\"background:url( images/logout.png)\"></span></a>";
						}
						/*else
						{
							unset($_SESSION['name']);
							header("location: index.php");
						}*/
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
                                
								<li><a href="#">Search</a></li>
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
			<li class='active'><a href="projectsearch.php" >Search</a></li>
			<li ><a href="project.php" >All Project</a></li>
             </ul>
				

		
          </div><!--/.well -->
        </div><!--/span-->
        
		
		<div class="span9">
          <div class="hero-unit">
		
    
			<legend style="color:#06F; width:450px;">
			<h3>project detail </h3></legend>
			 <form action='display.php?id=<?php echo $id; ?>' method='post'>
				<table cellpadding="1" cellspacing="1" class="table table-hover">
							<tr>
					<td><th>
						project title :</th>
					</td>
					<td><?php echo $title; ?></div></td>
				</tr>
				<tr>
					<td><th>
						project definition:	</th>
					</td>
					<td><?php echo $def ;?></td>
				</tr>

				<tr>
					<td><th>	project area:</th></td>
					<td><?php echo $area; ?></td>
				</tr>
				<tr>
					<td><th>
						year of project:</th></td>
					<td><?php echo $year; ?></td>
				</tr>
				<tr>
						<td><th>
						tools used:</th></td>
					<td><?php echo $tools; ?></td>
				</tr>
				<tr>
					<td><th>
						platform :	</th></td>
					<td><?php echo $platform; ?></td>
				</tr>
				<tr>
						<td><th>
						project type:</th></td>
						<td><?php echo $type; ?></td></tr>
						</table>
	
	</br><input type='submit' class="btn btn-info" name='submit'  value="download pdf">
	
</form>

	
	</div></div><!--Span9 -->
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