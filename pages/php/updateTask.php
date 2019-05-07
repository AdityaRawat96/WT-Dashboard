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
$p9=$row['task_cpercentage'];

?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".example-modal-lg" id="myButton" style="visibility:hidden;"></button>
<div class="modal fade example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><strong>UPDATE PROGRESS:</strong>&nbsp;(<?php echo $tid; ?>)</h4>
      </div>
      <div class="modal-body">
        <table>
          <tr>
            <td align="right"><strong>TASK NAME:&nbsp;</strong></td>
            <td>&nbsp;<?php echo $p1; ?></td>
          </tr>
          <tr>
            <td align="right"><strong>TASK DESCRIPTION:&nbsp;</strong></td>
            <td>&nbsp;<?php echo $p2; ?></td>
          </tr>
          <tr>
            <td align="right"><strong>TASK PROGRESS:&nbsp;</strong></td>
            <td style="position:relative; width:80%;">&nbsp;<div id="progressSlider" style="position:relative;left:20px;top:-10px;"></div></td>
          </tr>
        </table>
      </div><br>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" onclick="getValues();" id='updateButton'>UPDATE</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
var slider = document.getElementById('progressSlider');
var progress = '<?php echo $p9 ?>';

noUiSlider.create(slider, {
  start: [progress, progress],
  connect: [true, true, false],
  step: 1,
  tooltips: true,
  range: {
    'min': [0],
    'max': [100]
  },
  format: wNumb({
    decimals: 0
  }),
  pips: {mode: 'count', values: 11}
});
var origins = slider.getElementsByClassName('noUi-origin');
origins[0].setAttribute('disabled', true);
origins[0].setAttribute('id', 'handle1');

var connect = slider.querySelectorAll('.noUi-connect');
var classes = ['c-1-color', 'c-2-color'];

for (var i = 0; i < connect.length; i++) {
  connect[i].classList.add(classes[i]);
}
slider.noUiSlider.on('update', function( values, handle ) {
  var values = slider.noUiSlider.get();
  if(values[1] == 100){
    $("#updateButton").html("COMPLETED !");
    $("#updateButton").removeClass("btn-info");
    $("#updateButton").addClass("btn-success");
  }
  else{
    $("#updateButton").html("UPDATE");
    $("#updateButton").removeClass("btn-success");
    $("#updateButton").addClass("btn-info");
  }
});

function getValues(){
  $("#updateButton").append('&nbsp;<i class="fas fa-spinner-third"></i>');
  var values = slider.noUiSlider.get();
  var id = '<?php echo $tid; ?>';
  updateTaskProgres(id,values[1]);
}

</script>


<style media="screen">
.c-1-color { background: #33b5e5; }
.c-2-color { background: #00C851; }
.noUi-tooltip {
  display: none;
}
.noUi-active .noUi-tooltip {
  display: block;
}
#handle1{
  display: none;
}
</style>
