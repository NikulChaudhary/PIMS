<?php
session_start();
include('../connect.php');
?>
<html>

<head>
<title>WOW</title>
<meta name="GENERATOR" content="Arachnophilia 4.0">
<meta name="FORMATTER" content="Arachnophilia 4.0">
<SCRIPT language=JavaScript>
function reload(f1)
{
var val=f1.cat.options[f1.cat.options.selectedIndex].value; 
if(val>0)
{
self.location='dd3.php?cat=' + val ;}
}
function reload3(form)
{

var val=f1.cat.options[f1.cat.options.selectedIndex].value; 
var val2=f1.subcat.options[f1.subcat.options.selectedIndex].value; 
if(val>0)
{
self.location='dd3.php?cat=' + val + '&cat3=' + val2 ;}
}

</script>
</head>

<body>
<?php 
if(isset($_GET['cat']))
{
$cat=$_GET['cat'];
if(isset($_GET['cat3']))
{
$subcat=$_GET['cat3'];}}?>
<div name="d">
<form class="form-inline" method="post" action="minfo.php">
                            	<table style="margin-top:50px;" >
                                	<tr>
                       					<th>Choose Guide &nbsp; &nbsp;</th>
                                      <td>				
										<select name="cat"  onchange="reload(this.form)">
										<option>-- College --</option>
												
										<?php
											
											$result = mysql_query("SELECT DISTINCT * FROM college ORDER BY clg_id");
											
											while($row = mysql_fetch_array($result))
											
											{
												$clg1=$row['clg_name'];
												$id=$row['clg_id'];
												if($id==$cat){
												echo '<option selected value="'.$id.'"> '.$clg1.' </option>';
												}
												else
												{
													echo '<option value="'.$id.'"> '.$clg1.' </option>';
												
												}
											}
											?>
											</select>
										</td>
										
										
										<td>
										<select name="subcat" onchange="reload3(this.form)">
										<option>-- Department--</option>
										<?php
										$clg=$_GET['cat'];
										if(isset($clg) and strlen($clg) > 0){
										
										$result=mysql_query("SELECT DISTINCT branch_id FROM college_branch where clg_id=$clg order by branch_id"); 
										}
											while($row = mysql_fetch_array($result))
											
											{
												$br=$row['branch_id'];
												$r=mysql_query("SELECT DISTINCT branch_name FROM branch where branch_id=$br order by branch_id"); 
												if(mysql_num_rows($r) > 0) {
		
													$member = mysql_fetch_assoc($r);
													$br_name=$member['branch_name'];
													}
												if($br==$subcat){
												echo '<option selected value="'.$br.'"> '.$br_name.' </option>';
												}
												else
												{
												echo '<option value="'.$br.'"> '.$br_name.' </option>';
												}
											}
											?>
											</select>
										</td>
											
											
											<td>
										<select name="subcat3">
										<option>-- Faculty-- </option>
												
										<?php
										$br=$_GET['cat3'];
										$r=mysql_query("SELECT * FROM branch where branch_id='$br'"); 
										while($row = mysql_fetch_array($r))
										{	$brname=$row['branch_name'];}
										$r1=mysql_query("SELECT * FROM college where clg_id='$cat'"); 
										while($row = mysql_fetch_array($r1))
										{	$clgname=$row['clg_name'];}
										if(isset($br) and strlen($br) > 0){
										
										$result=mysql_query("SELECT DISTINCT f_id,f_fname,f_lname FROM faculty where f_department='$brname' AND f_clgname='$clgname' order by f_id"); 
										}
											
											while($row = mysql_fetch_array($result))
											
											{
												$fid=$row['f_id'];
												$ffname=$row['f_fname'];
												$flname=$row['f_lname'];
												
												echo '<option value="'.$fid.'"> '.$ffname.'&nbsp'.$flname.' </option>';
												
											}
											?>
											</select>
										</td>
											
											
											
											
									</tr>
                                 </table>
                                 <div style="margin-top:15px; margin-left:105px;">
            						<button type="submit"> Add</button>
      								<button type="reset" > Reset </button>
            					 </div> 
  </form>
                                 
</div>
					 
							
</body>

</html>