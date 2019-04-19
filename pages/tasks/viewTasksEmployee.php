<?php
session_start();
error_reporting(0);
if($_SESSION['Username']!=""&&$_SESSION['Rights']=='employee')
{
    
?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png" />
        <link rel="icon" type="image/png" href="../../assets/img/favicon.png" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <script src="../../assets/vendors/jquery-3.1.1.min.js" type="text/javascript"></script>

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
    <body onload="loadingFunction()">
          <div class="wrapper">

    <!--  Sidebar included     -->
    <?php include('../pageElements/sidebar_employee.php'); ?>

    <div class="main-panel">

      <!--  Navbar included     -->
      <?php include('../pageElements/navbar_employee.php'); ?>

      <div class="content">
        <div class="container-fluid table-responsive">
            <table class="table table-hover">
    <thead style="background-color:#4CAF50;">
        <th>Task Id</th>
        <th>Task Name</th>
        <th>Task Description</th>
        <th>Task Deadline</th>
        <th>Actions</th>
    </thead>
    <tbody id="tableBodyPendingAll">
      
    </tbody>
  </table>
          
          </div>
        </div>
        </div>
        </div>
        <div id="mydiv" hidden></div>

    </body>
    <script type="text/javascript">
            function loadingFunction()
            {
              $.ajax({
                type: 'POST',
                url: '../php/enterDataViewTaskEmployee.php',

                beforeSend: function(){
                },
                success: function(response) {
                    $('#tableBodyPendingAll').append(response);
                }  
            });   
            }
    </script>
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
          demo.initFormExtendedDatetimepickers();
      });

  </script>
</html>

<?php
}
else
{
    
}
    ?>