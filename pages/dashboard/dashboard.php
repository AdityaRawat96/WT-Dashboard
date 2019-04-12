<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png" />
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
  <!--    JQuery UI     -->
  <link href="../../assets/vendors/jquery-ui-1.12.0/jquery-ui.css" rel="stylesheet">
</head>

<body>
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
                      <div class="col-md-8">
                          <div class="card" style="height: 350px; overflow-y:scroll;">
                              <div class="card-header card-header-icon">
                                  <i class="material-icons">timeline</i>
                              </div>
                              <div class="card-content">
                                  <h4 class="card-title">NOTICE:
                                  </h4>
                                  <div id="simple-accordion-colored" class="accordion">

                                  </div>
                                  <!-- Notice Accordians -->
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="card" style="min-height: 350px">
                              <div class="card-header">
                              </div>
                              <div class="card-content">
                                  <h4 class="card-title">Region-wise Sales
                                  </h4>
                                  <!-- Some stuff goes here -->
                              </div>
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
        getNotice();
    });

    function getNotice(){
      $.ajax({
                    type: 'POST',
                    url: '../php/getNotice.php',
                    data: {},

                        beforeSend: function() {

                    },
                success: function(response) {
                  $(".accordion").html(response);
                  $("#simple-accordion-colored").accordion({
                      collapsible: true,
                      animate: 200
                  });
                }
                });
    }
</script>

</html>
