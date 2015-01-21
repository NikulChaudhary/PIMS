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
  	<link rel="stylesheet" type="text/css" href="css/skeleton.css" />
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
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />


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
					
                    <div id="logo" class="six columns alpha"><a href="index.php"><img src="images/logon.png" height="120px" width="610px" alt="GTU"></a></div>
                    <div id="headerright" class="six columns omega">
                        <ul id="sn">
								<?php
						if(isset($_SESSION['name']))
						{
							$s=$_SESSION['name'];
							$check=substr($s,0,2);
							if($check=="st")
							{	$print="student";
							}
							else if($check=="fc")
							{	$print="faculty";
							}
							else if($check=="ie")
							{	$print="industry_eng_detail";
							}
						?>
							<div style="float:right; margin-top: 2px;color: #ffffff;font-size: 17px;margin-right:6px;">
						<?php	echo "<div style=\"float:left; margin-top: 50px;\"><font size=\"5\" color=\"black\">Welcome &nbsp;<a href=\"$print/index.php\" >".$_SESSION['fname']; ?> </font> </a></div>
						
						<?php echo "&nbsp;<a href=\"logout.php\"><span class=\"icon-img\" style=\"background:url(images/logout.png)\"></span></a>";
						}
						else
						{
							
							unset($_SESSION['name']);?>
							<li ><a href="#myModal" role="button"  data-toggle="modal"  data-target="#myModal" ><span class="icon-img" style="background:url(images/login.png)"></span></a></li>
								<li><a href="#myModal1" role="button"  data-toggle="modal"  data-target="#myModal1" ><span class="icon-img" style="background:url(images/reg1.png)"></span></a></li>
							
						<?php }
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
                                
                                <li><a>Members</a>
                                    <ul>
                                        <li><a href="underconstruction.php">Student</a></li>
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
                                <li><a href="news.php">Contact</a></li>
								<li><a href="advsearch2.php">Search</a></li>
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
		
<!-- SLIDER -->
        <div id="outerslider">
        	<div id="slidercontainer">
            	<section id="slider">
                	<div class="opacitytop"></div>
                    <div id="layerslider" class="slideritems">
                    	<div class="ls-layer" id="ls-layer-1" data-rel="slidedelay: 3000;">
                            <img class="ls-bg" src="images/slider/slide1.jpg" alt="layer"></div>
                        
                        
                        
                        <div class="ls-layer" id="ls-layer-3" data-rel="slidedelay: 3000;">
                            <img class="ls-bg" src="images/slider/slide2.jpg" alt="layer"></div>
                        
                        
                        <div class="ls-layer" id="ls-layer-2" data-rel="slidedelay: 3000;">
                            <img class="ls-bg" src="images/slider/slide3.jpg" alt="layer"></div>
                        
                        
                        <div class="ls-layer" id="ls-layer-4" data-rel="slidedelay: 3000; delayout:500;">
                            <img class="ls-bg" src="images/slider/slide4.jpg" alt="layer"></div>
                        
                        
                    </div>
                </section>
            </div>
        </div>
        <!-- END SLIDER -->
<!-- MAIN CONTENT -->
<div id="outermain">
        	  
        	<div class="main bg-white">
            <div class="shadow"></div>
        	<div class="container1">
			
            <h3>Main Actors Of System</h3>
			
			<div id="img_para">
			
				<span class="img_tp"></span>
				
				<img class="img_txt" width="300" height="160" alt="" src="images/img11.jpg"></img>
				<img class="img_txt" width="300" height="160" alt="" src="images/img22.jpg"></img>
				<img class="img_txt" width="300" height="160" alt="" src="images/img33.jpg"></img>
 
			</div>
			<div class="clear"></div>
               

			
			   <div class="package-list">
                    <div class="four columns">
                        <img src="images/icons/icon1.png" height="45" alt="">
                        <a href="student.php"><h3 class="margin_bottomoff">Student</h3></a>
                        <p>Register Online   | Upload Project Details</p>
						
                    </div>
                    <div class="four columns">
                        <img src="images/icons/icon2.png" height="45" alt="">
                        <a href="faculty.php"><h3 class="margin_bottomoff">Faculty</h3></a>
                        <p>Manage Project Information | Stay in touch with Industry </p><p> Enter Project Requirements</p>
                    </div>
                    <div class="four columns">
                        <img src="images/icons/icon3.png" height="45" alt="">
                        <a href="industry.php"><h3 class="margin_bottomoff">Industry</h3></a>
                        <p>Search Project Information | Enter Project Requirements</p>
                    </div>
					
                    <div class="clear"></div>
                </div>

                <div class="clear"></div><!-- clear float --> 
           
		<div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
              
			  <li font="align:center">NEWS</li>
           <marquee direction="up"  onmouseover="this.stop();" onmouseout="this.start();" >   
			  <ul class="nav nav-list">
           
			<?php 
				  
				 $q="SELECT id FROM news"; 
				$q=mysql_query($q);
				$j=0;
				while($row = mysql_fetch_array($q))
						{							
						$i=$row['id'];
						if($i>$j)
						{
						$j=$i;
						}
						}
				
				while($j>0)
				{	
					$query="SELECT * FROM news WHERE id='$j' ";
					$q=mysql_query($query);

					while($row = mysql_fetch_array($q))
						{
							echo "<a href=\"news.php\"><li ><strong>".$row['post_title']."</strong></li></a>";
							//echo "<li>".$row['post_detail']."</li></br>";
						}
						$j=$j-1;
				}			 
				?>
         
            </ul> </marquee>

          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="hero-unit">
            <h1>Welcome</h1>
            <p>It is world of student's project.Explore different projects done by student across BVM.Contact them to khnow more.And lots more functionality.Come and join large group of projects.See charts for best area of department.  </p>
            <?php if(!isset($_SESSION['name']))
						{
				?>		
			<p><a href="registerproject.php"  class="btn btn-primary btn-large">Signup for Project&raquo;</a></p>
          <?php }?></div>
			</div></div>
        	
			
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

</body>
</html>


