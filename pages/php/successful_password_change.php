<?php
session_start();
$pwd=$_POST['Password'];
$user=$_SESSION["Username"];
include('connection.php');

 $roh= mysqli_select_db($con,'project')
    or die("Unable to connect to the database server! <br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>"); 
    
   $sql="UPDATE users SET PASSWORD='$pwd',STATUS='Confirmed' where USERNAME='$user'";

    if(mysqli_query($con,$sql))
    {
        echo "done";
    }
    else
    {
        ?><script type="text/javascript">window.alert("Our Server is not responded correctly. Please try again later. Sorry for Inconvenience");</script>
        <?php
        echo "notdone";
    }
?>