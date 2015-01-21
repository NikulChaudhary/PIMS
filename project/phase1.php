	<?php
include '../connect.php';
session_start();
if(!isset($_SESSION['projectid']) || (trim($_SESSION['projectid']) == '')) {
		header("location: index.php");
		exit();
	}

$proid=$_SESSION['projectid'];
$id=$_SESSION['name'];
//echo "p1:$proid	";
$s="SELECT phase1,phase2,phase3 FROM student_project_information WHERE pro_id='$proid'";
$r=mysql_query($s);	
				
			if(mysql_num_rows($r)>0)
			{  
			while($row = mysql_fetch_array($r))
					{
					$p1=$row['phase1'];
					$p2=$row['phase2'];
					$p3=$row['phase3'];
					}	
					
					//echo "p1:$p1";
					//echo "p2:$p2";
					//echo "p3:$p3";
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
						<?php	echo "<div style=\"float:left; margin-top: 50px;\"><font size=\"5\" color=\"black\">Welcome &nbsp;".$_SESSION['projectid']; ?> </font></div>
						
						<?php echo "&nbsp;<a href=\"../logout.php\"><span class=\"icon-img\" style=\"background:url(../images/logout.png)\"></span></a>";
						}
						else
						{
						header("location: ../login_project.php");

                         } ?>
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
            </header>
  -      </div>
        <!-- END HEADER -->
		

<!-- MAIN CONTENT -->
<div id="outermain">
        	  
        	<div class="main bg-white">
            <div class="shadow"></div>
        	<div class="container1">
			
            
		<div class="row-fluid">
        <div class="span3">
			<div class="subtextbox" style="background-color: #178CAF;">
			Project Registration</div>
          <div class="well sidebar-nav">
             <ul class="nav nav-list">
			<li class='active'><a href="phase1.php" >Add Project Partner</a></li>
			<li ><a href="phase2.php" >Add Project Information</a></li>
            <li ><a href="phase3.php" >Add Guides</a></li>
             
			 </ul>
				

		
          </div><!--/.well -->
        </div><!--/span-->
        
		
		<div class="span9">
          <div class="hero-unit">
		  <font style="font-family: cursive; font-size: 24px;"><?php if($p1=="no"){ ?>Add<?php }?> Your Project Partners</font>
        		
		</div>
  
		<div id="view-table-mentor">
							

							<table class="table table-hover">
								<thead>
                                	<tr>
                                    	
                  						<th>Name</th>
                  						<th>Enrollment</th>
                  						<th>Email</th>
										<?php if($p1=="no")
									  { ?>
                                        <th>Edit</th><?php }?>
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
					                  <td><?php echo $row['st_enroll'];?></td>
					                  <td><?php echo $row['st_email']; ?></td>
									  <?php if($p1=='no' && $st_id!=$id)
									  { ?>
									  <td><a style="text-decoration:none;" href="editsinfo.php?name1=<?php echo $st_id; ?>" onclick="return confirm('Are you sure? \nU want to Delete : \n&quot;<?php echo $row['st_fname']; ?>&quot;')">
                                      <i style="color:#F00;">Delete</i></a></td>
                					<?php }else{ ?><td></td><?php }?></tr>
								  <?php
									}
									}
									if(isset($_SESSION['st_grp']))
									{if($_SESSION['st_grp']==1 || $_SESSION['st_grp']==3 )
									
								 {
				                  ?> 
								  
									<tr><td>
									 <span id="studentadd" style="visibility:hidden;"><font style="color:green;font-family: cursive; font-size: 15px;">&nbsp; &nbsp;Your Project Partner Added Successfully </font></span>
									</td><td></td><td>	
									<span id="studentdelete" style="visibility:hidden;"><font style="color:red;font-family: cursive; font-size: 15px;">&nbsp; &nbsp;Your Project Partner Deleted Successfully </font></span>
									</td></tr><?php }} ?>								  
								</tbody>
							</table> 
						</div>

<?php
 
if($p1=="no")
{ ?>

  
                            	<form class="form-inline" method="post" action="sinfo.php">
                                	<table>
                                	<tr>
                       					<td> Student Enrollment no &nbsp; &nbsp;</td>
                                        <td><input type="text" name="st_enroll" placeholder="Enter Enrollment Number Here" /></td>
                                    </tr>
                                 </table>
                                 <div style="margin-top:15px; margin-left:115px;">
            						<button class="btn btn-info" type="submit"> Add</button>
      								<button class="btn" type="reset" > Reset </button>
									<a href="#myModal1" role="button" class="btn btn-info" data-toggle="modal" style="margin-left:50px;" data-target="#myModal1">Add Partner Info</a>
									
									<span id="alrstudent" style="visibility:hidden;">&nbsp;<font style="color:red;font-family: cursive; font-size: 15px;">&nbsp; &nbsp;Your Partner Already Added<!-- Bech****D -----FUCK YOU ----- --></font></span>
									
								</div> 
                                </form>
               
<span id="nostudent" style="visibility:hidden;">&nbsp;<font style="color:red;font-family: cursive; font-size: 20px;">&nbsp; &nbsp;No student Found Please click Add Partner Info Button</font></span>
<br/><br/>
<div class="table">    
  
                            	<form class="form-inline" method="post" action="comphase1.php">
								<font style="font-family: cursive; font-size: 24px;">Click Submit Project Membres only after all project members are added&nbsp; &nbsp;</td>
                                       <br/><br/> <button class="btn btn-info" type="Submit"> Submit Project Membres</button></font>
      								

								 </form>
                        		                          
                       </div>

<?php }?>

