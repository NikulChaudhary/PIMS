<?php 

session_start();


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Welcome To Projrct Management Portal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    	<!-- Bootstrap -->
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">    
	<script src="js/jquery.js"></script>
    <script>
		$(document).ready(function()
		{
			//alert($(window).width());
			var x=(($(window).width())-1024)/2;
			//alert(x);
			$('.wrap').css("left",x+"px");
		});

	</script>
	
	<script src="js/bootstrap.min.js"></script>
    
	
<style>

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
						if(isset($_SESSION['name']))
						{
						?>
							<div style="float:right; margin-top: 2px;color: #ffffff;font-size: 17px;margin-right:6px;">
						<?php	echo "Welcome &nbsp;<a href=\"viewprofile.php\">".$_SESSION['name']; ?>  </a>
						
						<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
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
	<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    	<h3 id="myModalLabel">Sign In</h3>
	    </div>
		<form class="form-horizontal" method="post" action="login.php" style="margin:0px;">
			<div class="modal-body">
	    		 <div class="control-group">
				 	<label class="control-label" for="inputEmail">User Name</label>
				    	<div class="controls">
				      		<input type="text" name="uname" placeholder="User Name">
				    	</div>
				</div>
				<div class="control-group">
				    <label class="control-label" for="inputPassword">Password</label>
				 	   <div class="controls">
				    	  <input type="password" name="pass" placeholder="Password">
				       </div>
				</div>
				<div class="control-group">
				    <div class="controls">
					      <label class="checkbox">
				    	  <input type="checkbox"> Remember me
				      	  </label>
				      
				    </div>
				</div>
			</div>
			<div class="modal-footer">
				
				<button type="submit" class="btn btn-info">Sign in</button>
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			</div>
		</form>
	</div>
	<!-- End Of Sign In -->
    <!-- Sign Up -->
    
    <div id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-header" >
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		    <h3 id="myModalLabel">Register Here</h3>
	  </div>
	  <div class="modal-body">
		    <form name="registration" method="post" action="register.php" onsubmit="return formValidation()">
			<table style="margin-top:20px;" >		
				<tr>	
					<td name:> User Name <font color="#FF0000"> * </font>  </td>
					<span id="c" style="visibility:hidden;"><span>
					<td> <input type="text" name="uid" placeholder="User Name" />
					<span id="u1"><span>
					<br /></td>
				</tr>
				<tr>
					<td> First Name <font color="#FF0000"> * </font> &nbsp; </td>
					<td> <input type="text" id="fn" name="fname" placeholder="Enter Your First Name " />
	<!--				<span id="fn1" style="visibility:hidden;">Must Contain Atleast 6 character <span>
					<span id="id1" style="visibility:hidden;"></span><br /></td>-->
				</tr>
				<tr>
					<td> Last Name <font color="#FF0000"> * </font> &nbsp; </td>
					<td><input type="text" name="lname" id="ln" placeholder="Enter Your Last Name"  />
<!--					<span id="ln1" style="visibility:hidden;">Must Contain Atleast 6 character <span><br /></td>-->
				</tr>
				<tr>
					<td> Profession <font color="#FF0000"> * </font> &nbsp; </td>
					<td>
                    	<select name="profession">
                        <option> Select </option>
                        <option value="Student"> Student </option>
                        <option value="Industry"> Industry </option>
                        <option value="Faculty"> Faculty </option>
                     	</select>
                    </td>
             	</tr>
				
				<tr>
					<td> Password  <font color="#FF0000"> * </font> &nbsp; </td>
					<td><input type="password" name="pass1"  /> 
					<span id="p1></span>"&nbsp; &nbsp; Must contain character and digits <br /></td>
				</tr>
				<tr>
					<td> Confritm Password <font color="#FF0000"> * </font> &nbsp; </td>
					<td><input type="password" name="pass2"  /><span id="p2"></span><br /></td>
				</tr>
				<tr>
					<td> Email Id <font color="#FF0000"> * </font> &nbsp; </td>
					<td><input class="span3" type="email" required="required" class="input-block-level" name="email" placeholder="Enter Your Email id Here" style="width:205px;"  /><span id="e1></span>"<br /></td>
				</tr>

				<tr>
					<td style="border-top:0px;"> Date of Birth <font color=red>* </font></td>
					<td style="border-top:0px;"><input type="date" class="input-medium"  name="dob"></td>
				
					<span id="d"></span>
				</tr>
				

				<tr>
					<td> Sex <font color="#FF0000"> * </font> &nbsp; </td>
					<td>
					<select style="width:90px;" name="gnd">
						<option> Male </option>
						<option> Female </option>
					</select>
				</tr>
				<tr>
				<tr />
				
				
				</div>
					
											
		</table>
		
            
            
            
	  </div>
	  <div class="modal-footer">
	    
	    <button class="btn btn-info" type="submit"> Submit </button>
        <button class="btn btn-info" type="reset"> Reset </button>
	  </div>
	  </form> 
	</div>
  
          
    <div style="margin-top:50px;background-color:#FFFFFF;">
    	<a href="index.php"><img src="images/gtu.png" style="height:120px; width:100px; padding:20px;" /></a>
        	
            	<a class="head" href="index.php" style="text-decoration:none; font-size:24px; margin-left:20px;">Project Information Management System</a> 
            
    </div>
    
    <!-- Navbar Starts Here -->
    <div class="navbar">
  		<div class="navbar-inner">
		    <a class="brand" href="index.php">Home</a>
			    <ul class="nav">
               
			      <li><a href="student.php">About</a></li>
			      <li><a href="industry.php">Contact</a></li>
				  <li><a href="faculty.php">Project Activities</a></li>
			      <li><a href="faculty.php">Departments</a></li>
			    </ul>
               <!-- <form class="navbar-search pull-left" style="float:right; margin-right:20px;">
  					<input type="text" class="search-query" placeholder="Search">
				</form>-->
		  </div>
  
	</div>
    <!-- Navbar Ends Here -->
    <div class="bs-docs-example">
	
	<div class="hero-unit">
	
	<form action="./advsearch2.php" method="get" class="form-search">
                	
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
			echo "<a href=advsearch2.php?a=".$k."><i>".$k."</i></a></br>";
		
			echo "<h4><a href=display.php?id=".$id.">".$title."</h4></a>".
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
			echo " <li><a href='advsearch2.php?a=$k&submit=Search+source+code&start=$prev'>Prev</a> </li>";    
          
//pages 
		if ($max_pages < 7 + ($adjacents * 2))   //not enough pages to bother breaking it up
		{
			$i = 0;   
			for ($counter = 1; $counter <= $max_pages; $counter++)
				{
					if ($i == $start){
						echo " <li><a href='advsearch2.php?a=$k&submit=Search+source+code&start=$i'><b>$counter</b></a></li> ";
						}
					else {
						echo " <li><a href='advsearch2.php?a=$k&submit=Search+source+code&start=$i'>$counter</a></li> ";
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
							echo " <li><a href='advsearch2.php?a=$k&submit=Search+source+code&start=$i'><b>$counter</b></a></li> ";
							}
						else {
							echo " <li><a href='advsearch2.php?a=$k&submit=Search+source+code&start=$i'>$counter</a></li> ";
							}	 
							$i = $i + $per_page;                                       
					}          
			}
//in middle; hide some front and some back
			elseif($max_pages - ($adjacents * 2) > ($start / $per_page) && ($start / $per_page) > ($adjacents * 2))
				{
					echo " <li><a href='advsearch2.php?a=$k&submit=Search+source+code&start=0'>1</a></li> ";
					echo " <li><a href='advsearch.php?a=$k&submit=Search+source+code&start=$per_page'>2</a></li> ";
					$i = $start;                 
					for ($counter = ($start/$per_page)+1; $counter < ($start / $per_page) + $adjacents + 2; $counter++)
					{
						if ($i == $start){
							echo " <li><a href='advsearch.php?a=$k&submit=Search+source+code&start=$i'><b>$counter</b></a></li> ";
							}
						else {
							echo " <li><a href='advsearch.php?a=$k&submit=Search+source+code&start=$i'>$counter</a></li> ";
							}   
						$i = $i + $per_page;                
					}
                                  
				}
//close to end; only hide early pages
			else
			{
					echo " <li><a href='advsearch.php?a=$k&submit=Search+source+code&start=0'>1</a></li> ";
					echo " <li><a href='advsearch.php?a=$k&submit=Search+source+code&start=$per_page'>2</a></li> ";
 
					$i = $start;                
					for ($counter = ($start / $per_page) + 1; $counter <= $max_pages; $counter++)
						{
							if ($i == $start){
								echo " <li><a href='advsearch.php?search=$search&submit=Search+source+code&start=$i'><b>$counter</b></a></li> ";
									}
							else {
									echo " <li><a href='advsearch.php?a=$k&submit=Search+source+code&start=$i'>$counter</a></li> ";   
								} 
							$i = $i + $per_page;              
						}
			}
}
          
//next button
if (!($start >=$numrows - $per_page))
echo " <li><a href='advsearch.php?a=$k&submit=Search+source+code&start=$next'>Next</a></li> ";    
}   

echo "</ul>";
echo "</div>";


}
		else 
		{
				echo "Search for ";
				echo  "<a href=advsearch2.php?a=".$k."><i>".$k."</i></a>";
				echo "no result found here";
		}
}		
 		
				
		//	mysql_close(); 	


?>	
	
	
	</div>
	</div>
</div>
</body>
</html>