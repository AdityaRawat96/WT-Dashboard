<?php
session_start();
if($_SESSION['Username']!=''&&$_SESSION['Rights']=='admin')
{
include('../php/connection.php');
$date=date("Y-m-d");
$result=mysqli_query($con,"select * from attendance_date") or die(mysqli_error($con));
$id=$_POST['Id'];
$inTime=$_POST['intime'];

$outTime=$_POST['outtime'];
if($inTime==''||$inTime=='absent')
{
    $inTime='10:00:00';
}
if($outTime==''||$outTime=='absent')
{
    $outTime='17:30:00';
}
$pa=$_POST['pa'];
if($pa=='absent')
{
       $result=mysqli_query($con,"update attendance set in_time='absent',out_time='absent' where employee_id='$id' and att_date='$date'") or die(mysqli_error($con));
}
else
{
    $result=mysqli_query($con,"update attendance set in_time='$inTime',out_time='$outTime' where employee_id='$id' and att_date='$date'") or die(mysqli_error($con));
}
if($result)
{
    echo "Success";
}
}
else
{
?>
    <script>window.open('../php/cookiesuset.php','_self')</script>
    <?php
}
?>