<span id="phase1" style="visibility:hidden;"><font style="color:green;font-family: cursive; font-size: 15px;">&nbsp; &nbsp;Phase 1 Completed Sucessfully.. Go to PHASE2 </font></span>
				
<a href="phase2.php" style="margin-left:80px;font-family: cursive; font-size: 15px;" class="btn btn-info" >Go to Next Phase</a> 
			
<div id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header" >
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		    <h3 id="myModalLabel">Add Partner Info</h3>
	  </div>
	  <div class="modal-body">
		    <form name="Add_Partner_Info" method="post" action="addpartnerinfo.php" onsubmit="return formValidation()">
			<table style="margin-top:20px;" >		
					<tr>
					<td>Enrollment No <font color="#FF0000"> * </font> &nbsp; </td>
					<td> <input type="text" id="enno" name="enno" placeholder="Enter Your Enrollment Name " />
	<!--				<span id="fn1" style="visibility:hidden;">Must Contain Atleast 6 character <span>
					<span id="id1" style="visibility:hidden;"></span><br /></td>-->
				</tr>
				<tr>
					<td> First Name <font color="#FF0000"> * </font> &nbsp; </td>
					<td> <input type="text" id="fn" name="fname" placeholder="Enter Your First Name " /></td>
				</tr>
				<tr>
					<td> Last Name <font color="#FF0000"> * </font> &nbsp; </td>
					<td><input type="text" name="lname" id="ln" placeholder="Enter Your Last Name"  /></td>
				</tr>
				<tr>
					<td> Email Id <font color="#FF0000"> * </font> &nbsp; </td>
					<td><input type="email" required="required" class="input-block-level" name="email" placeholder="Enter Your Email id Here" style="width:205px;"  /><span id="e1></span>"<br /></td>
				</tr>

				</div>
					
											
		</table>
		
	  <div class="modal-footer">
	    
	    <button class="btn btn-info" type="submit"> Submit </button>
        <button class="btn btn-info" type="reset"> Reset </button>
	  </div>
	  </form> 
	</div>
				
</div><!-- //span 9-->
 

		

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
<script>
		
		$("select#main").change(function () {
			var myc = document.getElementById('main').value;
				if(myc == "IDP")
				{
				$(".myidp").show(1000);
				$(".myudp").hide(1000);
				}else
				if(myc == "UDP")
				{
				$(".myudp").show(1000);
				$(".myidp").hide(1000);
				}else
				{
				$(".myidp").hide(1000);
				$(".myudp").hide(1000);
				}
				
		});

		
		
		/*
		
		$(document).ready(function()
		{
		//	$("#main").click(function()
			$("select idp:selected")
			{
				$(".myidp").show();
				$(".myudp").hide();
			});
  			
			/*$(document).ready(function()
			{
			
				$("select").click(function()
				{
    				$(".idp").show();	
  				});
  				//$("option").click(function()
				//{
    		//		$(".udp").fadeIn();
  			//	});
			});*/
		
</script>



</body>
</html>
<?php
if(isset($_SESSION['st_grp']))
{
if($_SESSION['st_grp']==1)
{
echo "<script>document.getElementById(\"studentadd\").style.visibility=\"\";;</script>";
}
if($_SESSION['st_grp']==2)
{
echo "<script>document.getElementById(\"nostudent\").style.visibility=\"\";;</script>";
}
if($_SESSION['st_grp']==3)
{
echo "<script>document.getElementById(\"studentdelete\").style.visibility=\"\";;</script>";
}
if($_SESSION['st_grp']==5)
{
echo "<script>document.getElementById(\"alrstudent\").style.visibility=\"\";;</script>";
}
if($_SESSION['st_grp']==6)
{
echo "<script>document.getElementById(\"studentadded\").style.visibility=\"\";;</script>";
}

}

$_SESSION['st_grp']=0;




if(isset($_SESSION['phase']))
{
if($_SESSION['phase']==0)
{
echo "<script>document.getElementById(\"nophase\").style.visibility=\"\";;</script>";
}
if($_SESSION['phase']==1)
{
echo "<script>document.getElementById(\"phase1\").style.visibility=\"\";;</script>";
}
if($_SESSION['phase']==1)
{
echo "<script>document.getElementById(\"phase2\").style.visibility=\"\";;</script>";
}

if($_SESSION['phase']==3)
{
echo "<script>document.getElementById(\"phase3\").style.visibility=\"\";;</script>";
}

}
$_SESSION['phase']=0;
?>



