<?php
$tid = $_POST['rowId'];

include('connection.php');
$roh= mysqli_select_db($con,'wtintern_wt')
or die("Unable to connect to the database server! <br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>");

$result= mysqli_query($con,"select * from tasks where task_id='$tid'")
or die('Uppss.. an Error accured...(unable to process this request)<br>Reason : &nbsp;'. mysqli_error($con));

$row=mysqli_fetch_array($result);
$p1=$row['task_name'];
$p2=$row['task_description'];
$p3=$row['task_category'];
$p4=$row['task_status'];
$p5=$row['assigned_employee'];
$p6=$row['assigned_to'];
$p7=$row['assigned_date'];
$p8=$row['task_deadline'];

?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".example-modal-lg" id="myButton" style="visibility:hidden;"></button>
<div class="modal fade example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><strong>TASK DETAILS:</strong>&nbsp;(<?php echo $tid; ?>)</h4>
      </div>
      <input type="text" id="taskidfield" value="<?php echo $tid; ?>" hidden>
      <div class="modal-body">
        <table>
          <tr>
            <td align="right"><strong>TASK DEADLINE:</strong></td>
            <td>&nbsp;<?php echo $p8; ?></td>
          </tr>
          <tr>
            <td align="right"><strong>TASK NAME:&nbsp;</strong></td>
            <td>&nbsp;<?php echo $p1; ?></td>
          </tr>
          <tr>
            <td align="right"><strong>TASK DESCRIPTION:&nbsp;</strong></td>
            <td>&nbsp;<?php echo $p2; ?></td>
          </tr>
          <tr>
            <td><br></td>
            <td><br></td>
          </tr>
          <tr>
            <td align="right"><strong>ASSIGN EMPLOYEE:&nbsp;</strong></td>
            <td>
              <select class="select" data-style="select-with-transition"  id="users">
                <?php
                $sql="select * from users where category='$p3' and rights='employee'";
                $rslt=mysqli_query($con,$sql) or die(mysqli_error($con));
                if(mysqli_num_rows($rslt)>0)
                {
                  while($row1=mysqli_fetch_array($rslt))
                  {
                    $var1=$row1['name'];
                    $var2=$row1['id'];
                    ?>
                    <option value="<?php echo $var1."/".$var2; ?>"><?php echo $var1; ?></option>
                    <?php
                  }
                }
                else
                {
                  ?>
                  <option disabled>No Employee found!</option>
                  <?php
                }
                ?>
              </select>
            </td>
          </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal" onclick="assignEmployee()">Assign</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
