<?php
include('../php/connection.php');
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
       $result=mysqli_query($con,"update attendance set in_time='absent',out_time='absent' where employee_id='$id'") or die(mysqli_error($con));
}
else
{
    $result=mysqli_query($con,"update attendance set in_time='$inTime',out_time='$outTime' where employee_id='$id'") or die(mysqli_error($con));
}
if($result)
{
    echo "Success";
}
?>