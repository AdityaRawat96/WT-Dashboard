<?php
    $uname=$_POST['Username'];
    include('../php/connection.php');
   $result= mysqli_query($con,"select * from users where USERNAME='$uname'")
or die('Uppss.. an Error accured...(unable to process this request)<br>Reason : &nbsp;'. mysqli_error($con));
if(mysqli_num_rows($result)>0)
{
$row=mysqli_fetch_array($result);
    $name = $row['name'];
    $email = $row['email'];
  $generator = "1357902468"; 
  $otp="";
    for ($i = 1; $i <= 6; $i++) { 
        $otp .= substr($generator, (rand()%(strlen($generator))), 1); 
    } 

require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = "wtsolutions.cc";

$mail->SMTPAuth = true;
//$mail->SMTPSecure = "ssl";
$mail->Port = 587;
$mail->Username = "example@wtsolutions.cc";
$mail->Password = "Tiger@1995";    /*Password*/

$mail->setFrom('example@wtsolutions.cc', 'Example');

$mail->addAddress($email, $name);
//$mail->addAddress('bhrohit009@gmail.com', 'rohit bhatt');
$mail->addReplyTo('example@wtsolutions.cc', 'Example');
//$mail->addCC('pledgerispan25@dipr-uk.com');
//$mail->addBCC('pledgerispana25@dipr-uk.com');

/*$mail->addAttachment('/var/tmp/file.tar.gz');   */      // Add attachments
/*$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); */   // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'New Mayfair Business Centre Inquiry Recieved';
$mail->Body    = '
<html>
<body>
<center><img style="width: 100%; height: 90%;" src="https://cryptotrackerapp.000webhostapp.com/wtEmail.png"></center><br>
	<h4>Hello Sir/Mam,<br><br>Dear,<span style="text-transform:capitalize;"> <B>'.$name.'</B></span><strong>OTP</strong> for your password change request is <br><br><br>

	<span style="color:red;text-transform:capitalize;">'.$otp.'</span><br>
	Kindly use this otp to change your password.

	</h4>
	<br>
	This is a system generated email so do not reply.
</body>
</html>';

$mail->AltBody = 'Hi Thanks for contacting us we will reach out to you within 24 hours.';

if(!$mail->send()) {
echo "error";
} 
else {

echo $otp;
}

}
else
{
    echo 'usernameproblem';
}

?>
