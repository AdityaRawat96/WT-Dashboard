<?php
session_start();
$val=$_POST['value'];
$uname=$_SESSION['Username'];
if($val==1)
{
    include('connection.php');
    $result=mysqli_query($con,"select * from users where username='$uname'");
    $row=mysqli_fetch_array($result);
    $id=$row['id'];
    $result=mysqli_query($con,"update leave_employee set seen_status='seen' where id='$id' and status!='0'");
    
}
else
{
    
}

?>