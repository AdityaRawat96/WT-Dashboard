<?php
$userId=$_POST['userId'];
$taskId=$_POST['taskId'];
$userIdName=$_POST['userIdName'];
date_default_timezone_set('Asia/Calcutta');
$date=date("Y-m-d");
echo $date;
// echo $userId." ".$taskId." ".$userIdName;

include('connection.php');

$roh=mysqli_select_db($con,'wtintern_wt')
or die('Connection failed');


$sql= mysqli_query($con, "UPDATE tasks SET assigned_to='$userId',assigned_employee='$userIdName',task_status='ONGOING',assigned_date='$date',task_cpercentage=0 where task_id='$taskId'")
      or die(mysqli_error($con));

if($sql)
{
  echo "Success";
}
else {
  echo "Failure";
}

 ?>
