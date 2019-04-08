
<?php
session_start();
if($_SESSION['Username']=='')
{
    session_unset();
    session_destroy();
?> <script>window.open('../index.html','_self')</script> <?php
}
else
{
$d=$_SESSION['reportsdate'];
$e=$_SESSION['reportedate'];
$f=$_SESSION['reportcategory'];
$var=0;
$var1=0;
$var2=0;

include('connection.php');
 $roh= mysqli_select_db($con,'wtintern_wt')
    or die("Unable to connect to the database server! <br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>");

    $result= mysqli_query($con,"select * from tasks where assigned_date>='$d' and assigned_date<='$e' and task_category='$f'")
or die(mysqli_error($con));
 if(mysqli_num_rows($result)>0)
            {
                                while($row=mysqli_fetch_array($result))
                                {
                                    $p1=$row['task_id'];
                                    $p2=$row['task_name'];
                                    $p3=$row['task_category'];
                                    $p4=$row['task_deadline'];
                                    $p5=$row['task_status'];
                                    if($p5=="ONGOING")
                                    {
                                        $var++;
                                        ?>
                                                <tr class="ongoing"><td><?php echo $p1; ?></td><td><?php echo $p2; ?></td><td><?php echo $p3; ?></td><td><?php echo $p4; ?></td></tr>
                                        <?php
                                    }
                                    else if($p5=="COMPLETED")
                                    {
                                        $var1++;
                                    ?>
                                         <tr class="completed"><td><?php echo $p1; ?></td><td><?php echo $p2; ?></td><td><?php echo $p3; ?></td><td><?php echo $p4; ?></td></tr>
                                   <?php
                                    }
                                    else
                                    {
                                        $var2++;
                                    }
                                }
        $_SESSION['ongoingtasks']=$var;
        $_SESSION['completedtasks']=$var1;
        $_SESSION['pendingtasks']=$var2;
            }
 else
 {
     unset($_SESSION['reportsdate']);
     unset($_SESSION['reportedate']);
     unset($_SESSION['reportcategory']);
     unset($_SESSION['no_of_employee']);
  ?>
    <script>window.open('error.php?val=1','_self');</script>
    <?php
 }
     
           
}

?>