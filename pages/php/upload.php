<?php
session_start();
if($_SESSION['Username']!=''&&$_SESSION['Rights']=='admin')
{
include_once 'connection.php';
$generator = "1abcd3efgh5yz7ijkl90mnop24qrst6uvwx8";

$result = "";

for ($i = 1; $i <= 8; $i++) {
  $result .= substr($generator, (rand()%(strlen($generator))), 1);
}
$fname=$_POST['confirmfname'];
$lname=$_POST['confirmlname'];
$email=$_POST['confirmemail'];
$dob=$_POST['confirmdob'];
$time = strtotime($dob);

$newformat = date('Y-m-d',$time);
$category=$_POST['confirmskill'];

$contact=$_POST['confirmphone'];
$address1=$_POST['confirmcaddress'];
$address2=$_POST['confirmpaddress'];
$name=$fname." ".$lname;
$username="WT_".$fname.substr($lname,0,2).rand(10,1000);
date_default_timezone_set("Asia/Calcutta");
$time= date("H:i:s");
$date=date("y-m-d");
$status='Unconfirmed';
$password=$result;


require("../email/class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = "wtsolutions.cc";

$mail->SMTPAuth = true;
$mail->Port = 587;
$mail->Username = "example@wtsolutions.cc";
$mail->Password = "Tiger@1995";

$mail->setFrom('example@wtsolutions.cc', 'Example');

$mail->addAddress($email, $name);
$mail->addReplyTo('example@wtsolutions.cc', 'Example');
$mail->isHTML(true);

$mail->Subject = 'New Mayfair Business Centre Inquiry Recieved';
$mail->Body    = '
<html>
<body>
<center><img style="width: 100%; height: 90%;" src="https://cryptotrackerapp.000webhostapp.com/wtEmail.png"></center><br>
<h4>Hello Sir/Mam,<br><br>Dear,<span style="text-transform:capitalize;"> <B>'.$name.'</B></span>Congratulations! You have been successfully registered. Please use these credential to login to your account.<br><br><br>

Username<span style="color:red;text-transform:capitalize;">'.$username.'</span><br>
Password<span style="color:red;text-transform:capitalize;">'.$password.'</span><br>

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
  $generator = "9870634521";

  $adder = "";

  for ($i = 1; $i <= 3; $i++) {
    $adder .= substr($generator, (rand()%(strlen($generator))), 1);
  }
  if(isset($_POST['imagebase64'])){
        $data = $_POST['imagebase64'];
        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);
        $data = base64_decode($data);
        $path='../../assets/userImages/'.$contact.$adder.'.png';
        file_put_contents($path, $data);
        $sql= mysqli_query($con,"insert into users(name,username,password,email,contact,dob,category,status,date,time,permanent_address,temprory_address,img_path,rights) values ('$name','$username','$password','$email','$contact','$newformat','$category','$status','$date','$time','$address1','$address2','$path','employee')")
        or die("eror in sql");
    }
    $resultget=mysqli_query($con,"select id from users where username='$username'");
    $row=mysqli_fetch_array($resultget);
    $accessid=$row['id'];
    $result2=mysqli_query($con,"insert into attendance(att_date,employee_id,employee_name,employee_category,employee_uname,in_time,out_time) values('$date','$accessid','$name','$category','$username','10:00:00','17:30:00')") or die(mysqli_error($con));
}
    }
else
{
?>
    <script>window.open('../php/cookiesuset.php','_self')</script>
    <?php
}
?>
