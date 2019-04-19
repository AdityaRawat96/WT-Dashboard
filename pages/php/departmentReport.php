<?php
session_start();
error_reporting(0);
if($_SESSION['Username']=='' || $_SESSION['Rights']!='admin')
{
  session_unset();
  session_destroy();
  ?> <script>window.open('../index.html','_self')</script>
  <?php
}
else
{
  $a=$_SESSION['no_of_employee'];
  ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
  <head>
    <title></title>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png" />
    <script src="../../assets/vendors/jquery-3.1.1.min.js" type="text/javascript"></script>
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Turbo - Bootstrap Material Admin Dashboard Template</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <script>
    function myajaxfunction()
    {
      $('body').css('opacity','0.5');
      $('body').css('pointer-events','none');

      $.ajax({
        type: 'POST',
        url: 'reportajaxdepartment.php',
        data: {},

        beforeSend: function() {
        },
        success: function(response) {
          if(response.match(/failureandemployeeloadingfailure/))
          {
            $('body').css('opacity','1');
            $('body').css('pointer-events','auto');
            $('#nodatafound').html('No Record found');
            $('#nodatafound').css('text-align','center');
            $('#nodatafound').css('font-size','20px');
            $('#nodatafound').css('color','red');
            $('#linkbutton').css('visibility','visible');
            $('#noemployeefound').html('No Employee found');
            $('#noemployeefound').css('font-size','20px');
            $('#noemployeefound').css('text-align','center');
            $('#noemployeefound').css('text-align','center');
            $('#noemployeefound').css('color','red');
            $('#noemployeefound').css('top','35%');
            $('#ttasks').val(0);
            $('#ptasks').val(0);
            $('#otasks').val(0);
            $('#ctasks').val(0);

          }
          else if(response.match(/failure/))
          {
            $('#mydiv').html(response);
            $('body').css('opacity','1');
            $('body').css('pointer-events','auto');
            $('#nodatafound').html('No Record found');
            $('#nodatafound').css('text-align','center');
            $('#nodatafound').css('font-size','20px');
            $('#nodatafound').css('color','red');
            $('#linkbutton').css('visibility','visible');
            $('#employeelist').append($('.list'));
            $('#ttasks').val(0);
            $('#ptasks').val(0);
            $('#otasks').val(0);
            $('#ctasks').val(0);
          }

          else if(response.match(/employeeloadingfailure/))
          {
            $('#noemployeefound').html('No Employee found');
            $('#noemployeefound').css('font-size','20px');
            $('#noemployeefound').css('color','red');
            $('#noemployeefound').css('text-align','center');
            $('#noemployeefound').css('top','35%');
            $('#ttasks').val(0);
            $('#ptasks').val(0);
            $('#otasks').val(0);
            $('#ctasks').val(0);
          }
          else
          {
            $('#mydiv').html(response);
            response=response.substring(response.indexOf('myvarcompleted'));
            cno=response.substring(14,response.indexOf('myvarongoing'));
            ono=response.substring(response.indexOf('myvarongoing')+12,response.indexOf('myvarpending'));
            pno=response.substring(response.indexOf('myvarpending')+12);
            $('#ongoingtable').append($('.ongoing'));
            $('#completedtable').append($('.completed'));
            $('body').css('opacity','1');
            $('body').css('pointer-events','auto');
            $('#employeelist').append($('.list'));
            $('#ttasks').val(parseInt(pno)+parseInt(ono)+parseInt(cno));
            $('#ptasks').val(pno);
            $('#otasks').val(ono);
            $('#ctasks').val(cno);
          }

        }
      });

    }
    function myblurfunction()
    {
      unset($_SESSION['no_of_employee']);
      unset($_SESSION['ongoingtasks']);
      unset($_SESSION['completedtasks']);
      unset($_SESSION['pendingtasks']);

    }
    </script>
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
    <style>
    .a{
      margin-left: 10%;
      margin-top: 3%;
    }
    .mywrapper
    {
      opacity: 0.5;
      pointer-events: none;
    }
    </style>
  </head>
  <body onload="myajaxfunction();" onblur="myblurfunction();">
    <div id="mydiv" hidden></div>
    <div class="wrapper">

      <!--  Sidebar included     -->
      <?php include('../pageElements/sidebar.php'); ?>

      <div class="main-panel">

        <!--  Navbar included     -->
        <?php include('../pageElements/navbar.php'); ?>
        <div class="content">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <div class="card" style="min-height: 300px">
                  <div class="card-header card-header-icon">
                    <i class="material-icons">user</i>
                  </div>
                  <div class="card-content">
                    <h4 class="card-title">Basic Information
                    </h4>
                    <div class="row a">
                      <div class="col-md-2">
                        <span><label for="name"> <strong>Total Employee:</strong> </label></span>
                      </div>
                      <div class="col-md-10">
                        <span> <input type="text" name="temployee" value="<?php echo $a; ?>" id="temployee" readonly style="border:none;"> </span>
                      </div>

                    </div>
                    <div class="row a">
                      <div class="col-md-2">
                        <span><label for="name"> <strong>Total Tasks:</strong> </label></span>
                      </div>
                      <div class="col-md-10">
                        <span> <input type="text" name="ttasks" id="ttasks" readonly style="border:none;"> </span>
                      </div>

                    </div>
                    <div class="row a">
                      <div class="col-md-2">
                        <span><label for="name"> <strong>Pending Tasks:</strong> </label></span>
                      </div>
                      <div class="col-md-10">
                        <span> <input type="text" name="ptasks" id="ptasks" readonly style="border:none;"> </span>
                      </div>

                    </div>
                    <div class="row a">
                      <div class="col-md-2">
                        <span><label for="name"> <strong>Ongoing Tasks:</strong> </label></span>
                      </div>
                      <div class="col-md-10">
                        <span> <input type="text" name="otasks" id="otasks" readonly style="border:none;"> </span>
                      </div>

                    </div>
                    <div class="row a">
                      <div class="col-md-2">
                        <span><label for="name"> <strong>Completed Tasks:</strong> </label></span>
                      </div>
                      <div class="col-md-10">
                        <span> <input type="text" name="ctasks" id="ctasks" readonly style="border:none;"> </span>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card" style="height:378px;overflow-y:scroll;">
                  <div class="card-header">
                  </div>
                  <div class="card-content" id="noemployeefound">
                    <h4 class="card-title" style="text-align:center;">Employee List
                    </h4>
                    <br>
                    <div class="table-responsive" style="width:70%;margin-left:15%;">
                      <table class="table table-hover">
                        <thead class="text-success">
                          <th>ID</th>
                          <th>Name</th>
                        </thead>
                        <tbody id="employeelist">

                        </tbody>
                      </table>

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-content" id="nodatafound">
                        <h4 class="card-title">ONGOING TASKS</h4>
                        <div class="table-responsive">
                          <table class="table table-hover">
                            <thead class="text-primary">
                              <th>TASK ID</th>
                              <th>TASK NAME</th>
                              <th>TASK CATEGORY</th>
                              <th>TASK DEADLINE</th>
                            </thead>
                            <tbody id="ongoingtable">

                            </tbody>
                          </table>
                        </div>
                        <h4 class="card-title">COMPLETED TASKS</h4>
                        <div class="table-responsive">
                          <table class="table table-hover">
                            <thead class="text-primary">
                              <th>TASK ID</th>
                              <th>TASK NAME</th>
                              <th>TASK CATEGORY</th>
                            </thead>
                            <tbody id="completedtable">

                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div style="text-align:center;padding-bottom:10px;">
                        <button type="button" class='btn btn-primary' id="linkbutton" onclick="window.open('../reports/reportByDepartment.php');" style="visibility:hidden;">Return Back</button>
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
        <script type="text/javascript">
        $(document).ready(function() {
          $("#simple-accordion").accordion({
            collapsible: true,
            active: false,
            animate: 200
          });

          $("#simple-accordion-colored").accordion({
            collapsible: true,
            active: false,
            animate: 200
          });

          $("#simple-accordion-alt").accordion({
            collapsible: true,
            active: false,
            animate: 200
          });

          $("#simple-accordion-alt-2, #simple-accordion-alt-3").accordion({
            collapsible: true,
            active: false,
            animate: 200
          });

          $('body').on('click', '#btn-color-targets > .btn', function() {
            var color = $(this).data('target-color');
            $('#modalColor').attr('data-modal-color', color);
          });
        });
        </script>


        </html>
      <?php } ?>
