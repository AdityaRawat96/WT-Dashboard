<?php
include('../php/connection.php');
$message=$_POST['message'];
$subject=$_POST['subject'];
$leaveFrom=$_POST['leaveFrom'];
$leaveTo=$_POST['leaveTo'];
$time1=strtotime($leaveFrom);
$time2=strtotime($leaveTo);
$newFormat1=date('Y-m-d',$time1);
$newFormat2=date('Y-m-d',$time2);
session_start();
// echo $_SESSION['Username'];
if(isset($_SESSION['Username']))
{
  $a=$_SESSION['Username'];
  $sql=mysqli_query($con,"select * from users where username='$a'") or die(mysqli_error($con));

  $row = mysqli_fetch_array($sql);
  $id=$row['id'];
  $name=$row['name'];
  $email=$row['email'];

  $status=0;
  // echo $status;
  $sql=mysqli_query($con,"insert into leave_employee(id,name,email,subject,message,status,startdate,enddate) values('$id','$name','$email','$subject','$message','$status','$newFormat1','$newFormat2')") or die(mysqli_error($con));
}
else
{
  echo "failure";
}
?>
