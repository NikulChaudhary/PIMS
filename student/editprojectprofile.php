<?php
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Welcome To Projrct Management Portal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<!-- Bootstrap -->
    
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../css/bootstrap-responsive.css" rel="stylesheet">    
	<script src="../js/jquery.js"></script>
    <script>
		$(document).ready(function()
		{
			//alert($(window).width());
			var x=(($(window).width())-1024)/2;
			//alert(x);
			$('.wrap').css("left",x+"px");
		});

	</script>
	
	<script src="../js/bootstrap.min.js"></script>
    
	
<style>

	body
	{
		background-image:url(../images/1.png);
		background-repeat:repeat;
	}
	.modal-body
	{
		background-image:url(../images/.jpg);
		background-repeat:repeat;
	}
		
.head
{
	font-family:"Copperplate Gothic Bold";
	color:#333;
	text-decoration:none;
	
}
.wrap{
	position:absolute;
	width:1024px;
	background-color:#FFFFFF;
	padding:0 10px;
	
	-o-box-shadow: 10px 10px 5px #888;
	-moz-box-shadow: 10px 10px 5px #888;
	-webkit-box-shadow: 10px 10px 5px #888;
	box-shadow: 0px 0px 25px #666;

}
	
</style>    
    

</head>

<body >
	<div class="wrap">
	<!-- Navigation Bar -->
    
	<div class="navbar navbar-inverse navbar-fixed-top">
    	<div class="navbar-inner">
        	<div class="container">
            	<a class="brand" href="index.php"> STUDENT </a>
                <div class="nav-collapse collapse">
                	
                      	
						
						<?php
						if(isset($_SESSION['name']))
						{
						?>
							<div style="float:right; margin-top: 2px;color: #ffffff;font-size: 17px;margin-right:6px;">
						<?php	echo "Welcome &nbsp;<a href=\"viewprofile.php\">".$_SESSION['fname']; ?>  </a>
						
						<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"../logout.php\" class=\"btn btn-info\">Logout</a>";
						}
						else
						{
						?>	
						<div style="float:right; margin-right:-17px;">
						<a href="#myModal" role="button" class="btn btn-info" data-toggle="modal" style="margin-right:20px;" data-target="#myModal">Sign In</a>
                       <a href="#myModal1" role="button" class="btn btn-info" data-toggle="modal" style="margin-right:20px;" data-target="#myModal1">Sign Up</a>
                       <?php } ?>
					   </div>
                 </div>	          
    		</div>
         </div>
    </div>
    <!-- End Of Navigation Bar -->

    <!-- Sign In -->
	
    
    <div style="margin-top:50px;background-color:#FFFFFF;">
    	<a href="index.php"><img src="../images/gtu.png" style="height:120px; width:100px; padding:20px;" /></a>
        	
            	<a class="head" href="index.php" style="text-decoration:none; font-size:24px; margin-left:20px;">Project Information Management System</a> 
            
    </div>
    <div class="navbar">
  		<div class="navbar-inner">
		    
			    <ul class="nav">
				<li><a href="../student/index.php">Student's Home</a></li>
			 
			      <li><a href="../student/viewprofile.php">Profile</a></li>
			 <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Project Details <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="../student/editprofile3.php">Group Details</a></li>
		   <li><a href="../student/viewprojectprofile.php">View Project Details</a></li>
          <li><a href="../student/viewprojectprofile.php">Enter Project Details</a></li>
        </ul>
      </li>
				  
			    </ul>
		  </div>
  
	</div>
    <!-- Navbar Starts Here -->
    <div class="navbar">
  		<div class="navbar-inner">
		    <a class="brand" style="color:#000;">Edit Your Profile</a>
			    <!--<ul class="nav">
               
			      <li class="active"><a href="student.php">Student</a></li>
			      <li><a href="industry.php">Industry</a></li>
			      <li><a href="faculty.php">Faculty</a></li>
			    </ul>
                <form class="navbar-search pull-left" style="float:right; margin-right:20px;">
  					<input type="text" class="search-query" placeholder="Search">
				</form>-->
		  </div>
  
	</div>
	
	<!-- Navbar Ends Here -->
    <!-- Profile Editing Start Here -->
    <div class="bs-docs-example">
	    <div class="hero-unit">
    	    <fieldset>
    			<legend style="color:#06F; width:450px;">Enter Your Project Information</legend>
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
							<tr>
                            	<td> Project Title<font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
                                <td><input type="text" name="title" placeholder="Enter Project Title Here" /></td>
                            </tr>
							
                            <tr>
                				<td> Brief Description <font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
                                <td><textarea rows="5" name="idef" cols="10" placeholder="Write Project Definition Here"></textarea>           
							</tr>
                            
                            <tr>
                            	<td> Area Of Project <font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
                                <td><input type="text" name="iarea" placeholder="Enter Field Here" /></td>
                            </tr>
							<tr>
                            	<td> Tools Used <font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
                                <td><input type="text" name="utool" placeholder="Enter Tool Here" /></td>
                            </tr>
							 <tr>
                            	<td> Plateform used <font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
                                <td><input type="text" name="uplatform" placeholder="Enter Plateform Here" /></td>
                            </tr>
			                <tr>
			                <tr>
                            	<td> Year Of Project <font color="#FF0000"> *&nbsp; &nbsp;  </font> </td>
                                <td> <input type="text" name="iyear" placeholder="Year" /></td>                        
                            </tr>
                            <tr>
                            	<td> Industry Name <font color="#FF0000"> *&nbsp; &nbsp;  </font> </td>
                                <td> <input type="text" name="iname" placeholder="Enter Industry Name" /></td>                        
                            </tr>
                            <tr>
                            	<td> Industry Email <font color="#FF0000"> * &nbsp; &nbsp; </font></td>
                                <td><input class="span3" type="email" name="iemail" required="required" placeholder="Enter Email Here" /></td>
                            </tr>
                           
                            <tr>
                            	<td> Address Of Industry <font color="#FF0000"> *&nbsp; &nbsp;  </font> </td>
                                <td><textarea rows="5" name="iaddr" cols="10" placeholder="Write Industry Address Here"></textarea>                           
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
            	<?php
					include('../connect.php');
					$id=$_SESSION['name'];
					$result = mysql_query("SELECT * FROM student WHERE st_id='$id'");
					while($row = mysql_fetch_array($result))
						{
							$clg=$row['st_college'];
						}	
						?>
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
                            	<td> Tools Used <font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
                                <td><input type="text" name="utool" placeholder="Enter Tool Here" /></td>
                            </tr>
							 <tr>
                            	<td> Plateform used <font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
                                <td><input type="text" name="uplatform" placeholder="Enter Plateform Here" /></td>
                            </tr>
			                <tr>
                            	<td> Year Of Project <font color="#FF0000"> *&nbsp; &nbsp;  </font> </td>
                                <td> <input type="text" name="uyear" placeholder="Year" /></td>                        
                            </tr>
								<tr>	
					<th> Institute  </th>
					<td>
					<select name="cname">					 
                        	<option> SELECT </option>
							<?php 
							
						$result = mysql_query("SELECT * FROM college ORDER BY clg_id");
						
						while($row = mysql_fetch_array($result))
						
						{
							$clg_name=$row['clg_name'];
							if($clg_name==$clg)
							{
								echo '<option value="'.$clg_name.'" selected="selected"> '.$clg_name.' </option>';
							}
							else
							{
								echo '<option value="'.$clg_name.'"> '.$clg_name.' </option>';		
							
							}
						}
						?>
                        </select>
                    </td>                    
				</tr>
							<tr>
                            	<td> Institute Email <font color="#FF0000"> * &nbsp; &nbsp; </font></td>
                                <td><input class="span3" type="email" name="uemail" required="required" placeholder="Enter Email Here" /></td>
                            </tr>                          
                            
                            
                
			                
    
							<tr>
								<td></td><td></td>
							</tr>
						</table>
					
					
         <!-- UDP Table Content Ends here -->
                    <div>
            			<button class="btn btn-info" type="submit" style="margin-left:165px;"> Next </button>
      					<button class="btn btn-info" type="reset"  style="margin-left:30px;"> Reset </button>
            		</div>
                    </form>    
			</div>           
                                

           
            </form>
             <legend style="color:#999; width:450px;"></legend>
          
           </div>
           
  		</div>  
	</div>   
    <!-- Profile Editing  Ends Here -->

</div>

    <script>
		$(document).ready(function()
		{
			//alert($(window).width());
			var x=(($(window).width())-1024)/2;
			//alert(x);
			$('.wrap').css("left",x+"px");
		});
		
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