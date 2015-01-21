<?php
include('../connect.php');
session_start();
if(!isset($_SESSION['name']) || (trim($_SESSION['name']) == '')) {
		header("location: ../index.php");
		exit();
	}
else{
$id=$_SESSION['name'];
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
        	
		<div class="span10">
          <div class="hero-unit">
            <div class="span10 pass1">
			
			<table style="width:100%;">
			<tr>
				<td><span style="font-weight:bold;font-size:25px;">Project detail</span></br></br></br></br></td>
				<td> <a id="editp1" style="float:right;margin-right:5%;"class="btn btn-info"> Edit Project</a></td>
				<tr/>
			
			<?php
			
				$id=$_GET['id'];
					
					$res = mysql_query("SELECT * FROM pro_requirement where prreq_id='$id'");
					$row = mysql_fetch_array($res);
					
			?>
				
			<tr>
				<td>
					<div class="span8" style="float:left;width:80%;">
					<table class="table">
					<tr><th>Title : </th> <?php echo '<td><div align="left">'.$row['pro_title'].'</div></td>';?></tr>
					<tr><th>Project Brief :</th><?php echo '<td><div align="left">'.$row['pro_desc'].'</div></td>';?></tr>
					<tr><th>Project Discipline :</th><?php echo '<td><div align="left">'.$row['pro_discipline'].'</div></td>';?></tr>
					<tr><th>Project area : </th><?php echo '<td><div align="left">'.$row['pro_area'].'</div></td>';?></tr>
					<tr><th>Project tools  : </th> <?php echo '<td><div align="left">'.$row['pro_tools'].'</div></td>'; ?> </tr>
					<tr><th>Project Platform  : </th><?php echo '<td><div align="left">'.$row['pro_platform'].'</div></td>';?> </tr>
					<tr><th>Project expected time  : </th><?php echo '<td><div align="left">'.$row['pro_expected_time'].'</div></td>';?></tr>
					<tr><th>Project Status  : </th><?php echo '<td><div align="left">'.$row['pro_status'].'</div></td>';?></tr>
					
					</table>	
				</td>
			</tr>
			
		</table>
		</div>

	
		   </div><!--Span9 -->
			</div>
        	
		<div class="span10 pass3" style="display:none;">
			<table style="width:100%;">
			<tr>
				<td><span style="font-weight:bold;font-size:25px;">Edit Project</br></br></br></span>

			<tr/>
			
			<tr>
				<td>
				
					<form action="editrequirement.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
					
					<div class="span8" style="float:left;width:80%;">
					<table class="table">
					
					<?php
						$name=$_SESSION['name'];
						$sql="SELECT * FROM pro_requirement where id='$name' and prreq_id='$id'";
						$result = mysql_query($sql);
						//echo $sql;
						while($row = mysql_fetch_array($result))
						{
							$id=$row['prreq_id'];
							$title=$row['pro_title'];
							$desc=$row['pro_desc'];
							$disc=$row['pro_discipline'];
							$area=$row['pro_area'];
							$tools=$row['pro_tools'];
							$plat=$row['pro_platform'];
							$status=$row['pro_status'];
						}
						?>
									
					<tr><th >Project Title : </th><td><input name="title" type="text" value="<?php echo $title;?>" /></td></tr>
					<tr><th >Project Description : </th><td><input name="desc" type="text"  value="<?php echo $desc;?>" ></textarea></td></tr>
					<tr><th>Project Discipline :</th>
					<td>
						<select name="branch">
						<option> SELECT </option>
						<?php
							$result = mysql_query("SELECT * FROM branch ORDER BY branch_id");
							while($row = mysql_fetch_array($result))
							{
								$branch=$row['branch_name'];
								if($branch==$disc)
								{
									echo '<option value="'.$branch.'" selected="selected"> '.$branch.' </option>';
								}
								else
								{echo '<option value="'.$branch.'"> '.$branch.' </option>';
								}	
							}
						?>
						</select>
					</td>
			
					<tr><th>Project Area : </th><td><input name="area" type="text"  value="<?php echo $area;?>" /></td></tr>
					<tr><th>Project Tools : </th><td><input name="tools" type="text"  value="<?php echo $tools;?>" /></td></tr>
					<tr><th>Project Platform : </th><td><input name="platform" type="text"  value="<?php echo $plat;?>" /></td></tr>
					<tr><th>Project Status : </th>
					<td>
						<select name="status">
						<option> SELECT </option>
						<?php 
							if($status == "New")
							{	echo '<option value="New" selected="selected">'.$status.'</option>';
								echo '<option value="Extend" > Extend </option>';
							}
							else
							{
								echo '<option value="Extend" selected="selected">'.$status.'</option>';
								echo '<option value="New"> New </option>';
							}
						?>
						</select>
					
						
					</td>
					</tr>
					
					<tr> <td><input id="sub" type="submit"  class="btn btn-info" value="Change" /></td>
					<td><a href="viewdetail.php?id=<?php echo $id;?>"><input id="cancle" type="button" class="btn btn-info" value="CANCLE" /></a></td>
					</tr>
				
					</table>
					</div>
					</form>
					
				</td>
			</tr>
			</table>
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



<?php mysql_close(); ?>
 
 
 
 <script type="text/javascript">
$(document).ready(function(){
  $("#cpass").click(function(){
    $(".pass1").fadeOut(1000,"linear",function(){$(".pass2").fadeIn(1000);});
	
  });
});

$(document).ready(function(){
  $("#editp1").click(function(){
    $(".pass1").fadeOut(1000,"linear",function(){$(".pass3").fadeIn(1000);});
	
  });
});

$(document).ready(function(){
  $("#editp2").click(function(){
    $(".pass3").fadeOut(1000,"linear",function(){$(".pass1").fadeIn(1000);});
  });
});

$(document).ready(function(){
  $("#cancle").click(function(){
    $(".pass2").fadeOut(1000,"linear",function(){$(".pass1").fadeIn(1000);});
	
  });
});
function check(){

var p1=document.getElementById("p1").value;
var p2=document.getElementById("p2").value;
//alert(" p1 : "+p1+"  p2 : "+p2);

	if(p1 == p2)
	{document.getElementById("match").style.visibility="hidden";
		document.getElementById("sub").disabled=false;
	}else
	{
		document.getElementById("match").style.visibility="";
		document.getElementById("sub").disabled=true;
	}
}
</script>


</body>
</html>
	
<?php

if(isset($_SESSION['update']))
{
if($_SESSION['update']==1)
{
echo "<script>document.getElementById(\"update\").style.visibility=\"\";;</script>";
}

if($_SESSION['update']==2)
{
echo "<script>document.getElementById(\"pass\").style.visibility=\"\";;</script>";
}
if($_SESSION['update']==3)
{
echo "<script>document.getElementById(\"passfailed\").style.visibility=\"\";;</script>";
}

}
$_SESSION['update']=0;
?>