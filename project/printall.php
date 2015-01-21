<?php
	include('../connect.php');
	session_start();
	if(!isset($_SESSION['projectid']) || (trim($_SESSION['projectid']) == '')) {
		header("location: index.php");
		exit();
	}
$id=$_SESSION['name'];
$proid=$_SESSION['projectid'];

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
  	
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />


</head>

<body >
<div style="width:90% ;margin-left:60px;">
<br/><br/>
               <font style="font-family:arial ; font-size: 24px;">Project Id :<?php echo "$proid";?></font><br/><br/>
	<?php
	 echo '<center>';
               
	
	?>
	
			<div class="row-fluid">
           
                  
        
			<div class="hero-unit">
		  <font style="font-family: cursive; font-size: 24px;"> Project Information</font>
        		
		</div> <table cellpadding="1" cellspacing="1" class="table table-bordered">
				
			 <?php
			
			$result = mysql_query("SELECT * FROM student_project_information WHERE ref_id='$id' AND pro_id='$proid'");
			
					while($row = mysql_fetch_array($result))
						 {
							 echo '<tr><th>Project:</th>';
							 echo '<td><div align="left">'.$row['pro_id'].'</div></td></tr>';
							 echo '<tr><th>Project Type:</th>';
							 echo '<td><div align="left">'.$row['pro_type'].'</div></td></tr>';
							 echo '<tr><th>Project Title:</th>';
							 echo '<td><div align="left">'.$row['pro_title'].'</div></td></tr>';
							 echo '<tr><th>Project Definition.:</th>';
							 echo '<td><div align="left">'.$row['pro_def'].'</div></td></tr>';
							 echo '<tr><th>Project Area:</th>';
							 echo '<td><div align="left">'.$row['pro_area'].'</div></td></tr>';
							 echo '<tr><th>Year of Project:</th>';
							 echo '<td><div align="left">'.$row['yearofproject'].'</div></td></tr>';
							 echo '<tr><th>Project Tools Used:</th>';
							 echo '<td><div align="left">'.$row['pro_tools_used'].'</div></td></tr>';
							 echo '<tr><th>Project Platform:</th>';
							 echo '<td><div align="left">'.$row['pro_platform'].'</div></td></tr>';
							
							
						 }
			 ?> 
		</table>
          
		<div id="view-table-mentor">
							
							<?php
			
						
						$result = mysql_query("SELECT * FROM project_faculty_guide WHERE pro_id='$proid'");
				
						?>
			<div class="hero-unit">
		  <font style="font-family: cursive; font-size: 24px;"> Faculty Mentors</font>
        		
		</div>				<table class="table table-bordered">
								<thead>
                                	<tr>
                                    	
                  						<th>Name</th>
                  						<th>Designation</th>
                  						<th>Email</th>
                                        </tr>
              					</thead>
                                <tbody>
									<?php
										while($row = mysql_fetch_array($result))
										{
											$fid=$row['f_id'];
								
											$result1 = mysql_query("SELECT f_fname,f_designation,f_email FROM faculty WHERE f_id='$fid'");
											while($row=mysql_fetch_array($result1))
											{
									?>

					                <tr>
                  	                  <td><?php echo $row['f_fname']; ?></td>
					                  <td><?php echo $row['f_designation']; ?></td>
					                  <td><?php echo $row['f_email']; ?></td>
									  </tr>
								  <?php
									}
									}
				                  ?> 
																	  
								</tbody>
							</table> 
						</div>
						<?php 
						
						$r1 = mysql_query("SELECT pro_type FROM student_project_information WHERE ref_id='$id' AND pro_id='$proid'");
						while($row = mysql_fetch_array($r1))
						{
							$protype=$row['pro_type'];
						}		
						
						if($protype=="IDP")
						{
						
						?>
	<div id="view-table-mentor">
	<div class="hero-unit">
		  <font style="font-family: cursive; font-size: 24px;">Industry Representatives</font>
        		
		</div>						<table class="table table-bordered">
								<thead>
                                	<tr>
                                    	
                  						<th>Name</th>
                  						<th>Designation</th>
                  						<th>Email</th>
                                     </tr>
              					</thead>
                                <tbody>
									<?php
										while($row = mysql_fetch_array($result))
										{
											$fid=$row['f_id'];
								
											$result1 = mysql_query("SELECT f_fname,f_designation,f_email FROM faculty WHERE f_id='$fid'");
											while($row=mysql_fetch_array($result1))
											{
									?>

					                <tr>
                  	                  <td><?php echo $row['f_fname']; ?></td>
					                  <td><?php echo $row['f_designation']; ?></td>
					                  <td><?php echo $row['f_email']; ?></td>
									
                					</tr>
								  <?php
									}
									}
				                  ?> 
																	  
								</tbody>
							</table>
					
						</div>
						
						<?php } ?>
						
						<div class="hero-unit">
		  <font style="font-family: cursive; font-size: 24px;"> Project Partners</font>
        		
		</div>
<div id="view-table-mentor">
							

							<table class="table table-bordered">
								<thead>
                                	<tr>
                                    	
                  						<th>Name</th>
                  						<th>Enrollment</th>
                  						<th>Email</th>
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
					                  <td> <?php echo $row['st_enroll'];?></td>
					                  <td><?php echo $row['st_email']; ?></td>
									  
                					</tr>
								  <?php
									}
									}
				                  ?> 
																  
								</tbody>
							</table> 
						</div>
		
	</div>
    </div>
	<?php
	echo "<input type=\"button\" style=\"margin-left:280px;font-family: cursive; font-size: 15px;\" onclick=\"window.print()\" value=\"Print PDF\"></input> ";
		echo "&nbsp;Works Only with Google CROME";
	?>
	</html>
	</body>