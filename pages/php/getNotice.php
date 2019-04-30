<?php
session_start();
if(isset($_SESSION['Username'])&&$_SESSION['Rights']=='admin')
{
include('connection.php');
$roh=mysqli_select_db($con,'wtintern_wt')
or die('Connection failed');

$sql= mysqli_query($con, "SELECT * FROM Notice ORDER BY notice_id DESC LIMIT 5")
or die(mysqli_error($con));

while($row=mysqli_fetch_array($sql)){
  $p1=$row['notice_id'];
  $p2=$row['admin_id'];
  $p3=$row['admin_name'];
  $p4=$row['notice_date'];
  $p5=$row['notice_head'];
  $p6=$row['notice_body'];
  $p7=$row['notice_department'];
  if($p7=="ALL"){
    echo '<h3 class="accordion-header md-bg-blue-300">'.$p5.'</h3><div class="accordion-content" data-wrapper="true" style="overflow:hidden;height:0;position:relative;" aria-expanded="false"><div><div><small><strong>By:&nbsp;'.$p3.'&nbsp; on &nbsp;'.$p4.'</strong><strong>&nbsp;&nbsp;For:&nbsp;'.$p7.'</strong></small></div><br><p>'.$p6.'</p></div></div>';
  }
  else{
    $color="blue";
    echo '<h3 class="accordion-header md-bg-blue-300">'.$p5.'</h3><div class="accordion-content" data-wrapper="true" style="overflow:hidden;height:0;position:relative;" aria-expanded="false"><div><div><small><strong>By:&nbsp;'.$p3.'&nbsp; on &nbsp;'.$p4.'</strong><strong>&nbsp;&nbsp;For:&nbsp;<span style="color:'.$color.'">'.$p7.'</span></strong></small></div><br><p>'.$p6.'</p></div></div>';
  }
}

$var=0;
$var1=0;
$var2=0;
$sql= mysqli_query($con, "SELECT * FROM tasks") or die(mysqli_error($con));
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
  else if($category=="PENDING")
  {
    $var2++;
  }
}
echo 'myvarcompleted'.$var;
echo 'myvarongoing'.$var1;
echo 'myvarpending'.$var2;
}
else
{
     session_unset();
    session_destroy();
    ?>
    <script>window.open('../../index.html','_self')</script>
    <?php
}
?>
