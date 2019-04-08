<?php 

    $id=$_POST['id'];
    include('connection.php');

    $result=mysqli_query($con,"delete from tasks where task_id='$id'");
    if(mysqli_affected_rows($con)>0)
    {
       echo "success"; 
    }
    else
    { 
        echo "failure";   
    }

?>