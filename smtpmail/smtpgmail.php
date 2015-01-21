<?php
include "classes/class.phpmailer.php"; // include the class name

if(!isset($_SESSION['name']) || (trim($_SESSION['name']) == '')) {
		header("location: ../index.php");
		exit();
	}
else{
$id=$_SESSION['name'];
}
result=mysql_query("SELECT * FROM student where st_id='$id'");
$fname=$_row['st_fname'];
$lname=$_row['st_lname'];

echo $id.$fname.$lname;
if(isset($_POST['send'])){
	$emailto = $_SESSION['emailto'];
	$emailfrom = pimssupport@gmail.com;
	$pass = $_SESSION['mailpass'];
	$subject = "Your username and password" ;
	$body = "Dear user,
				I would like to inform you that your project partner    ";

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = $emailfrom;
$mail->Password = $pass;
$mail->SetFrom("anyemail@gmail.com");
$mail->Subject = $subject;
$mail->Body = "<b>".$body."<br/><br/></b>";
$mail->AddAddress($emailto);
 if(!$mail->Send()){
	echo "Mailer Error: " . $mail->ErrorInfo;
}
else{
	echo "Message has been sent";
}
}
?>