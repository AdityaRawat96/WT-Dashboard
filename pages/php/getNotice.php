<?php
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
  echo '<h3 class="accordion-header md-bg-blue-300">'.$p5.'</h3><div class="accordion-content" data-wrapper="true" style="overflow:hidden;height:0;position:relative;" aria-expanded="false"><div><div><small><strong>By:&nbsp;'.$p3.'&nbsp; on &nbsp;'.$p4.'</strong></small></div><p>'.$p6.'</p></div></div>';
  }

?>
