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
                    <div class="row">
                    <div class="col-lg-12">
                      <div class="card">
                          <form method="get" class="form-horizontal">
                              <div class="card-header card-header-text">
                                  <h4 class="card-title">TASK INFO:</h4>
                              </div>
                              <div class="card-content">

                                 <div class="row">
                                      <label class="col-sm-2 label-on-left">TASK ID:</label>
                                      <div class="col-sm-4">
                                          <div class="form-group label-floating is-empty">
                                              <label class="control-label"></label>
                                              <input type="text" class="form-control" placeholder="" value="<?php echo $tid; ?>" name="task_name" id="task_name" readonly>
                                          </div>
                                      </div>
                                      <label class="col-sm-2 label-on-left">TASK STATUS:</label>
                                      <div class="col-sm-4">
                                          <div class="form-group label-floating is-empty">
                                              <label class="control-label"></label>
                                              <input type="text" class="form-control" placeholder="" value="<?php echo $p4; ?>" name="task_name" id="task_name" readonly>
                                          </div>
                                      </div>
                                  </div>


                                  <div class="row">
                                      <label class="col-sm-2 label-on-left">TASK NAME:</label>
                                      <div class="col-sm-10">
                                          <div class="form-group label-floating is-empty">
                                              <label class="control-label"></label>
                                              <input type="text" class="form-control" placeholder="" value="<?php echo $p1; ?>" name="task_name" id="task_name" readonly>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <label class="col-sm-2 label-on-left">TASK DESCRIPTION:</label>
                                      <div class="col-sm-10">
                                          <div class="form-group label-floating is-empty">
                                              <label class="control-label"></label>
                                              <textarea rows="3" type="text" class="form-control" placeholder="" name="task_description" id="task_description" readlony><?php echo $p2; ?></textarea>
                                          </div>
                                      </div>
                                  </div>


                                  <div class="row">
                                      <label class="col-sm-2 label-on-left">TASK DEADLINE:</label>
                                      <div class="col-sm-4">
                                          <div class="form-group label-floating is-empty">
                                            <input type="text" class="form-control datetimepicker" value="<?php echo $p8; ?>" name="task_deadline" id="task_deadline" readonly />
                                          </div>
                                      </div>
                                        <label class="col-sm-2 label-on-left">ASSIGNED DATE:</label>
                                      <div class="col-sm-4">
                                          <div class="form-group label-floating is-empty">
                                            <input type="text" class="form-control datetimepicker" value="<?php echo $p7; ?>" name="task_deadline" id="task_deadline" readonly />
                                          </div>
                                      </div>
                                  </div>

                                   <div class="row">
                                         <label class="col-sm-2 label-on-left">ASSIGNED EMPLOYEE ID:</label>
                                      <div class="col-sm-4">
                                          <div class="form-group label-floating is-empty">
                                            <input type="text" class="form-control datetimepicker" value="<?php echo $p6;?>" name="task_deadline" id="assigned_employee_id" readonly />
                                          </div>
                                      </div>
                                      <label class="col-sm-2 label-on-left">ASSIGNED EMPLOYEE:</label>
                                      <div class="col-sm-4">
                                          <div class="form-group label-floating is-empty">
                                            <input type="text" class="form-control datetimepicker" value="<?php echo $p5; ?>" name="assigned_employee" id="task_deadline" readonly />
                                          </div>
                                      </div>

                                  </div>

                                    <br>

<!--
                                  <div class="row">

                                  </div>
-->





                              </div>
                          </form>
                      </div>

                    </div>

                  </div>




                </div>
            </div>
                <br>


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

        // Javascript method's body can be found in assets/js/demos.js
        demo.initVectorMap();
    });
</script>

</html>
