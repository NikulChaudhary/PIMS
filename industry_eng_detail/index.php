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
                                <li><a href="../index.php">Home</a></li>
                                <li><a href="project3.php">Search	</a></li>
                                
								
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
			Industry Eng Controls</div>
          <div class="well sidebar-nav">
             <ul class="nav nav-list">
			<li class='active'><a href="index.php" >Profile</a></li>
				<li ><a href="project.php" >Projects</a></li>
			  <li ><a href="projectrequirement1.php" >Project Requirement</a></li>
             </ul>
				

		
          </div><!--/.well -->
        </div><!--/span-->
        
		
		<div class="span9">
          <div class="hero-unit">
            <div class="span10 pass1">
			<?php
					
					$result = mysql_query("SELECT * FROM industry_eng_detail where ie_ref_id='$id'");

						while($row = mysql_fetch_array($result))
						  {
							
							$id=$row['ie_ref_id'];
							$name1=$row['ie_fname'];
							$name2=$row['ie_lname'];
							$gender=$row['ie_gender'];
							$dob=$row['ie_dob'];
							$cpnname=$row['company_name'];
							$cpnemail=$row['company_email'];
							$cpnaddr=$row['company_addr'];
							$qua=$row['ie_qualification'];
							$doj=$row['ie_DOJoin'];
							$aoe=$row['ie_area_of_expert'];
							$exp=$row['ie_experience'];
							$designation=$row['ie_designation'];
							$email=$row['ie_email'];
							$mo_no=$row['ie_mo_no'];
							//$pu=$row['ie_project_undertaken'];
							$pic=$row['pic'];
						  }
						
					?>
					
			<table style="width:100%;">
			<tr>
				<td><span style="font-weight:bold;font-size:25px;">Profile</span></td><td>
				<a id="editp1" style="float:right;margin-right:5%;"class="btn btn-info"> Edit Profile</a></td>
			<tr/>
			
			<tr>
				<td>
					<div  style="float:left;width:30%;" class="span2"> <img src="../images/<?php echo $pic;?>"  class="img-polaroid" width="200" height="200">
					</div>
				
				
					<div class="span8" style="float:left;width:80%;">
					<table class="table">
					<tr><th>Name : </th><?php echo '<td><div align="left">'.$name1." ".$name2.'</div></td>';?></tr>
					<tr><th>Gender :</th><?php echo '<td><div align="left">'.$gender.'</div></td>';?></tr>
					<tr><th>date of birth : </th><?php echo '<td><div align="left">'.$dob.'</div></td>';?></tr>
					<tr><th>Company name :</th><?php echo '<td><div align="left">'.$cpnname.'</div></td>';?></tr>
					<tr><th>Company email :</th><?php echo '<td><div align="left">'.$cpnemail.'</div></td>';?></tr>
					<tr><th>Company address :</th><?php echo '<td><div align="left">'.$cpnaddr.'</div></td>';?></tr>
					<tr><th>Qualifiaction : </th><?php echo '<td><div align="left">'.$qua.'</div></td>';?></tr>
					<tr><th>Date of join : </th><?php echo '<td><div align="left">'.$doj.'</div></td>';?></tr>
					<tr><th>Area of expert: </th><?php echo '<td><div align="left">'.$aoe.'</div></td>';?></tr>
					<tr><th>Experience : </th><?php echo '<td><div align="left">'.$exp.'</div></td>';?></tr>
					<tr><th>designation : </th><?php echo '<td><div align="left">'.$designation.'</div></td>';?></tr>
					<tr><th>Email : </th><?php echo '<td><div align="left">'.$email.'</div></td>';?></tr>
					<tr><th>Mobile number : </th><?php echo '<td><div align="left">'.$mo_no.'</div></td>';?></tr>
				
				
					</table>
					</div>
				</td>
			</tr>
			
			<tr>
				<td><h5><a class="btn btn-info" id="cpass">Change Password</a></h5></td>
			</tr>
			<!--<tr><td><span id="update" style="visibility:hidden;">&nbsp;<font style="color:Green;">&nbsp; &nbsp;Profile Successfully Updated</font></span></td>
			<td><span id="pass" style="visibility:hidden;">&nbsp;<font style="color:Green;">&nbsp; &nbsp;Password Altered</font></span></td>
				<td><span id="passfailed" style="visibility:hidden;">&nbsp;<font style="color:red;">&nbsp; &nbsp;Wrong Password Man..</font></span></td>
			</tr>-->
		</table>
		</div>


		<div class="span10 pass2" style="display:none;">
			
		<h2>Change Password</h2>	
				<form action="changepass.php" method="post">
				<label>Old Password</label><input type="password" name ="oldpass" required/><br>
				<label>New Password</label><input id="p1" name ="new1" type="password" onchange="check()"  required/><br>
				<label>Repeat Password</label><input id="p2" type="password" onchange="check()"  required/>
				<span id="match" style="color:#ff0000;visibility:hidden;">&nbsp;&nbsp;Password Don't Match</span><br><br> 
				<input id="sub" type="submit" disabled="disabled" class="btn btn-info" value="Change Password" />
				<a href="index.php"><input id="cancle" type="button" class="btn" value="CANCLE" /></a>
				
				</form>
		</div>
		
		<div class="span10 pass3" style="display:none;">
			<table style="width:100%;">
			<tr>
				<td><span style="font-weight:bold;font-size:25px;">Edit Profile</span>

			<tr/>
			
			<tr>
				<td>
				<?php
						$result = mysql_query("SELECT * FROM industry_eng_detail where ie_ref_id='$id'");

						while($row = mysql_fetch_array($result))
						  {
							
							$id=$row['ie_ref_id'];
							$name1=$row['ie_fname'];
							$name2=$row['ie_lname'];
							$gender=$row['ie_gender'];
							$dob=$row['ie_dob'];
							$cpnname=$row['company_name'];
							$cpnemail=$row['company_email'];
							$cpnaddr=$row['company_addr'];
							$qua=$row['ie_qualification'];
							$doj=$row['ie_DOJoin'];
							$aoe=$row['ie_area_of_expert'];
							$exp=$row['ie_experience'];
							$designation=$row['ie_designation'];
							$email=$row['ie_email'];
							$mo_no=$row['ie_mo_no'];
							//$pic=$row['pic'];
						  }
						?>
					
					<form action="editadminexec.php" method="post" enctype="multipart/form-data">
					<div  style="float:left;width:20%;" class="span2"> <img src="../images/<?php echo $pic;?>"  class="img-polaroid" width="200" height="200">
					<label style="margin:5px 0 0px 0;">Change Photo : </label>
					<input id="filebox" name ="file" type="file" class="btn btn-small" style="position: relative;" value="Change Photo"></div>
				
					<div class="span8" style="float:left;width:80%;">
					<table class="table">
					<tr><th >First Name : </th><td><input name="ie_name1" type="text" value="<?php echo $name1;?>" /></td></tr>
					<tr><th >Last Name : </th><td><input name="ie_name2" type="text" value="<?php echo $name2;?>" /></td></tr>
					<tr><th>Gender :</th><td><input name="ie_gender" type="text"  value="<?php echo $gender;?>" /></td></tr>
					<tr><th>Dob : </th><td><input name="ie_dob" type="text"  value="<?php echo $dob;?>" /></td></tr>
					<tr><th>Company name : </th><td><input name="cpnname" type="text"  value="<?php echo $cpnname;?>" /></td></tr>
					<tr><th>Company email : </th><td><input name="cpnemail" type="text"  value="<?php echo $cpnemail;?>" /></td></tr>
					<tr><th>Company address : </th><td><input name="cpnaddr" type="text"  value="<?php echo $cpnaddr;?>" /></td></tr>
					<tr><th>Qualifiaction : </th><td><input name="ie_qua" type="text"  value="<?php echo $qua;?>" /></td></tr>
					<tr><th>Date of join : : </th><td><input name="ie_doj" type="text"  value="<?php echo $doj;?>" /></td></tr>
					<tr><th>Area of expert: </th><td><input name="ie_aoe" type="text"  value="<?php echo $aoe;?>" /></td></tr>
					<tr><th>Experience  : </th><td><input name="ie_exp" type="text"  value="<?php echo $exp;?>" /></td></tr>
					
					<tr><th>designation : </th><td><input name="ie_designation" type="text"  value="<?php echo $designation;?>" /></td></tr>
					<tr><th>E-Mail : </th><td><input name="ie_email" type="text"  value="<?php echo $email;?>" /></td></tr>
					<tr><th>Mobile Number : </th><td><input name="ie_mo_no" type="text"  value="<?php echo $mo_no;?>" /></td></tr>
					<tr><td><input type="submit" value="Save Profile" class="btn btn-info"></td>
						<td><td><input id="cancle2" type="button" class="btn btn-info" value="CANCLE" /></td>
					</tr>
					</table>
					</div>
					</form>
				</td>
			</tr>
			</table>
		</div>
		</div>
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
  $("#cancle2").click(function(){
    $(".pass3").fadeOut(1000,"linear",function(){$(".pass1").fadeIn(1000);});
	
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