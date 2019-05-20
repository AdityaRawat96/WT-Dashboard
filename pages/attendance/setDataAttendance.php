<?php
include('../php/connection.php');
session_start();
if($_SESSION['Username']!=''&&$_SESSION['Rights']=='admin')
{
date_default_timezone_set('Asia/Calcutta');
$date=date("Y-m-d");
$result=mysqli_query($con,"select * from attendance_date") or die(mysqli_error($con));

$row=mysqli_fetch_array($result);
if($row['currentDate']!=$date)
{
    $result1=mysqli_query($con,"select * from users where rights='employee'") or die(mysqli_error($con));
    while($row1=mysqli_fetch_array($result1))
    {
        $id=$row1['id'];
        $uname=$row1['username'];
        $name=$row1['name'];
        $category=$row1['category'];
        $result2=mysqli_query($con,"insert into attendance(att_date,employee_id,employee_name,employee_category,employee_uname,in_time,out_time) values('$date','$id','$name','$category','$uname','10:00:00','17:30:00')") or die(mysqli_error($con));
    }
    $result4=mysqli_query($con,"update attendance_date set currentDate='$date'") or die(mysqli_error($con));
    echo 'Success';
}
else
{
    echo 'Success';
}
}
else
{
?>
    <script>window.open('../php/cookiesuset.php','_self')</script>
    <?php
}
?>