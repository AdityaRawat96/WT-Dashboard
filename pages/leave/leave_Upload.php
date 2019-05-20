<?php
session_start();
if(isset($_SESSION['Username'])&&$_SESSION['Rights']=='admin')
{
$leave_id=$_POST['leave_id'];
$status=$_POST['ar'];
$reason=$_POST['reason'];

include('../php/connection.php');

if(strcmp($status,"accept")==0)
{
  mysqli_query($con,"UPDATE leave_employee SET status = '1',reason='' WHERE leave_id = '$leave_id'") or die(mysqli_error($con));
}

else if(strcmp($status,"reject")==0)
{
  mysqli_query($con,"UPDATE leave_employee SET status = '-1',reason='$reason' WHERE `leave_employee`.`leave_id` = '$leave_id'")  or die(mysqli_error($con));
}
}
else
{
     session_unset();
    session_destroy();
    ?>
    <script>window.open('../php/cookiesunset.php','_self')</script>
    <?php
}
?>
