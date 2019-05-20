<?php
session_start();
if($_SESSION['Username']!=''&&$_SESSION['Rights']=='admin')
{
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
date_default_timezone_set('Asia/Calcutta');
$date=date("Y-m-d");
include('../php/connection.php');

$result=mysqli_query($con,"select * from attendance where employee_category LIKE '$dept%' and att_date='$date'") or die(mysqli_error($con));

while($row=mysqli_fetch_array($result))
{
  if($row['in_time']!='absent')
  {
    ?>

    <tr id="myrow">
      <td class="text-center">
        <?php echo $row['employee_uname']; ?>
      </td>
      <td class="text-center">
        <?php echo $row['employee_name']; ?>
      </td>
      <td class="text-center">
        <input type="radio" onclick="checkRadio(<?php echo $row['employee_id']?>)" name="presentabsent<?php echo $row['employee_id'];?>" value="present" checked>Present
        <input type="radio" name="presentabsent<?php echo $row['employee_id'];?>" value="absent" onclick="checkRadio(<?php echo $row['employee_id']?>)">Absent
      </td>
      <td class="text-center">
        <input type="time" id="intime" value="<?php echo $row['in_time']; ?>" style="border: none; padding:5px; background-color: transparent;" />
      </td>
      <td class="text-center">
        <input type="time" id="outtime" value="<?php echo $row['out_time']; ?>" style="border: none; padding:5px; background-color: transparent;" />
      </td>
      <td class="text-center">
        <button type="button" rel="tooltip" class="btn btn-success btn-simple" id="<?php echo $row['employee_id']; ?>" onclick="submitBtn(<?php echo $row['employee_id']; ?>);">
            <i class="material-icons">check</i>
        </button>
      </td>
    </tr>
    <?php
  }
  else
  {
    ?>
    <tr id="myrow" style="background-color: rgba(0, 0, 0, 0.1);">
      <td class="text-center">
        <?php echo $row['employee_uname']; ?>
      </td>
      <td class="text-center">
        <?php echo $row['employee_name']; ?>
      </td>
      <td class="text-center">
        <input type="radio" onclick="checkRadio(<?php echo $row['employee_id']?>)" name="presentabsent<?php echo $row['employee_id'];?>" value="present">Present
        <input type="radio" name="presentabsent<?php echo $row['employee_id'];?>" value="absent" onclick="checkRadio(<?php echo $row['employee_id']?>)" checked>Absent
      </td>
      <td class="text-center">
        <input type="time" id="intime" value="<?php echo $row['in_time']; ?>" disabled style="border: none; padding:5px; background-color: transparent;" />
      </td>
      <td class="text-center">
        <input type="time" id="outtime" value="<?php echo $row['out_time']; ?>" disabled style="border: none; padding:5px; background-color: transparent;" />
      </td>
      <td class="text-center">
        <button type="button" rel="tooltip" class="btn btn-success btn-simple" id="<?php echo $row['employee_id']; ?>" onclick="submitBtn(<?php echo $row['employee_id']; ?>);">
            <i class="material-icons">check</i>
        </button>
      </td>
    </tr>
    <?php
  }
}
}
else
{
    ?>
    <script>window.open('../php/cookiesuset.php','_self')</script>
    <?php
}
?>
