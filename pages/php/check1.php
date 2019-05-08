<?php

session_unset();
session_destroy();
session_start();

$a=$_POST['Username'];
$b=$_POST['Password'];

$_SESSION["Username"] = "";
$_SESSION['checkCounter']=0;
$counter=0;
include('connection.php');
$roh= mysqli_select_db($con,'wtintern_wt')
or die("Unable to connect to the database server! <br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>");

$result= mysqli_query($con,"select * from users where USERNAME='$a'")
or die('Uppss.. an Error accured...(unable to process this request)<br>Reason : &nbsp;'. mysqli_error($con));

if(mysqli_num_rows($result)>0)
{
  $_SESSION['Username']=$a;
  while($row=mysqli_fetch_array($result))
  {
    $p0=$row['id'];
    $p1=$row['name'];
    $p2=$row['username'];
    $p3=$row['password'];
    $p4=$row['status'];
    $p5=$row['rights'];
    $p6=$row['category'];
    $p7=$row['notification_count'];

    if(strcmp($b,$p3)==0)
    {
      $_SESSION['id']=$p0;
      $_SESSION['Rights']=$p5;
      $_SESSION['name']=$p1;
      $_SESSION['department']=$p6;
      $_SESSION['notificationCount']=$p7;
      $counter=1;
      if(strcmp($p5,'admin')==0)
      {
        echo "a".$p4;
      }
      else
      {
        echo $p4;
      }
      break;
    }
  }
  if($counter==0)
  {
    echo "password_problem";
    session_unset();
    session_destroy();
    return false;
  }

}
else
{

  echo "username_problem";
  session_unset();
  session_destroy();
  return false;
}

?>
