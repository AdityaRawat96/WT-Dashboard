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

  <body onload="$('.loader').fadeOut();">
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
                <div class="card">
                  <form method="get" class="form-horizontal">
                    <div class="card-header card-header-text">
                      <h4 class="card-title">ADD TASK:</h4>
                    </div>
                    <div class="card-content">

                      <div class="row">
                        <label class="col-sm-2 label-on-left" for="category">TASK CATEGORY:</label>
                        <div class="col-sm-3">
                          <select class="selectpicker" data-style="btn btn-info btn-round" title="Single Select" data-size="7" id="task_category">
                            <option value='0' disabled selected >SELECT CATEGORY</option>
                            <option value="WEB DEVELOPMENT" >WEB DEVELOPMENT</option>
                            <option value="CONTENT WRITING" >CONTENT WRITING</option>
                            <option value="DIGITAL MARKETING" >DIGITAL MARKETING</option>
                            <option value="GRAPHIC DESIGNING" >GRAPHIC DESIGNING</option>
                            <option value="PUBLIC RELATIONS" >PUBLIC RELATIONS</option>
                            <option value="VIDEO EDITOR" >VIDEO EDITOR</option>
                          </select>
                        </div>
                      </div>
                      <br><br>


                      <div class="row">
                        <label class="col-sm-2 label-on-left">TASK NAME:</label>
                        <div class="col-sm-10">
                          <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <input type="text" class="form-control" placeholder="" name="task_name" id="task_name" maxlength="100" onkeyup="headingCount();">
                            <span class="help-block" id="headingSpan">Add a heading for your task (0/100).</span>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <label class="col-sm-2 label-on-left">TASK DESCRIPTION:</label>
                        <div class="col-sm-10">
                          <div class="form-group label-floating is-empty">
                            <label class="control-label"></label>
                            <textarea rows="4" type="text" class="form-control" placeholder="" name="task_description" id="task_description" maxlength="300" onkeyup="descriptionCount();"></textarea>
                            <span class="help-block" id="descriptionSpan">Add a description for your task (0/300).</span>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <label class="col-sm-2 label-on-left">TASK DEADLINE:</label>
                        <div class="col-sm-10">
                          <div class="form-group label-floating is-empty">
                            <input type="text" class="form-control datetimepicker" name="task_deadline" id="task_deadline" onkeydown="return false;" />
                          </div>
                        </div>
                      </div>
                      <br>
                      <br>

                      <div class="row">
                        <div class="col-md-6 text-center">
                          <button type="button" class="btn btn-info btn-round" onclick="clearFields();">RESET &nbsp;<i class="material-icons">close</i></button>

                        </div>
                        <div class="col-md-6 text-center">
                          <button type="button" class="btn btn-info btn-round" onclick="addTask();">SUBMIT &nbsp;<i class="material-icons">keyboard_arrow_right</i></button>

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
  <!--  Google Maps Plugin    -->
   
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
    $('.navbar-brand').html('Add Task');
    $('.activeTabsSidebar').removeClass('active');
    $('#activeTabsSidebarTask').addClass('active');
    $('#activeTabsSidebarAddTask').addClass('active');
    $('#tasks').addClass('in');
    $('#tasks').css('height','');
  });

</script>

<script type="text/javascript">


function headingCount(){
  var len1 = $('#task_name').val();
  $('#headingSpan').html("Add Name for your Task  ("+(len1.length)+"/100).");
}

function descriptionCount(){
  var len1 = $('#task_description').val();
  $('#descriptionSpan').html("Add Description for your Task ("+(len1.length)+"/300).");
}

function addTask(){
  //alert($('#task_category').val());

  if($('#task_category').val()==null)
  {
    alert("Task category cannot be left empty!");
    $('#task_category').focus();
    return false;
  }
  else if($('#task_name').val()=='')
  {
    alert("Task Name cannot be left empty!");
    $('#task_name').focus();
    return false;
  }
  else if($('#task_description').val()=='')
  {
    alert("Task description cannot be left empty!");
    $('#task_description').focus();
    return false;
  }
  else if($('#task_deadline').val()=='')
  {
    alert("Task deadline cannot be left empty!");
    $('#task_deadline').focus();
    return false;
  }
  else
  {
    if(navigator.onLine)
    {
      var taskId = ($('#task_category')).val();
      var fname = taskId.substring(0,taskId.indexOf(" "));
      var lname = taskId.substring(taskId.indexOf(" ")+1,taskId.length);
      taskId=" ";
      taskId = fname.substring(0,1)+lname.substring(0,1)+Math.floor(Date.now() /1000);

      $.ajax({
        type: 'POST',
        url: '../php/addTaskDatabase.php',
        data: { task_id: taskId, task_category: $('#task_category').val(), task_name: $('#task_name').val(), task_description: $('#task_description').val(), task_deadline: $('#task_deadline').val(), task_status: "PENDING"},
        beforeSend: function() {
          $('.loader').fadeIn();
        },
        success: function(response) {
          $('.loader').fadeOut();
          showAlert();
        }
      });
    }
    else
    {
      alert('no internet connection');
    }
  }
}

function showAlert(){
  swal({
    title: "Done!",
    timer: 5000,
    text: "Task added successfully!",
    buttonsStyling: false,
    confirmButtonClass: "btn btn-success",
    type: "success"
  });
  $('#task_name').val('');
  $('#task_description').val('');
  $('#task_deadline').val('');
  $('#task_category').val('0').change();
}

function clearFields(){
  swal({
    title: 'Are you sure?',
    text: 'You want to reset all fields!',
    type: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, reset it!',
    cancelButtonText: 'No, keep it',
    confirmButtonClass: "btn btn-success",
    cancelButtonClass: "btn btn-danger",
    buttonsStyling: false
  }).then(function() {
    $('#task_name').val('');
    $('#task_description').val('');
    $('#task_deadline').val('');
    $('#task_category').val('0').change();
  }, function(dismiss) {
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
  <script>window.open('../php/cookiesunset.php','_self')</script>
  <?php
}
?>
