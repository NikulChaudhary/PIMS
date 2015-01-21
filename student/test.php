<?php

 include('../connect.php');
 
 
 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Welcome To TEST</title>


</head>

<body >
	
    <div class="navbar">
  		<div class="navbar-inner">
		    <a class="brand">Edit </a> </div>
			 
			<div class="table">
        	<form method="post" action="test.php">
            	
			
				<table cellpadding="1" cellspacing="1" class="table table-hover">
				<tr>	
					<td> COllege Name: <font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
					<td> <input type="text" name="clg_name" " placeholder="Enter COllege  no" /></td>
                    
				</tr>

					<td> Address <font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
					<td> <input type="text" name="addr"  placeholder="Enter city"</td>
                    
                <tr>
                	<td> Contact No <font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
                    <td> <input type="text" name="cno"  placeholder="Enter Mobile Number"</td>
                </tr>
                

                </fieldset>
   			</table>
            <div>
            	<button class="btn btn-info" type="submit" style="margin-left:135px;"> Save </button>
      			<button class="btn btn-info" type="reset" style="margin-left:30px;"> Reset </button>
            </div>
            </form>
          
           </div>
           
  		</div>  
	</div>   
    <!-- Profile Editing  Ends Here -->
		</table>
        
		
		</div>
	
	
	<!-- Navbar Ends Here -->
<div   >
				
				<p class="pull-left" style="padding-left:30px;">&copy; 2013 Copyrights, Inc. </p>
				<p class="pull-right" style="padding-right:30px;">PIMS</p>		
			</div>
</div>

 

</body>
</html>
	
