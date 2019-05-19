<?php session_start();
error_reporting(0);
if(isset($_SESSION['Username'])&&$_SESSION['Rights']=='admin')
{
  ?>
  <!doctype html>
  <html lang="en">

  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png" />
    <script src="../../assets/vendors/jquery-3.1.1.min.js" type="text/javascript"></script>
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>WT Solutions</title><meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../../assets/css/turbo.css" rel="stylesheet" />

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../../assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="../../assets/vendors/maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />

    <link href="../../assets/vendors/dropzone/dropzone.min.css" rel="stylesheet">

  </head>

  <body>
    <div class="loader" style="z-index:300; position:fixed; height:100%; width:100%; background-color:black; opacity: 0.8; padding-top:35vh;">
      <center>
        <img src="../../assets/img/loader.svg" style="position:relative; height:200px; width:200px;">
      </center>
    </div>

    <div class="wrapper">

      <!--  Sidebar included     -->
      <?php include('../pageElements/sidebar.php'); ?>

      <div class="main-panel">

        <!--  Navbar included     -->
        <?php include('../pageElements/navbar.php'); ?>

        <div class="content">
          <div class="container-fluid">

            <!--  Page content goes here!    -->
            <div class="row">
              <div class="col-lg-12">
                <div class="card" style=" min-height:75vh; overflow:hidden;">
                  <div class="card-header card-header-text">
                    <h4 class="card-title">EMPLOYEE ATTENDANCE:</h4>
                  </div>
                  <div class="card-content"><br><br>
                    <div style="display: flex;">
                      <div>
                        <label><strong>DEPARTMENT:</strong></label>
                      </div>
                      <div style="position:relative; top:-20px; left:20px;">
                        <select class="selectpicker" data-style="select-with-transition" title="ALL" data-size="7" onchange="deptChangeFunction();" id="dept">
                          <option value="0" selected>ALL</option>
                          <option value="1">Web Development</option>
                          <option value="2">Graphic Designing</option>
                          <option value="3">Digital Marketing</option>
                          <option value="4">Content Writing</option>
                          <option value="5">Video Editor</option>
                          <option value="6">Public Relation</option>
                        </select>
                      </div>
                    </div><br>

                    <div class="table-responsive">
                        <table class="table" id="tableSelect">
                            <thead>
                                <tr>
                                  <th class="text-center">Employee Id</th>
                                  <th class="text-center">Employee Name</th>
                                  <th class="text-center">Absent/Present</th>
                                  <th class="text-center" style="position:relative; left:-10px;">In Time</th>
                                  <th class="text-center" style="position:relative; left:-10px;">Out Time</th>
                                  <th class="text-center">Submit Change</th>
                                </tr>
                            </thead>
                            <tbody  id="attnTable">

                            </tbody>
                        </table>
                    </div>

                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!--  Footer included     -->
        <?php include('../pageElements/footer.php'); ?>

      </div>



    </div>


  </body>
  <!--   Core JS Files   -->

  <script src="../../assets/vendors/jquery-ui.min.js" type="text/javascript"></script>
  <script src="../../assets/vendors/bootstrap.min.js" type="text/javascript"></script>
  <script src="../../assets/vendors/material.min.js" type="text/javascript"></script>
  <script src="../../assets/vendors/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
  <!-- Forms Validations Plugin -->
  <script src="../../assets/vendors/jquery.validate.min.js"></script>
  <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
  <script src="../../assets/vendors/moment.min.js"></script>
  <!--  Charts Plugin -->
  <script src="../../assets/vendors/chartist.min.js"></script>
  <!--  Plugin for the Wizard -->
  <script src="../../assets/vendors/jquery.bootstrap-wizard.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../../assets/vendors/bootstrap-notify.js"></script>
  <!-- DateTimePicker Plugin -->
  <script src="../../assets/vendors/bootstrap-datetimepicker.js"></script>
  <!-- Vector Map plugin -->
  <script src="../../assets/vendors/jquery-jvectormap.js"></script>
  <!-- Sliders Plugin -->
  <script src="../../assets/vendors/nouislider.min.js"></script>
  <!-- Select Plugin -->
  <script src="../../assets/vendors/jquery.select-bootstrap.js"></script>
  <!--  DataTables.net Plugin    -->
  <script src="../../assets/vendors/jquery.datatables.js"></script>
  <!-- Sweet Alert 2 plugin -->
  <script src="../../assets/vendors/sweetalert2.js"></script>
  <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../../assets/vendors/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin    -->
  <script src="../../assets/vendors/fullcalendar.min.js"></script>
  <!-- TagsInput Plugin -->
  <script src="../../assets/vendors/jquery.tagsinput.js"></script>
  <!-- Material Dashboard javascript methods -->
  <script src="../../assets/js/turbo.js"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../../assets/js/demo.js"></script>

  <script src="../../assets/vendors/dropzone/dropzone.min.js"></script>


  <script>
  $(document).ready(function() {
    $('.navbar-brand').html('Attendance');
    $('.activeTabsSidebar').removeClass('active');
    $('#activeTabsSidebarActions').addClass('active');
    $('#activeTabsSidebarAttendance').addClass('active');
    $('#actions').addClass('in');
    $('#actions').css('height','');
    $(".table-responsive").perfectScrollbar();
    demo.initFormExtendedDatetimepickers();
    $.ajax({
      type: 'POST',
      url: '../attendance/getDataAttendance.php',
      data: { Department:'0' },

      beforeSend: function() {
      },
      success: function(response) {
        $('.loader').fadeOut();
        $('#attnTable').html(response);
      }
    });
  });
  </script>

  <script>

  function checkRadio(id)
  {
    var $selectedRadioInTime = $('#'+id).closest('tr').find('#intime');
    var $selectedRadioOutTime = $('#'+id).closest('tr').find('#outtime');
    var namevar="presentabsent"+id;
    var radioValue = $("input[name="+namevar+"]:checked"). val();

    if(radioValue=='absent')
    {
      $selectedRadioInTime.attr('disabled',true);
      $selectedRadioOutTime.attr('disabled',true);
      $selectedRadioInTime.attr('value','absent');
      $selectedRadioOutTime.attr('value','absent');
      $('#'+id).closest('tr').css('background-color','rgba(0, 0, 0, 0.1)');
    }
    else
    {
      $selectedRadioInTime.attr('disabled',false);
      $selectedRadioOutTime.attr('disabled',false);
      $selectedRadioInTime.attr('value','10:00');
      $selectedRadioOutTime.attr('value','17:30');
      $('#'+id).closest('tr').css('background-color','white');
    }



  }
  function submitBtn(id)
  {
    $('.loader').fadeIn();
    var $selectedRadioInTime = $('#'+id).closest('tr').find('#intime');
    var $selectedRadioOutTime = $('#'+id).closest('tr').find('#outtime')
    var namevar="presentabsent"+id;
    var radioValue = $("input[name="+namevar+"]:checked"). val();
    var invalue = $selectedRadioInTime.val();
    var outvalue = $selectedRadioOutTime.val();
    var seti=0,seto=0;
    if(radioValue=='absent')
    {
      seti=-1;
      seto=-1;
    }
    if(invalue=="")
    seti=1;
    if(outvalue=="")
    seto=1;
    if(invalue.length=='5')
    invalue=invalue+":00";
    if(outvalue.length=='5')
    outvalue=outvalue+":00";
    $.ajax({
      type: 'POST',
      url: '../attendance/setEmployeeAttendance.php',
      data: { Id:id,intime:invalue,outtime:outvalue,pa:radioValue},

      beforeSend: function() {

      },
      success: function(response) {
        $('.loader').fadeOut();
        if(response.match(/Success/))
        {
          //alert('Attendance Updated');
          if(seti==1)
          {
            $selectedRadioInTime.val('10:00:00');
          }
          if(seto==1)
          {
            $selectedRadioOutTime.val('17:30:00');
          }
          if(seti==-1)
          {
            $selectedRadioInTime.val('');
          }
          if(seto==-1)
          {
            $selectedRadioOutTime.val('');
          }
        }
        else
        {
          //alert('Updation Failed');
        }
      }
    });
  }

  function deptChangeFunction()
  {
    $('.loader').fadeIn();
    $.ajax({
      type: 'POST',
      url: '../attendance/getDataAttendance.php',
      data: { Department:$('#dept').val() },

      beforeSend: function() {

      },
      success: function(response) {
        $('.loader').fadeOut();
        $('#attnTable').html(response);
      }
    });
  }
  </script>

  </html>

  <?php
}
else
{
  session_unset();
  session_destroy();
  ?>
  <script>window.open('../../index.php','_self')</script>
  <?php
}
?>
