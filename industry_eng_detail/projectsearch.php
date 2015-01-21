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
                              
								<li><a href="project3.php">Search</a></li>
                                
								
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
            <li ><a href="projectmembersearch.php" >Project Members Search</a></li>
            
			<li class='active'><a href="projectsearch.php" >Search</a></li>
			 </ul>
				

		
          </div><!--/.well -->
        </div><!--/span-->
        
		
		<div class="span9">
          <div class="hero-unit">
		<h3>Search Project</h3>
		<form action="./projectsearch.php" method="get" class="form-search">
                	
					<input type="text"  name='a' style="width:350px; height:25px;" placeholder="Search For Project" />&nbsp;
					
                    	<button type="submit"  name='submit' value='search' class="btn btn-info" style="width:80px; ">Search</button> &nbsp;
						
	</form>
<?php 

	$i = 0;
	$j = 0;
	@$k = $_GET['a'];
	
	//$button = @$_GET['submit'];
	
	$terms = explode(" ",$k);
	
	$query1="";
	
	if(isset($k) && !empty($k))
	{
	foreach ($terms as $each){
			$j++;
		
		if ($j == 1)
			$query1 .= "pro_keywords LIKE '%$each%'";
		else 
			$query1 .= "OR pro_keywords LIKE '%$each%' ";
		}
		
		$query="SELECT * FROM student_project_information WHERE $query1";
		
		//connect 
		mysql_connect("localhost","root","")or die("cannot connect");
		mysql_select_db("pims");
		
		$query = mysql_query($query);
		$numrows = mysql_num_rows($query);
		
		if($numrows > 0){
			
			$per_page = 1;
			@$start = $_GET['start'];
			
			$max_pages = ceil($numrows / $per_page);
			if(!$start)
			    $start=0; 
			
			$getquery = mysql_query("SELECT * FROM student_project_information WHERE $query1 LIMIT $start, $per_page");
			
			while ($row = mysql_fetch_assoc($getquery)){
			
			$id = $row['pro_id'];
			$title = $row['pro_title'];
			$description = $row['pro_def'];
			$keywords = $row['pro_keywords'];
		//	$link = $row['link'];
			
			echo "you have Search for ";  
			echo "<a href=projectsearch.php?a=".$k."><i>".$k."</i></a></br>";
		
			echo "<h4><a href=viewproject.php?id=".$id.">".$title."</h4></a>".
			$description."</br> </br>";
			
			}
		

//Pagination Starts
echo "<div class=\"pagination\">" ;
echo "<ul>"; 
$prev = $start - $per_page;
$next = $start + $per_page;
                       
$adjacents = 3;
$last = $max_pages - 1;
  
if($max_pages > 1)
{   
//previous button
		if (!($start<=0)) 
			echo " <li><a href='projectsearch.php?a=$k&submit=Search+source+code&start=$prev'>Prev</a> </li>";    
          
//pages 
		if ($max_pages < 7 + ($adjacents * 2))   //not enough pages to bother breaking it up
		{
			$i = 0;   
			for ($counter = 1; $counter <= $max_pages; $counter++)
				{
					if ($i == $start){
						echo " <li><a href='projectsearch.php?a=$k&submit=Search+source+code&start=$i'><b>$counter</b></a></li> ";
						}
					else {
						echo " <li><a href='projectsearch.php?a=$k&submit=Search+source+code&start=$i'>$counter</a></li> ";
						}  
					$i = $i + $per_page;                 
				}
		}
		elseif($max_pages > 5 + ($adjacents * 2))    //enough pages to hide some
		{
			//close to beginning; only hide later pages
			if(($start/$per_page) < 1 + ($adjacents * 2))        
				{	
					$i = 0;
					for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
					{
						if ($i == $start){
							echo " <li><a href='projectsearch.php?a=$k&submit=Search+source+code&start=$i'><b>$counter</b></a></li> ";
							}
						else {
							echo " <li><a href='projectsearch.php?a=$k&submit=Search+source+code&start=$i'>$counter</a></li> ";
							}	 
							$i = $i + $per_page;                                       
					}          
			}
//in middle; hide some front and some back
			elseif($max_pages - ($adjacents * 2) > ($start / $per_page) && ($start / $per_page) > ($adjacents * 2))
				{
					echo " <li><a href='projectsearch.php?a=$k&submit=Search+source+code&start=0'>1</a></li> ";
					echo " <li><a href='projectsearch.php?a=$k&submit=Search+source+code&start=$per_page'>2</a></li> ";
					$i = $start;                 
					for ($counter = ($start/$per_page)+1; $counter < ($start / $per_page) + $adjacents + 2; $counter++)
					{
						if ($i == $start){
							echo " <li><a href='projectsearch.php?a=$k&submit=Search+source+code&start=$i'><b>$counter</b></a></li> ";
							}
						else {
							echo " <li><a href='projectsearch.php?a=$k&submit=Search+source+code&start=$i'>$counter</a></li> ";
							}   
						$i = $i + $per_page;                
					}
                                  
				}
//close to end; only hide early pages
			else
			{
					echo " <li><a href='projectsearch.php?a=$k&submit=Search+source+code&start=0'>1</a></li> ";
					echo " <li><a href='projectsearch.php?a=$k&submit=Search+source+code&start=$per_page'>2</a></li> ";
 
					$i = $start;                
					for ($counter = ($start / $per_page) + 1; $counter <= $max_pages; $counter++)
						{
							if ($i == $start){
								echo " <li><a href='projectsearch.php?search=$search&submit=Search+source+code&start=$i'><b>$counter</b></a></li> ";
									}
							else {
									echo " <li><a href='projectsearch.php?a=$k&submit=Search+source+code&start=$i'>$counter</a></li> ";   
								} 
							$i = $i + $per_page;              
						}
			}
}
          
//next button
if (!($start >=$numrows - $per_page))
echo " <li><a href='projectsearch.php?a=$k&submit=Search+source+code&start=$next'>Next</a></li> ";    
}   

echo "</ul>";
echo "</div>";


}
		else 
		{
				echo "Search for ";
				echo  "<a href=projectsearch.php?a=".$k."><i>".$k."</i></a>";
				echo "no result found here";
		}
}		
 		
				
		//	mysql_close(); 	


?>	
	
	
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