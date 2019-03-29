<?php
include_once 'connection.php';
 // echo "hello";
  //echo "<script type='text/javascript'>alert('$message');</script>";

$fname=$_POST['confirmfname'];
$lname=$_POST['confirmlname'];
$email=$_POST['confirmemail'];
$dob=$_POST['confirmdob'];
$category=$_POST['confirmskill'];

$contact=$_POST['confirmphone'];
$address1=$_POST['confirmcaddress'];
$address2=$_POST['confirmpaddress'];
$name=$fname." ".$lname;
$username="WT_".$fname.substr($lname,0,2).rand(10,1000);
date_default_timezone_set("Asia/Calcutta");
$time= date("H:i:s");
$date=date("d-m-y");
$status='Unconfirmed';
$password=rand(50,10000).$username;

if(is_array($_FILES)) {
	//echo $fname.$lname.$category;
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
$sourcePath = $_FILES['userImage']['tmp_name'];
$targetPath = "../images/".$_FILES['userImage']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {

 rename($targetPath, '../images/'.$contact.'.jpg');

$d='../images/'.$contact.'.jpg';

// $sql= mysql_query("insert into health_form(name,email,designation,phone,photo_path,facebook,twitter,date,form_no) values ('$a','$c','$f','$h','$d','$i','$j','$g','$e')")

// or die('Uppss.. an Error accured...(unable to process this request)' );


$sql= mysqli_query($con,"insert into users(name,username,password,email,contact,dob,category,status,date,time,permanent_address,temprory_address,img_path) values ('$name','$username','$password','$email','$contact','$dob','$category','$status','$date','$time','$address1','$address2','$d')")
        or die("eror in sql");
}
}
}
?>
