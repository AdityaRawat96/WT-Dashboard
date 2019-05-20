<?php
session_start();
date_default_timezone_set('Asia/Calcutta');
$date=date("Y-m-d");
if(isset($_SESSION['Username'])&&$_SESSION['Rights']=='admin')
{
    $id=$_POST['id'];
    include('connection.php');
 $roh= mysqli_select_db($con,'wtintern_wt')
    or die("Unable to connect to the database server! <br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>");

    $result= mysqli_query($con,"delete from users where id='$id'");

    if(mysqli_affected_rows($con)>0)
    {
       echo "success";
        $result1=mysqli_query($con,"delete from attendance where employee_id='$id' and att_date='$date'") or die(mysqli_error($con));
    }
    else
    {
        echo "failure";
    }
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
