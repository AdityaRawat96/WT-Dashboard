<?php
$leave_id=$_POST['leave_id'];
$status=$_POST['ar'];

include('../php/connection.php');

if(strcmp($status,"accept")==0)
{
  mysqli_query($con,"UPDATE leave_employee SET status = '1' WHERE leave_id = '$leave_id'") or die(mysqli_error($con));
}

else if(strcmp($status,"reject")==0)
{
  mysqli_query($con,"UPDATE leave_employee SET status = '-1' WHERE `leave_employee`.`leave_id` = '$leave_id'")  or die(mysqli_error($con));
}

?>
