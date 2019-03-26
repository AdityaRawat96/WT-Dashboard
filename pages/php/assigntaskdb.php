<?php
$userId=$_POST['userId'];
$taskId=$_POST['taskId'];
$userIdName=$_POST['userIdName'];

// echo $userId." ".$taskId." ".$userIdName;

include('connection.php');

$roh=mysqli_select_db($con,'wtintern_wt')
or die('Connection failed');


$sql= mysqli_query($con, "UPDATE tasks SET assigned_to='$userId',assigned_employee='$userIdName' where task_id='$taskId'")
      or die(mysqli_error($con));


if($sql)
{
  echo "Success";
}
else {
  echo "Failure";
}

 ?>
