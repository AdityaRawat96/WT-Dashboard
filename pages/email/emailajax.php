<?php
session_start();
$uname=$_POST['Username'];
$password=$_POST['Password'];

include('../php/connection.php');
$result=mysqli_query($con,"update users set password='$password' where USERNAME='$uname'") or die(mysqli_error($con));
if($result)
{
   $_SESSION['Username']=$uname;
}
else
{
    echo "failure";
}

?>