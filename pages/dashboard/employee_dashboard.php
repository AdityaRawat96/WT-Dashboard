<html>
        <head>

        </head>
        <body>
             <table cellpadding="10" cellspacing="10">
                    <thead>
                        <tr>
                            <th>Task ID</th>
                            <th>Task Name</th>
                            <th>Task Description</th>
                            <th>Task Deadline</th>
                            <th>Task Assigned Date</th>
                            <th>Task Completion Percentage</th>
                        </tr>
                    </thead>
                    <tbody>
<?php
include('../php/connection.php');
session_start();
$a=$_SESSION['Username'];
$result= mysqli_query($con,"select * from users where USERNAME='$a'")
or die('Uppss.. an Error accured...(unable to process this request)<br>Reason : &nbsp;'. mysqli_error($con));

$row=mysqli_fetch_array($result);
$id=$row['id'];

$result= mysqli_query($con,"select * from tasks where assigned_to='$id'")
or die('Uppss.. an Error accured...(unable to process this request)<br>Reason : &nbsp;'. mysqli_error($con));
 if(mysqli_num_rows($result)>0)
    {

                         while($row=mysqli_fetch_array($result))
                        {
                                $tid=$row['task_id']; 
                                $tname=$row['task_name'];
                                $tdesc=$row['task_description'];
                                $tdeadline=$row['task_deadline'];
                                $assigndate=$row['assigned_date'];
                                $taskcpercentage=$row['task_cpercentage'];
                             ?>
                        <tr><td><?php echo $tid; ?></td><td><?php echo $tname; ?></td><td><?php echo $tdesc; ?></td><td><?php echo $tdeadline; ?></td><td><?php echo $assigndate; ?></td><td><?php echo $taskcpercentage; ?></td></tr>
                        <?php
                         }
                        ?>  

<?php
       }
     
?>
                        </tbody>
                </table>
</body>
</html>
