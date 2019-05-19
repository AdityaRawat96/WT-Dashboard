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

                    <div id="errorDiv" style="display:none">
                      <center>
                        <h3 style="color:red">No data found!</h3>
                      </center>
                    </div>
                    <div class="table-responsive">
                      <table class="table" id="tableSelect">
                        <thead>
                          <tr>
                            <th class="text-center">Employee Id</th>
                            <th class="text-center">Employee Name</th>
                            <th class="text-center">Absent/Present</th>
                            <th class="text-center">In Time</th>
                            <th class="text-center">Out Time</th>
                          </tr>
                        </thead>
                        <tbody  id="data">

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

  var date;

  $(document).ready(function(){
    $(".table-responsive").perfectScrollbar();
    var url_string = window.location.href;
    var url = new URL(url_string);
    date = url.searchParams.get("date");
    $.ajax({
      type: 'POST',
      url: '../attendance/viewDataAttendance.php',
      data: { Department: '0', date:date},

      beforeSend: function() {

      },
      success: function(response) {
        if(response == "No data found"){
          $(".table-responsive").css('display','none');
          $("#errorDiv").css('display','block');
        }
        else{
          $('#data').html(response);
        }
        $('.loader').fadeOut();
      }
    });
  });

  function deptChangeFunction()
  {
    $('.loader').fadeIn();
    $.ajax({
      type: 'POST',
      url: '../attendance/viewDataAttendance.php',
      data: { Department:$('#dept').val(), date:date},

      beforeSend: function() {

      },
      success: function(response) {
        $('.loader').fadeOut();
        $('#data').html(response);
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
