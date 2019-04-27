<?php

$task_status = "";

include('../php/connection.php');
$sql="select * from tasks where task_status LIKE '$task_status%'";
$result = mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result))
{

  $p0=$row["task_status"];
  $p1=$row["task_category"];
  $p2=$row["task_id"];
  $p3=$row["task_name"];
  $p4=$row["task_deadline"];
  $p5=$row["task_cpercentage"];

  if($p0 == 'COMPLETED'){
    ?>
    <tr class="completedAll" id=<?php echo $p2 ?>>
      <td><?php echo $p1 ?></td>
      <td><?php echo $p2 ?></td>
      <td><?php echo $p4 ?></td>
      <td><?php echo $p5 ?>%</td>
      <td><?php echo $p3; ?></td>
      <td class="text-right">
        <a href="#" class="btn btn-simple btn-info btn-icon " onclick="myInfoFunction('<?php echo $p2; ?>');"><i class="fa fa-info-circle"></i></a>
        <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
      </td>
    </tr>
    <?php
  }
}

?>
