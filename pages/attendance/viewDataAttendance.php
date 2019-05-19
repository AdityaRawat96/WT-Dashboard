<?php
$dept=$_POST['Department'];
if($dept=='1')
{
  $dept="Web Development";
}
else if($dept=='2')
{
  $dept="Graphic Designing";
}
else if($dept=='3')
{
  $dept="Digital Marketing";
}
else if($dept=='4')
{
  $dept="Content Writing";
}
else if($dept=='5')
{
  $dept="Video Editor";
}
else if($dept=='6')
{
  $dept="Public Relations";
}
else if($dept=='0')
{
  $dept="";
}
$date=$_POST['date'];
include('../php/connection.php');
$result=mysqli_query($con,"select * from attendance where employee_category LIKE '$dept%' and att_date='$date'") or die(mysqli_error($con));
if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_array($result))
  {
    if($row['in_time']=='absent'){
      ?>
      <tr style="background-color: rgba(0, 0, 0, 0.1);">
        <td class="text-center"><?php echo $row['employee_id'] ?></td>
        <td class="text-center"><?php echo $row['employee_name'] ?></td>
        <td class="text-center">Absent</td>
        <td class="text-center">-----</td>
        <td class="text-center">-----</td>
      </tr>
      <?php
    }
    else
    {
      ?>
      <tr>
        <td class="text-center"><?php echo $row['employee_id'] ?></td>
        <td class="text-center"><?php echo $row['employee_name'] ?></td>
        <td class="text-center">Present</td>
        <td class="text-center"><?php echo $row['in_time']; ?></td>
        <td class="text-center"><?php echo $row['out_time']; ?></td>
      </tr>
      <?php
    }

  }
}
else
{
  echo "No data found";
}

?>
