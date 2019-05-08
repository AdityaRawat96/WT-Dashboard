<?php
$taskId=$_POST['taskId'];
$taskProgress=$_POST['progress'];
date_default_timezone_set('Asia/Calcutta');
$date=date("Y-m-d");

include('connection.php');
if($taskProgress != 100){
  $sql= mysqli_query($con, "UPDATE tasks SET task_cpercentage=$taskProgress where task_id='$taskId'")
        or die(mysqli_error($con));
}
else{
  $sql= mysqli_query($con, "UPDATE tasks SET task_status='COMPLETED', task_cpercentage='100', completed_on='$date' where task_id='$taskId'")
        or die(mysqli_error($con));
}

if($sql)
{
  echo "Success";
}
else {
  echo "Failure";
}
 ?>
