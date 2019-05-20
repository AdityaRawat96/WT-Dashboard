<?php
session_start();
if($_SESSION['Username']=='' && $_SESSION['Rights']!='employee'){
  session_unset();
  session_destroy();
  ?> <script>window.open('../php/cookiesunset.php','_self')</script> <?php
}
else
{
  include('../php/connection.php');
  $uname=$_SESSION['Username'];
  $result=mysqli_query($con,"select * from users where username='$uname'");
  $row=mysqli_fetch_array($result);
  $category=$row['category'];
  $id=$row['id'];
  ?>

  <!DOCTYPE html>
  <html lang="en" dir="ltr">
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

    <script>
    function myFunction()
    {
      //        alert('HII');
      $.ajax({
        type: 'POST',
        url: '../php/leaveStatus.php',
        data: {value:1},

        beforeSend: function() {
        },
        success: function(response) {
          window.open('../leave/viewLeave.php','_self');
          //                    alert(response);
        }
      });
    }

    function genReport(){
      var a1=$('#start_date').val();
      var a2=$('#end_date').val();

      if(a1!=""&&a2!="")
      {
        $.ajax({
          type: 'POST',
          url: '../php/employeeReportDB.php',
          data: { startdate:a1,enddate:a2},

          beforeSend: function() {

          },
          success: function(response) {
            window.open('../php/myReport.php','_self');
          }
        });
      }
      else
      {
        alert("Please enter valid entries");
      }

    }
    </script>
  </head>
  <body>
    <body>
      <div class="wrapper">

        <!--  Sidebar included     -->
        <?php include('../pageElements/sidebar_employee.php'); ?>

        <div class="main-panel">

          <!--  Navbar included     -->
          <?php include('../pageElements/navbar.php'); ?>

          <div class="content">
            <div class="container-fluid">

              <!--  Page content goes here!    -->
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <form class="form-horizontal">
                      <div class="card-header card-header-text">
                        <h4 class="card-title">EMPLOYEE REPORT:</h4>
                      </div>
                      <div class="card-content">
                        <div class="row">
                          <label class="col-sm-2 label-on-left">START DATE:</label>
                          <div class="col-sm-3">
                            <div class="form-group label-floating is-empty">
                              <input type="text" class="form-control datepicker" name="start_date" id="start_date" onkeydown="return false;"  style="position:relative;top:-4px;">
                            </div>
                          </div>
                        </div><br>
                        <div class="row">
                          <label class="col-sm-2 label-on-left">END DATE:</label>
                          <div class="col-sm-3">
                            <div class="form-group label-floating is-empty">
                              <input type="text" class="form-control datepicker" name="end_date" id="end_date" onkeydown="return false;" style="position:relative;top:-4px;">
                            </div>
                          </div>
                        </div><br>
                        <br>
                        <div class="row" style="margin-left:25%;">
                          <div class="col-md-6 text-center">
                            <button type="button" class="btn btn-info btn-round" onclick="genReport();">Generate Report &nbsp;<i class="material-icons">keyboard_arrow_right</i></button>
                          </div>
                        </div>
                      </div>
                    </form>
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
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
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
      $('.navbar-brand').html('Employee Report');
      $('.activeTabsSidebar').removeClass('active');
      $('#activeTabsSidebarReport').addClass('active');
      $('#activeTabsSidebarEmployeeReport').addClass('active');
      $('#reports').addClass('in');
      $('#reports').css('height','');
      demo.initFormExtendedDatetimepickers();
    });

    </script>

    </html>
    <?php
  }
  ?>
