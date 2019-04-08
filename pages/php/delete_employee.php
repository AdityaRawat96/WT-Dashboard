<?php 

    $id=$_POST['id'];
    include('connection.php');
 $roh= mysqli_select_db($con,'wtintern_wt')
    or die("Unable to connect to the database server! <br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>");

    $result= mysqli_query($con,"delete from users where id='$id'");

    if(mysqli_affected_rows($con)>0)
    {
       echo "success"; 
    }
    else
    { 
        echo "failure";   
    }


?>