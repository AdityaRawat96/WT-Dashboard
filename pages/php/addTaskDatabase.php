<?php
session_start();
if(isset($_SESSION['Username'])&&$_SESSION['Rights']=='admin')
{
$task_id=$_POST['task_id'];
$task_category=$_POST['task_category'];
$task_name=($_POST['task_name']);
$task_description=$_POST['task_description'];
$task_deadline=$_POST['task_deadline'];
$task_status=$_POST['task_status'];

include('../php/connection.php');


$sql= mysqli_query($con, "insert into tasks(task_id,task_category,task_name,task_description,task_deadline,task_status) values ('$task_id','$task_category','$task_name','$task_description','$task_deadline','$task_status')")

or die('Uppss.. an Error accured...(unable to process this request)<br>Reason : &nbsp;'. mysqli_error($con).'<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK class=buttons id=1 onclick=cancelit();></center>' );



echo"Data sucessfully Uploaded";
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
