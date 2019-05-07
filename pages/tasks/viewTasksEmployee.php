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
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/nouislider.min.css">
    <script type="text/javascript" src="../../assets/js/wNumb.js">

    </script>

  </head>

  <body onload="load()">
    <div class="wrapper">

      <!--  Sidebar included     -->
      <?php include('../pageElements/sidebar_employee.php'); ?>

      <div class="main-panel">

        <!--  Navbar included     -->
        <?php include('../pageElements/navbar.php'); ?>

        <div class="content">
          <div class="container-fluid">
            <!--  Page content goes here!    -->
            <div  id="dataContainer">

            </div>
            <div id="main" hidden>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4>TASKS:</h4>
                  </div>

                  <div class="card-content" style="padding:2%;">
                    <div id="simple-accordion-colored" class="accordion">


                      <h3 class="accordion-header md-bg-blue-400" style="padding:10px;"><span style="color:white; padding:10px;"><i class="fas fa-user-clock"></i>&nbsp;&nbsp;&nbsp;<strong>ONGOING</strong></span></h3>
                      <div class="accordion-content" data-wrapper="true" style="padding: 0px;overflow:hidden;height:0;position:relative;" aria-expanded="false">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="card">
                                <div class="card-content">
                                  <div class="material-datatables">
                                    <table class="datatables table table-striped table-no-bordered table-hover" id="ongoingTask" cellspacing="0" width="100%" style="width:100%">
                                      <thead>
                                        <tr>
                                          <th>Category</th>
                                          <th>Task ID</th>
                                          <th>Deadline</th>
                                          <th>Progress</th>
                                          <th>Task Name</th>
                                          <th class="disabled-sorting text-right">Actions</th>
                                        </tr>
                                      </thead>

                                      <tbody id="ongoingTable">

                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                                <!-- end content-->
                              </div>
                              <!--  end card  -->
                            </div>
                            <!-- end col-md-12 -->
                          </div>
                        </div>
                      </div>

                      <h3 class="accordion-header md-bg-green-400" style="padding:10px;"><span style="color:white; padding:10px;"><i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp;<strong>COMPLETED</strong></span></h3>
                      <div class="accordion-content" data-wrapper="true" style="padding: 0px;overflow:hidden;height:0;position:relative;" aria-expanded="false">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="card">
                                <div class="card-content">
                                  <div class="material-datatables">
                                    <table class="datatables table table-striped table-no-bordered table-hover" id="completedTask" cellspacing="0" width="100%" style="width:100%">
                                      <thead>
                                        <tr>
                                          <th>Category</th>
                                          <th>Task ID</th>
                                          <th>Deadline</th>
                                          <th>Progress</th>
                                          <th>Task Name</th>
                                          <th class="disabled-sorting text-right">Actions</th>
                                        </tr>
                                      </thead>

                                      <tbody id="completedTable">

                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                                <!-- end content-->
                              </div>
                              <!--  end card  -->
                            </div>
                            <!-- end col-md-12 -->
                          </div>
                        </div>
                        <label for="loadMore"></label>
                        <button id="loadMore" class="btn btn-primary" onclick="loadAll();">Load All</button>
                      </div>
                      <h3 class="accordion-header md-bg-green-400 call" style="padding:10px; visibility:hidden;"><span style="color:white; padding:10px;"><i class="fas fa-check"></i>&nbsp;&nbsp;&nbsp;<strong>COMPLETED ALL</strong></span></h3>
                      <div class="accordion-content call" data-wrapper="true" style="padding: 0px;overflow:hidden;height:0;position:relative; visibility:hidden;" aria-expanded="false">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="card">
                                <div class="card-content">
                                  <div class="toolbar">
                                    <select class="selectpicker" data-style="select-with-transition" title="FILTER" data-size="7" onchange="filterCompleted($(this).val());">
                                      <option disabled> DEPARTMENTS:</option>
                                      <option value="">ALL</option>
                                      <option value="WEB DEVELOPMENT">WEB DEVELOPMENT</option>
                                      <option value="GRAPHIC DESIGNING">GRAPHIC DESIGNING</option>
                                      <option value="DIGITAL MARKETING">DIGITAL MARKETING</option>
                                      <option value="PUBLIC RELATIONS">PUBLIC RELATIONS</option>
                                      <option value="CONTENT WRITING">CONTENT WRITING</option>
                                      <option value="VIDEO EDITING">VIDEO EDITING</option>
                                    </select>
                                  </div>
                                  <div class="material-datatables">
                                    <table class="datatables table table-striped table-no-bordered table-hover" id="completedAllTask" cellspacing="0" width="100%" style="width:100%">
                                      <thead>
                                        <tr>
                                          <th>Category</th>
                                          <th>Task ID</th>
                                          <th>Deadline</th>
                                          <th>Progress</th>
                                          <th>Task Name</th>
                                          <th class="disabled-sorting text-right">Actions</th>
                                        </tr>
                                      </thead>

                                      <tbody id="completedAllTable">

                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                                <!-- end content-->
                              </div>
                              <!--  end card  -->
                            </div>
                            <!-- end col-md-12 -->
                          </div>
                        </div>
                      </div>



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
  <script src="../../assets/vendors/jquery-3.1.1.min.js" type="text/javascript"></script>
  <script src="../../assets/vendors/jquery-ui-1.12.0/jquery-ui.js"></script>
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
  <script src="../../assets/js/nouislider.min.js"></script>
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


  <script>
  $(document).ready(function() {
    $("#simple-accordion").accordion({
      collapsible: true,
      animate: 200,
      activate: function(){
        $('.datatables').DataTable().responsive.recalc();
      }
    });

    $("#simple-accordion-colored").accordion({
      collapsible: true,
      animate: 200,
      activate: function(){
        $('.datatables').DataTable().responsive.recalc();
      }
    });
  });

  function load()
  {
    $.ajax({
      type: 'POST',
      url: '../php/enterDataViewTaskEmployee.php',

      beforeSend: function(){
      },
      success: function(response) {
        $('#main').html(response);
        addData();
      }
    });
  }

  function loadAll()
  {
    $.ajax({
      type: 'POST',
      url: '../php/enterDataViewAllTasks.php',

      beforeSend: function(){
      },
      success: function(response) {
        $('#main').html(response);
        $("#completedAllTable").append($('.completedAll'));
      }
    });
    $('.call').css('visibility','visible');
  }


  function addData(){
    $("#ongoingTable").append($('.ongoing'));
    $("#completedTable").append($('.completed'));

    $('.datatables').DataTable({
      "pagingType": "full_numbers",
      "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
      ],
      responsive: true,
      language: {
        search: "_INPUT_",
        searchPlaceholder: "Search records",
      }

    });
  }
  function updateProgress(rid)
  {
    var rowId=rid;
    $.ajax({
      type: 'post',
      url: '../php/updateTask.php',
      data: {
        rowId: rowId
      },
      success: function( data ) {
        $("#dataContainer").html(data);
        $("#myButton").trigger( "click" );
      }
    });
  }
  function updateTaskProgres(id, value){
    var progress = parseInt(value);
    $.ajax({
      type: 'POST',
      url: '../php/updateProgress.php',
      data: {taskId: id, progress: progress},

      beforeSend: function() {

      },
      success: function(response) {
        if(response.match(/Success/)){
          if(progress == 100){
            sendNotification();

          }
          else{
            swal({
              title: 'Task Updated!',
              text: "Successfully changed the progress.",
              type: 'success',
              showCancelButton: false,
              confirmButtonClass: 'btn btn-success',
              confirmButtonText: 'OK',
              buttonsStyling: false
            }).then(function() {
              location.reload();
            });
          }
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

  function myInfoFunction(rid)
  {
    var rowId=rid;
    $.ajax({
      type: 'post',
      url: '../php/taskDescription.php',
      data: {
        rowId: rowId
      },
      success: function( data ) {
        $("#dataContainer").html(data);
        $("#myButton").trigger( "click" );
      }
    });
  }

  //Sending Notification
  var name = '<?php echo $_SESSION['name'] ?>';
  function sendNotification(){
    $.ajax({
      type: 'POST',
      url: '../php/sendNotification.php',
      data: {  category: "task", name: name, description: "completed a task.", target: "admin", link: "../tasks/viewTasks.php" },

      success: function(response) {
        sendAlert();
      }
    });
  }
  function sendAlert(){
    var data = {
      category: "task",
      name: name,
      description: "completed a task.",
      target: "admin",
      link: "../tasks/viewTasks.php"
    };
    $.ajax({
      type: 'POST',
      url: '../../pusher.php',
      data: { data: data},

      success : function(response){
        swal({
          title: 'Task Completed!',
          text: "Successfully changed the progress.",
          type: 'success',
          showCancelButton: false,
          confirmButtonClass: 'btn btn-success',
          confirmButtonText: 'OK',
          buttonsStyling: false
        }).then(function() {
          location.reload();
        });
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
  <script>window.open('../index.html','_self')</script>
  <?php
}
?>
