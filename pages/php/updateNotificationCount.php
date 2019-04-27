<?php
session_start();
include('connection.php');

$userId=$_SESSION['id'];
$notificationCount = $_SESSION['newNotificationCount'];

$result= mysqli_query($con,"select * from users where id='$userId'")
or die('Uppss.. an Error accured...(unable to process this request)<br>Reason : &nbsp;'. mysqli_error($con));

if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_array($result))
  {
    $sql = "UPDATE users SET notification_count = '$notificationCount' WHERE id = '$userId' ";

    if (mysqli_query($con, $sql)) {
        $_SESSION['notificationCount'] = $notificationCount;
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
  }
}
 ?>
