<?php
include('../connect.php');

session_start();
if(!isset($_SESSION['name']) || (trim($_SESSION['name']) == '')) {
		header("location: ../index.php");
		exit();
	}

$id=$_SESSION['name'];

$ffname=strtolower($_POST['ffname']);                   //1 
$flname=strtolower($_POST['flname']);			//1
$stenroll=$_POST['enno'];			//1
$ifname=strtolower($_POST['ifname']);
$ilname=strtolower($_POST['ilname']);				//3
$iname=strtolower($_POST['indname']);					//3
					//3

//echo "<br>year : ".$year."<br>protitle : ".$protitle."<br>protools : ".$protools."<br>branch : ".$branch."<br>fname : ".$fname."<br>snamer : ".$sname."<br>iname : ".$iname."<br><br>";;
echo "<br>enroll : ".$stenroll."";
$q = "SELECT * from student_project_information AS A WHERE ";
$f=0;$k="";
$tb=0;
if($ffname!="")
{
	echo "faculty";
	$k="AND";
	$q = "SELECT B.pro_id,C.f_id from project_faculty_guide AS B,faculty AS C WHERE B.f_id=C.f_id AND LCASE(f_fname)='$ffname' OR LCASE(f_lname)='$flname' ";
	$tb=1;
	$f++;
	
}

$tb=6;
}
if($stenroll!="")
{
	echo "st";
	$k="AND";
	$q = "SELECT B.pro_id,B.st_id from project_group_details AS B,student as C WHERE B.st_id=C.st_id AND C.st_enroll=$stenroll";
	$tb=2;
	$f++;
	
}
if($ifname!="" && $iname!="" && $ilname!="")
{
	echo "industry";
	$k="AND";
	$q = "SELECT DISTINCT B.pro_id from industry_eng_detail AS C WHERE B.ie_ref_id=C.ie_ref_id AND LCASE(company_name)='$iname' ";
	$tb=4;
	$f++;
	
}
if($ifname!="")
{
	echo "industry person";
	$k="AND";
	$q = "SELECT B.pro_id,C.ie_ref_id from project_guide_industryperson AS B,industry_eng_detail AS C WHERE B.ie_ref_id=C.ie_ref_id AND LCASE(ie_fname)='$ifname' AND LCASE(ie_lname)='$ilname' AND LCASE(company_name)='$iname' ";
	$tb=3;
	$f++;
	
}
if($iname!="")
{
	echo "industry";
	$k="AND";
	$q = "SELECT DISTINCT B.pro_id,C.ie_ref_id from industry_eng_detail AS C WHERE B.ie_ref_id=C.ie_ref_id AND LCASE(company_name)='$iname' ";
	$tb=5;
	$f++;
	
}


echo "<b> Query : ".$q."</b>";

 
$var=1;
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
			<li ><a href="project.php" >All Project</a></li>
<li class='active'><a href="projectmembersearch.php" >Project Members Search</a></li>
              
  <li ><a href="projectsearch.php" >Search</a></li>
			 </ul>
				

		
          </div><!--/.well -->
        </div><!--/span-->
        
		
		<div class="span9">
          <div class="hero-unit">
		<h3>Resulted Project </h3>
		<a href="projectmembersearch.php">

   <input class="btn" type="button" value="Back To Search Project"></input>

</a>
		<?php 
			if($var==1)
			{ ?>
		<table cellpadding="1" cellspacing="1" class="table table-bordered">
		
			<tr>
				<th>Member ID</th>
				<th>ID</th>
				<th>Project Title</th>
				<th>Controls</th>
				
				<!--<th>Action</th>  -->
			</tr>
			<?php
				
				$r = mysql_query($q);
				
				if(	mysql_num_rows($r)>0)
					{
					while($row = mysql_fetch_array($r))
						{
						    $proid=$row['pro_id'];
							if($tb==1)
							{
								$id=$row['f_id'];
							}
							if($tb==2)
							{
								$id=$row['st_id'];
							}
							if($tb==3)
							{
								$id=$row['ie_ref_id'];
							}
							if($tb==4)
							{
								$id=$row['ie_ref_id'];
							}
							if($tb==5)
							{
								$id=$row['ie_ref_id'];
							}
							
							
							
							echo '<td><div align="border-left">'.$id.'</div></td>';
							
							$q1 = "SELECT * from student_project_information AS A WHERE A.pro_id=$proid";
							$r1 = mysql_query($q1);
								while($row = mysql_fetch_array($r1))
								{
								
									
									echo '<td><div align="border-left">'.$row['pro_id'].'</div></td>';
									echo '<td><div align="left">'.$row['pro_title'].'</div></td>';
									echo '<td><div align="center"><a href="viewproject.php?id='.$row['pro_id'].'">View Project</a> | <a href="generatepdf.php?id='.$row['pro_id'].'">Print PDF</a> </td>';
									echo '</tr>';
								}
						}
					}
					else{
						echo '<td><div align="border-left">No Result FOUND</div></td>';
						echo '<td><div align="border-left"></div></td>';
						echo '<td><div align="border-left"></div></td>';
						echo '</tr>';
							
							
				
					}
			}
			?>
				</table> 
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