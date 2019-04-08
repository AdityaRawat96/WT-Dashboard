<?php
session_start();
if($_SESSION['Username']=='')
{
    session_unset();
    session_destroy();
?> <script>window.open('../index.html','_self')</script> <?php
}
else
{
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
                    url: 'reportajaxemployee.php',
                    data: {},

                    beforeSend: function() {
                    },
                    success: function(response) {
                        $('#mydiv').html(response);
                        $('#ongoingtable').append($('.ongoing'));
                        $('#completedtable').append($('.completed'));
                        $('body').css('opacity','1');
                        $('body').css('pointer-events','auto');
                    }
                });
           
      }
           function myblurfunction()
          {
              unset($_SESSION['reportname']);
              unset($_SESSION['reportusername']);
              unset($_SESSION['reportdob']);
              unset($_SESSION['reportimg']);              
              unset($_SESSION['reportemail']);
              unset($_SESSION['reportcontact']);

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
      
 <?php
session_start();
$a=$_SESSION['reportname'];
$b=$_SESSION['reportusername'];
$c=$_SESSION['reportdob'];
$h=$_SESSION['reportimg'];
$i=$_SESSION['reportemail'];
$j=$_SESSION['reportcontact'];
?>
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
                                      <span><label for="name"> <strong>Name:</strong> </label></span>
                                    </div>
                                  <div class="col-md-10">
                                      <span> <input type="text" name="name" value="<?php echo $a; ?>" id="name" readonly style="border:none;"> </span>
                                  </div>

                                  </div>
                                  <div class="row a">
                                    <div class="col-md-2">
                                      <span><label for="name"> <strong>Username:</strong> </label></span>
                                    </div>
                                  <div class="col-md-10">
                                      <span> <input type="text" name="username" value="<?php echo $b; ?>" id="username" readonly style="border:none;"> </span>
                                  </div>

                                  </div>
                                  <div class="row a">
                                    <div class="col-md-2">
                                      <span><label for="name"> <strong>Email:</strong> </label></span>
                                    </div>
                                  <div class="col-md-10">
                                      <span> <input type="text" name="email" value="<?php echo $i; ?>" id="email" readonly style="border:none;"> </span>
                                  </div>

                                  </div>
                                  <div class="row a">
                                    <div class="col-md-2">
                                      <span><label for="name"> <strong>Contact:</strong> </label></span>
                                    </div>
                                  <div class="col-md-10">
                                      <span> <input type="text" name="contact" value="<?php echo $j; ?>" id="contact" readonly style="border:none;"> </span>
                                  </div>

                                  </div>
                                  <div class="row a">
                                    <div class="col-md-2">
                                      <span><label for="name"> <strong>Date of Birth:</strong> </label></span>
                                    </div>
                                  <div class="col-md-10">
                                      <span> <input type="text" name="category" value="<?php echo $c; ?>" id="category" readonly style="border:none;"> </span>
                                  </div>

                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="card" style="height: 300px;">
                              <div class="card-header">
                              </div>
                              <div class="card-content">
                                  <h4 class="card-title">Profile Photo
                                  </h4>

                                    <div class="card-profile">
                                      <div class="card-avatar">
                                                    <a href="#pablo">
                                                        <img class="img" src="<?php echo $h; ?>" />
                                                    </a>
                                                </div>
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
            <div class="card-content">
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
<?php
    
}
?>