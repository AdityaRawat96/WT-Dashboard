<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="http://www.urbanui.com/" />
  <link rel="icon" type="image/png" href="../../assets/img/favicon.png" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Turbo - Bootstrap Material Admin Dashboard Template</title>
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

  <script>
  function leave(a)
  {
    if ($('input[name=test1]:checked').length > 0) {
      $.ajax({
        url:"leave_Upload.php",
        type:"POST",
        data: {leave_id:a,ar: $("input[name='test1']:checked").val()},
        beforeSend:function()
        {
        },
        success: function(response)
        {
          location. reload(true);
        }
      });
    }

    else{
      alert("Select any option");
    }

  }
  </script>

</head>

<body class="w3-theme-l3">
  <div class="wrapper">

    <!--  Sidebar included     -->
    <?php include('../pageElements/sidebar.php'); ?>

    <div class="main-panel">

      <!--  Navbar included     -->
      <?php include('../pageElements/navbar.php'); ?>

      <div class="content">
        <div class="container-fluid">
          <?php
          $dbvalue = 0;
          $email=0;
          $data = mysqli_query($con,"SELECT * FROM leave_employee where status=0");
          ?>
          <div class="header text-center">
            <h3 class="title">EMPLOYEE LEAVE REQUESTS:</h3>
          </div>
          <div class="row">
            <div class="col-md-12">
              <?php

              while($row = mysqli_fetch_assoc($data))
              {
                ?>
                <div class="card">
                  <div class="card-content">
                    <ul class="nav nav-pills nav-pills-default">
                      <li class="active">
                        <a href="#pill1<?php echo $row['leave_id']; ?>" data-toggle="tab">OVERVIEW</a>
                      </li>
                      <li>
                        <a href="#pill2<?php echo $row['leave_id']; ?>" data-toggle="tab" >DESCRIPTION</a>
                      </li>
                      <li>
                        <a href="#pill3<?php echo $row['leave_id']; ?>" data-toggle="tab">ACTIONS</a>
                      </li>
                    </ul>
                    <div class="tab-content" style="height:100px;">
                      <div class="tab-pane active" id="pill1<?php echo $row['leave_id']; ?>">
                        <div class="col-md-12">
                          <table>
                            <tr>
                              <td align="right"><strong>EMPLOYEE NAME:</strong></td>
                              <td style="text-transform: uppercase;">&nbsp;&nbsp;<?php echo $row['name'];?></td>
                            </tr>
                            <tr>
                              <td align="right"><strong>LEAVE CATEGORY:</strong></td>
                              <td style="text-transform: uppercase;">&nbsp;&nbsp;<?php echo $row['subject']; ?></td>
                            </tr>
                            <tr>
                              <td align="right"><strong>LEAVE FROM:</strong></td>
                              <td>&nbsp;&nbsp;<?php echo $row['startdate']; ?></td>
                            </tr>
                            <tr>
                              <td align="right"><strong>TO:</strong></td>
                              <td>&nbsp;&nbsp;<?php echo $row['enddate']; ?></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                      <div class="tab-pane" id="pill2<?php echo $row['leave_id']; ?>" style="height:100px;">
                        <p style="padding:0px 10px;"><?php echo $row['message'];?></p>
                      </div>
                      <div class="tab-pane" id="pill3<?php echo $row['leave_id']; ?>" style="height:100px;">
                        <div style="padding:0px 10px;">
                          <input type="radio" name="test1"  id="tag_1" value="accept">
                          ACCEPT<br>
                          <input type="radio" name="test1"  id="tag_2" value="reject" >
                          REJECT<br>
                          <p><button   class="btn btn-primary " name="reg" onclick="leave(<?php echo $row['leave_id']; ?>);">Submit</button></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
              }
              ?>

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
  <!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
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
  });
</script>

</html>
