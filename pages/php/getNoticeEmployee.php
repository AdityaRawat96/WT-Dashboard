<?php
session_start();
if(isset($_SESSION['Username'])&&$_SESSION['Rights']=='employee')
{
  $a=$_SESSION['Username'];

  include('connection.php');
  $roh=mysqli_select_db($con,'wtintern_wt')
  or die('Connection failed');

  $result=mysqli_query($con,"select * from users where username ='$a'");
  $row=mysqli_fetch_array($result);
  $category=strtoupper($row['category']);
  $counter=0;

  $sql= mysqli_query($con, "SELECT * FROM Notice where notice_department='ALL' or notice_department='$category' ORDER by notice_id DESC LIMIT 5")
  or die(mysqli_error($con));

  while($row=mysqli_fetch_array($sql)){
    //    $counter++;
    $p1=$row['notice_id'];
    $p2=$row['admin_id'];
    $p3=$row['admin_name'];
    $p4=$row['notice_date'];
    $p5=$row['notice_head'];
    $p6=$row['notice_body'];
    $p7=$row['notice_department'];
    if($p7=="ALL"){
      echo '<h3 class="accordion-header md-bg-blue-300">'.$p5.'</h3><div class="accordion-content" data-wrapper="true" style="overflow:hidden;height:0;position:relative;" aria-expanded="false"><div><div><small><strong>By:&nbsp;'.$p3.'&nbsp; on &nbsp;'.$p4.'</strong><strong>&nbsp;&nbsp;For:&nbsp;'.$p7.'</strong></small></div><p>'.$p6.'</p></div></div>';
    }
    else{
      $color="blue";
      echo '<h3 class="accordion-header md-bg-blue-300">'.$p5.'</h3><div class="accordion-content" data-wrapper="true" style="overflow:hidden;height:0;position:relative;" aria-expanded="false"><div><div><small><strong>By:&nbsp;'.$p3.'&nbsp; on &nbsp;'.$p4.'</strong><strong>&nbsp;&nbsp;For:&nbsp;<span style="color:'.$color.'">'.$p7.'</span></strong></small></div><p>'.$p6.'</p></div></div>';
    }
  }

  $var=0;
  $var1=0;
  $userId = $_SESSION['id'];
  $sql= mysqli_query($con, "SELECT * FROM tasks where assigned_to = '$userId'") or die(mysqli_error($con));
  while($row=mysqli_fetch_array($sql)){
    $category=$row['task_status'];
    if($category=="COMPLETED")
    {
      $var++;
    }
    else if($category=="ONGOING")
    {
      $var1++;
    }
  }
  echo 'myvarcompleted'.$var;
  echo 'myvarongoing'.$var1;
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
