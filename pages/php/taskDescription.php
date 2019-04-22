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
               <div class="modal-body">
                   <table>
                     <tr>
                       <td align="right" style="width:20%;"><strong>ASSIGNED EMPLOYEE ID:</strong></td>
                       <td>&nbsp;<?php echo $p6;?></td>
                     </tr>
                     <tr>
                       <td align="right"><strong>ASSIGNED EMPLOYEE:</strong></td>
                       <td>&nbsp;<?php echo $p5; ?></td>
                     </tr>
                     <tr>
                       <td align="right"><strong>ASSIGNED DATE:</strong></td>
                       <td>&nbsp;<?php echo $p7; ?></td>
                     </tr>
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
                   </table>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
               </div>
           </div>
       </div>
   </div>
