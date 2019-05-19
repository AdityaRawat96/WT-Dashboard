<?php
session_start();
error_reporting(0);
if(isset($_SESSION['Username'])&&$_SESSION['Rights']=='employee')
{
  ?>
  <!doctype html>
  <html lang="en">

  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="http://www.urbanui.com/" />
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
    <link href="../../assets/vendors/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

  </head>

  <body onload="$('.loader').fadeOut();">
    <div class="loader" style="z-index:300; position:fixed; height:100%; width:100%; background-color:black; opacity: 0.8; padding-top:35vh;">
      <center>
        <img src="../../assets/img/loader.svg" style="position:relative; height:200px; width:200px;">
      </center>
    </div>
    <div class="wrapper">

      <!--  Sidebar included     -->
      <?php include('../pageElements/sidebar_employee.php'); ?>

      <div class="main-panel">

        <!--  Navbar included     -->
        <?php include('../pageElements/navbar.php'); ?>

        <div class="content">
          <div class="container-fluid">

            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <form id="TypeValidation" class="form-horizontal"  >
                    <div class="card-header card-header-text">
                      <h4 class="card-title">APPLY FOR LEAVE:</h4></div>
                      <div class="card-content">
                        <div class="row">
                          <label class="col-sm-2 label-on-left">LEAVE CATEGORY:</label>
                          <div class="col-sm-7">
                            <div class="input-group">
                              <span class="input-group-addon">
                              </span>
                              <div class="form-group label-floating">
                                <select class="form-control" id="sel1" name="sellist1">
                                  <option disabled selected>Select any option</option>
                                  <option value="Medical">Medical Leave</option>
                                  <option value="Paternity">Paternity Leave</option>
                                  <option value="Vacation">Vacation Leave</option>
                                  <option value="Study">Study Leave</option>
                                  <option value="Earned">Earned Leave</option>
                                  <option value="Others">Others</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="row">
                            <label class="col-sm-2 label-on-left">LEAVE FROM:</label>
                            <div class="col-sm-7">
                              <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                  <label class="control-label">
                                    <small></small>
                                  </label>
                                  <input type="text" id="leaveFrom" class="datepicker form-control" name="employee_dob" onkeydown="return false;" required/>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-sm-2 label-on-left">TO:</label>
                            <div class="col-sm-7">
                              <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                  <label class="control-label">
                                    <small></small>
                                  </label>
                                  <input type="text" id="leaveTo" class="datepicker form-control" name="employee_dob" onkeydown="return false;" required/>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-sm-2 label-on-left">REASON:</label>
                            <div class="col-sm-7">
                              <div class="input-group">
                                <span class="input-group-addon">
                                </span>
                                <div class="form-group label-floating">
                                  <label class="control-label">
                                    <small></small>
                                  </label>
                                  <textarea class="form-control" rows="5" id="message" name="message" maxlength="500"></textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-9">
                              <center><button type="button" class="btn btn-primary" onclick="sendLeave();" >Submit</button></center>
                            </div>
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

        <!--  Theme changer included     -->
        <!--  <?php include('../pageElements/themeChanger.php'); ?>     -->

      </div>
    </body>
    <!--   Core JS Files   -->
    <script src="../../assets/vendors/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/jquery-ui.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/material.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <!-- Forms Validations Plugin -->
    <script src="../../assets/vendors/jquery.validate.min.js"></script>
    <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
    <script src="../../assets/vendors/moment.min.js"></script>
    <!--  Charts Plugin -->
    <script src="../../assets/vendors/charts/flot/jquery.flot.js"></script>
    <script src="../../assets/vendors/charts/flot/jquery.flot.resize.js"></script>
    <script src="../../assets/vendors/charts/flot/jquery.flot.pie.js"></script>
    <script src="../../assets/vendors/charts/flot/jquery.flot.stack.js"></script>
    <script src="../../assets/vendors/charts/flot/jquery.flot.categories.js"></script>
    <script src="../../assets/vendors/charts/chartjs/Chart.min.js" type="text/javascript"></script>

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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAurmSUEQDwY86-wOG3kCp855tCI8lHL-I"></script>
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

    <script src="../../assets/js/charts/flot-charts.js"></script>
    <script src="../../assets/js/charts/chartjs-charts.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
      demo.initFormExtendedDatetimepickers();
      $('.navbar-brand').html('Apply Leave');
      $('.activeTabsSidebar').removeClass('active');
      $('#activeTabsSidebarActions').addClass('active');
      $('#activeTabsSidebarApplyLeave').addClass('active');
      $('#actions').addClass('in');
      $('#actions').css('height','');
    });
  </script>
  <script>

  function myFunction()
  {
    $.ajax({
      type: 'POST',
      url: '../php/leaveStatus.php',
      data: {value:1},

      beforeSend: function() {
      },
      success: function(response) {
        window.open('../leave/viewLeave.php','_self');
      }
    });
  }

  function sendLeave()
  {
    if($('#sel1').val()==null || $('#leaveFrom').val()=="" || $('#leaveTo').val()=="" || $('#message').val()=='')
    {
      alert('Please enter valid entries');
    }
    else
    {
      $('.loader').fadeIn();
      $.ajax({

        url:"leave.php",
        type:"POST",
        data: {subject:$('#sel1').val(),message:$("#message").val(),leaveFrom:$("#leaveFrom").val(),leaveTo:$("#leaveTo").val()},

        beforeSend:function()
        {
        },
        success: function(response)
        {
          $('.loader').fadeOut();
          if(response.match(/success/)){
            sendNotification()
          }
          else{
            swal({
              title: "Error occured!",
              timer: 5000,
              text: "Please try again",
              buttonsStyling: false,
              confirmButtonClass: "btn btn-success",
              type: "warning"
            });
          }
        }
      });
    }
  }

  //Sending Notification
  var name = '<?php echo $_SESSION['name'] ?>';
  function sendNotification(){
    $.ajax({
      type: 'POST',
      url: '../php/sendNotification.php',
      data: {  category: "leave", name: name, description: "applied for a leave.", target: "admin", link: "../leave/viewLeave.php" },

      success: function(response) {
        sendAlert();
      }
    });
  }
  function sendAlert(){
    var data = {
      category: "leave",
      name: name,
      description: "applied for a leave.",
      target: "admin",
      link: "../leave/viewLeave.php"
    };
    $.ajax({
      type: 'POST',
      url: '../../pusher.php',
      data: { data: data},

      success : function(response){
        swal({
          title: "Done!",
          timer: 5000,
          text: "Leave placed successfully!",
          buttonsStyling: false,
          confirmButtonClass: "btn btn-success",
          type: "success"
        }).then(function(){
          $('#message').val("");
          $('#leaveFrom').val("");
          $('#leaveTo').val("");
          $('#sel1').val("null");
        });
      }
    });
  }

</script>

</html>

</body>
</html>
<?php
}
else
{
  session_unset();
  session_destroy();
  ?>
  <script>window.open('../index.html','_self')</script>
  <?php
}
?>
