<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="pims"; // Database name
$tbl_name="branch";

mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

 $branch=$_POST['branch'];

// echo "Branch :".$branch."<br />";
 $sql="INSERT INTO branch(branch_name) VALUES ('$branch')";
 $result=mysql_query($sql);
 
 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Welcome To TEST</title>


</head>

<body >
	
    
        	<form method="post" action="test1.php">
            	
			
				<table cellpadding="1" cellspacing="1" class="table table-hover">
				
                <tr>	
					<td> Branch <font color="#FF0000"> *&nbsp; &nbsp;  </font>  </td>
					<td>
                    <input type="text" name="branch"></input>
                    </td>                    
				</tr>
                
                
                
        

                
   			</table>
            <div>
            	<button  type="submit" style="margin-left:135px;"> Save </button>
      			<button  type="reset" style="margin-left:30px;"> Reset </button>
            </div>
            </form>

           
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
	
