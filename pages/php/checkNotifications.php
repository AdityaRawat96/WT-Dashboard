<?php
session_start();

include('connection.php');

$name = $_SESSION['Username'];
$fname = $name.".txt";
$file = fopen("../../assets/userData/" .$fname, 'w');

$difference=0;
$counter = 0;
$currentCount = $_SESSION['notificationCount'];
$result= mysqli_query($con,"select * from notifications order by id DESC")
or die('Uppss.. an Error accured...(unable to process this request)<br>Reason : &nbsp;'. mysqli_error($con));
$resultant = mysqli_num_rows($result);
$_SESSION['newNotificationCount'] = $resultant;
if($resultant > 0)
{
  while($row=mysqli_fetch_array($result))
  {
    $p0=$row['id'];
    $p1=$row['name'];
    $p2=$row['description'];
    $p3=$row['target'];
    $p4=$row['link'];
    if(strcasecmp($p3, "all") == 0 || strcasecmp($p3, $_SESSION['department']) == 0 || strcasecmp($p3, $_SESSION['id']) == 0){
      if($p0 > $currentCount && $counter < 10){
        $difference++;
        echo "<li class='notificationList' id='list$counter' value='$difference'><a href='$p4' style='font-weight:bold;'>$p1 $p2</a></li>";
        fwrite($file, "<li class='notificationList' id='list$counter' value='$difference'><a href='$p4' style='font-weight:bold;'>$p1 $p2</a></li>");
        $counter++;
      }
      else if($p0 <= $currentCount && $counter < 10){
        echo "<li class='notificationList' id='list$counter' value='$difference' ><a href='$p4'>$p1 $p2</a></li>";
        fwrite($file, "<li class='notificationList' id='list$counter' value='$difference' ><a href='$p4'>$p1 $p2</a></li>");
        $counter++;
      }
      else{
        fclose($file);
        break;
      }
    }
  }
}
?>
