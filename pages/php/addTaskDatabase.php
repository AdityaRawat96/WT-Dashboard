<?php
include("../php/connection.php");
$task_category = $_POST['task_category'];
$task_id = $_POST['task_id'];
$task_name = $_POST['task_name'];
$task_description = $_POST['task_description'];
$task_deadline = $_POST['task_deadline'];
?>
<?php

include('connection.php');
 $roh= mysqli_select_db($con,'wtintern_wt')
  or die("Unable to connect to the database server!");
$sql= mysqli_query($con,"insert into tasks(task_category,task_id,task_name,task_description,task_deadline) values ('$task_category','$task_id',$task_name,'$task_description','$task_deadline')")

or die('Uppss.. an Error accured...(unable to process this request)br>Reason : &nbsp;'. mysqli_error($con).'<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK class=buttons id=1 onclick=cancelit();></center>' );



echo"Data sucessfully Uploaded";
 ?>
