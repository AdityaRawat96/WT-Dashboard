<?php
$noticeHead=$_POST['notice_head'];
$noticeBody=$_POST['notice_body'];
$noticeTarget=$_POST['notice_target'];
session_start();
date_default_timezone_set('Asia/Calcutta');
$date=date("Y-m-d");
if(isset($_SESSION['Username']))
{
  $a=$_SESSION['Username'];

  include('connection.php');
  $sql=mysqli_query($con,"select * from users where username='$a'")or die(mysqli_error($con));
  $row=mysqli_fetch_array($sql) or die(mysqli_error($con));
  $p1=$row['id'];
//
  $p2=$row['name'];
  $sql = "INSERT INTO Notice (admin_id, admin_name, notice_date,notice_head,notice_body, notice_department) VALUES ('$p1', '$p2', '$date', '$noticeHead', '$noticeBody', '$noticeTarget')";
  $result=mysqli_query($con,$sql);
  // $row=mysqli_fetch_array($result) or die(mysqli_error($con));
  // echo $p1;
}
else
{
  echo "Failure";
}

 ?>
