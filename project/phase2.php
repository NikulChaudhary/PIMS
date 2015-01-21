<?php
include '../connect.php';
session_start();
if(!isset($_SESSION['projectid']) || (trim($_SESSION['projectid']) == '')) {
		header("location: index.php");
		exit();
	}

$proid=$_SESSION['projectid'];
$id=$_SESSION['name'];

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
<title>Project Management Portal</title>
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
			<li ><a href="phase1.php" >Add Project Partner</a></li>
			<li class='active'><a href="phase2.php" >Add Project Information</a></li>
            <li ><a href="phase3.php" >Add Guides</a></li>
             
			 </ul>
				

		
          </div><!--/.well -->
        </div><!--/span-->
        
		
		<div class="span9">
		
          <div class="hero-unit">
		  <font style="font-family: cursive; font-size: 24px;"><?php if($p1=="no"){ ?>Add<?php }?> Your Project Information</font>
        		
		</div>
		<table class="table table-hover">
		<?php if($p2=="yes")
			{
	
			$r2 = mysql_query("SELECT * FROM student_project_information WHERE pro_id='$proid' AND ref_id='$id'");
			
					while($row = mysql_fetch_array($r2))
						 {
							 
							 echo '<tr><th>Project Title:</th>';
							 echo '<td><div align="left">'.$row['pro_title'].'</div></td></tr>';
							 echo '<tr><th>Project Definition.:</th>';
							 echo '<td><div align="left">'.$row['pro_def'].'</div></td></tr>';
							 echo '<tr><th>Project Area:</th>';
							 echo '<td><div align="00left">'.$row['pro_area'].'</div></td></tr>';
							 echo '<tr><th>Year of Project:</th>';
							 echo '<td><div align="left">'.$row['yearofproject'].'</div></td></tr>';
							 echo '<tr><th>Project Tools Used:</th>';
							 echo '<td><div align="left">'.$row['pro_tools_used'].'</div></td></tr>';
							 echo '<tr><th>Project Platform:</th>';
							 echo '<td><div align="left">'.$row['pro_platform'].'</div></td></tr>';
							 echo '<tr><th>Project Type:</th>';
							 echo '<td><div align="left">'.$row['pro_type'].'</div></td></tr>';
							 
							
						 }
			 ?> 
		</table>
    <?php }    
	
	
	 if($p2=="no")
	{ ?>
	
            		<div class="table">
			        	
							<table style="margin-top:20px;" >		
								<tr>	
									<td> Select Project Type <font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
				                    <td>
				                    	<select name="type" id="main">
                                        <option > Select </option>
				                        <option name="idp"> IDP </option>
				                        <option name="udp"> UDP </option>
				                        </select>    
                                     </td>
								</tr>
								</table>
						
                <!-- IDP Table Content Starts here -->
               	
				<div class="myidp" style="display:none;">			
				
					<form name="idp" method="post" action="editidp.php" onsubmit="return formValidation()">
            	
						<table style="margin-top:20px;" >		   
										<table style="margin-top:20px;" >		   
							<tr>
                				<td> Project Title <font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
                                <td><input type="text" name="ititle" placeholder="Enter your Project Title" />           
							</tr>
							<tr>
                				<td> Project Brief Description <font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
                                <td><textarea rows="5" name="idef" cols="10" placeholder="Write Project Defination here"></textarea>           
							</tr>
                            
                            <tr>
                            	<td> Area Of Project <font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
                                <td><input type="text" name="iarea" placeholder="Enter Field Here" /></td>
                            </tr>
			                <tr>
                            	<td> Industry Name <font color="#FF0000"> *&nbsp; &nbsp;  </font> </td>
                                <td> <input type="text" name="indname" placeholder="Enter Industry Name" /></td>                        
                            </tr>
                            <tr>
                            	<td>Industry Email <font color="#FF0000"> * &nbsp; &nbsp; </font></td>
                                <td><input  type="email" name="indemail" required="required" placeholder="Enter Email Here" /></td>
                            </tr>
                           
                            <tr>
                            	<td> Address Of Industry <font color="#FF0000"> *&nbsp; &nbsp;  </font> </td>
                                <td><textarea rows="5" name="indaddr" cols="10" placeholder="Write Industry Address Here"></textarea>                           
                            </tr>
                            
							<tr>
                            	<td> Tools Used<font color="#FF0000"> *&nbsp; &nbsp;  </font> </td>
                                <td><textarea rows="5" name="itools" cols="10" placeholder="Write Tools used in project ex .net,php"></textarea>                           
                            </tr>
							<tr>
                            	<td> Platform <font color="#FF0000"> *&nbsp; &nbsp;  </font> </td>
                                <td><textarea rows="5" name="iplatform" cols="10" placeholder="Write Platform ex windows,ubuntu"></textarea>                           
                            </tr>
			
							<tr>
								<td></td><td></td>
							</tr>
					
						</table>
                        <div>
            				<button class="btn btn-info" type="submit" style="margin-left:170px;"> Next </button>
      						<button class="btn btn-info" type="reset" style="margin-left:30px;"> Reset </button>
            			</div>
                        </form>
				</div> 
                 <!-- IDP Table Content Ends Here -->          
                            
                <!-- UDP Table Content Starts here -->
                
				<div class="myudp" style="display:none;">			
					
					<form name="udp" method="post" action="editudp.php" onsubmit="return formValidation()">
            	
					
					<table style="margin-top:20px; margin-left:14px;">
				            
					 <tr>
                            	<td> Project Title<font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
                                <td><input type="text" name="utitle" placeholder="Enter Project Title Here" /></td>
                            </tr>
							
                            <tr>
                				<td> Brief Description <font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
                                <td><textarea rows="5" name="udef" cols="10" placeholder="Write Project Definition Here"></textarea>           
							</tr>
                            
                            <tr>
                            	<td> Area Of Project <font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
                                <td><input type="text" name="uarea" placeholder="Enter Field Here" /></td>
                            </tr>
							
	
			  			<tr>
                            	<td> Tools Used<font color="#FF0000"> *&nbsp; &nbsp;  </font> </td>
                                <td><input type="text" name="utools" placeholder="Write Tools used in project ex .net,php"></input></td>                           
                            </tr>
							<tr>
                            	<td> Platform Used <font color="#FF0000"> *&nbsp; &nbsp;  </font> </td>
                                <td><input type="text" name="uplatform" placeholder="Write Platform ex windows,ubuntu"></input> </td>                          
                            </tr>
									
    
							<tr>
								<td></td><td></td>
							</tr>
						</table>
					
					
         <!-- UDP Table Content Ends here -->
                    <div>
            			<button class="btn btn-info" type="submit" style="margin-left:165px;"> Submit </button>
      					<button class="btn btn-info" type="reset"  style="margin-left:30px;"> Reset </button>
            		</div>
                    </form>    
			</div>           
                                

           
           <?php } ?>

		   <span id="phase2" style="visibility:hidden;"><font style="color:green;font-family: cursive; font-size: 15px;">&nbsp; &nbsp;Phase 2 Completed Sucessfully.. Go to PHASE3 </font></span>


<a href="phase3.php" style="margin-left:80px;font-family: cursive; font-size: 15px;" class="btn btn-info" >Go to Next Phase</a> 
		   
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
if($_SESSION['phase']==2)
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



