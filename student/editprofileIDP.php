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
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">    
	<script src="js/jquery.js"></script>
    <script src="js/sample.js"></script>
	
	<script src="js/bootstrap.min.js"></script>
    
	
<style>
	.idp
	{
	
	}
	
	.udp
	{
		
	}

	body
	{
		background-image:url(images/1.png);
		background-repeat:repeat;
	}
	.modal-body
	{
		background-image:url(images/.jpg);
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
            	<a class="brand" href="index.php"> Project Management </a>
                <div class="nav-collapse collapse">
                	<ul class="nav">
                    	<li class="active">
                        	<a href="index.php"> Home </a></li>
                         <li><a href="about.php"> About </a></li>
                         <li><a href="contact.php"> Contact </a></li>
                      </ul>
                      
                      	
						
						<?php
						/*if(isset($_SESSION['name']))
						{
						?>
							<div style="float:right; margin-top: 2px;color: #ffffff;font-size: 17px;margin-right:6px;">
						<?	echo "Welcome &nbsp;".$_SESSION['name']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
						}
						else
						{
						?>	
                      <? }*/ ?>
					   <!-- </div>-->
                 </div>	          
    		</div>
         </div>
    </div>
    <!-- End Of Navigation Bar -->

    
		
            
            
            
	 
  
        <!-- Layout Starts Here 
    	<div style="margin-top:200px;">
    	<div class="container-fluid">
		  <div class="row-fluid">
		    <div class="span2">
		      <!--Sidebar content
              <h1> SideBar Content </h1>
		   </div>
		    <div class="span10">
		      <!--Body content
              
              <h1>Body Content</h1>
		   </div>
		  </div>
		</div>
        </div>
   	
    <!-- Layout Ends Here -->
    
    
    <div style="margin-top:50px;background-color:#FFFFFF;">
    	<a href="index.php"><img src="images/gtu.png" style="height:120px; width:100px; padding:20px;" /></a>
        	
            	<a class="head" href="index.php" style="text-decoration:none; font-size:24px; margin-left:20px;">Project Information Management System</a> 
            
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
        			<form name="idp" method="post" action="editpro2.php" onsubmit="return formValidation()">
            	
						<table style="margin-top:20px;" >		   
							<tr>
                				<td> Project Title <font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
                                <td><textarea rows="5" name="ititle" cols="10" placeholder="Write Project Title here"></textarea>           
							</tr>
							<tr>
                				<td> Project Brief Description <font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
                                <td><textarea rows="5" name="idef" cols="10" placeholder="Write Project Defination here"></textarea>           
							</tr>
                            <tr>	
								<td> Field <font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
								<td>
                    				<select name="ifield">
		                        	<option> Select </option>
		                            <option value="civil"> Civil </option>
		                            <option value="computer"> Computer </option>
		                            <option value="electrical"> Electrical </option>
		                            <option value="et"> Electronics & Tele. Commu.</option>
		                            <option value="it"> IT </option>
		                            <option value="mechanical"> Mechanical </option>
		                            <option value="production"> Production </option>
			
			                        </select>
			                    </td>                    
							</tr>
                            <tr>
                            	<td> Area Of Project <font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
                                <td><input type="text" name="iarea" placeholder="Enter Field Here" /></td>
                            </tr>
			                <tr>
                            	<td> Year Of Project <font color="#FF0000"> *&nbsp; &nbsp;  </font> </td>
                                <td> <input type="text" name="iyear" placeholder="Year" /></td>                        
                            </tr>
                            <tr>
                            	<td> Industry Name <font color="#FF0000"> *&nbsp; &nbsp;  </font> </td>
                                <td> <input type="text" name="iname" placeholder="Enter Industry Name" /></td>                        
                            </tr>
                            <tr>
                            	<td>Industry Email <font color="#FF0000"> * &nbsp; &nbsp; </font></td>
                                <td><input class="span3" type="email" name="iemail" required="required" placeholder="Enter Email Here" /></td>
                            </tr>
                           
                            <tr>
                            	<td> Address Of Industry <font color="#FF0000"> *&nbsp; &nbsp;  </font> </td>
                                <td><textarea rows="5" name="iaddr" cols="10" placeholder="Write Industry Address Here"></textarea>                           
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