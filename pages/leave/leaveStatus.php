<?php
include('../php/connection.php');
session_start();
	$a=$_SESSION['Username'];
 	$sql=mysqli_query($con,"select * from users where username='$a'") or die(mysqli_error($con));
    $row = mysqli_fetch_array($sql);
    $id=$row['id'];
    $sql1=mysqli_query($con,"select * from leave_employee where id='$id'") or die(mysqli_error($con));
    
    while($row1 = mysqli_fetch_array($sql1))
    {
    $leave_id=$row1['leave_id'];
    $status=$row1['status'];
   // echo $status;
    $sql2=mysqli_query($con,"select * from leave_employee where leave_id='$leave_id'") or die(mysqli_error($con));
    $row2 = mysqli_fetch_array($sql2);	
     if($status==1)
     	echo "leave accepted of leave id:".+$leave_id;
     else if($status==-1)
     	echo "leave rejected of leave id:".+$leave_id;
     else
     	echo "leave not seen of leave id:".+$leave_id;

     echo "<br>";
    }	
    	
    
    
    
?>