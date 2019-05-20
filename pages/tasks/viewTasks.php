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
    <!--    JQuery UI     -->
    <link href="../../assets/vendors/jquery-ui-1.12.0/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  </head>

  <body onload="load()">
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
                      <h3 class="accordion-header md-bg-red-400" style="padding:10px;"><span style="color:white; padding:10px;"><i class="fas fa-clipboard-list"></i>&nbsp;&nbsp;&nbsp;<strong>PENDING</strong></span></h3>
                      <div class="accordion-content" data-wrapper="true" style="padding: 0px;height: 0px; position: relative; overflow: hidden;" aria-expanded="false">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="card">
                                <div class="card-content">
                                  <div class="toolbar">
                                    <select class="selectpicker" data-style="select-with-transition" title="FILTER" data-size="7" onchange="filterPending($(this).val());">
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
                                    <table class="datatables table table-striped table-no-bordered table-hover" id="pendingTask" cellspacing="0" width="100%" style="width:100%">
                                      <thead>
                                        <tr>
                                          <th>Category</th>
                                          <th>Task ID</th>
                                          <th>Deadline</th>
                                          <th>Task Name</th>
                                          <th class="disabled-sorting text-right">Actions</th>
                                        </tr>
                                      </thead>

                                      <tbody id="pendingTable">

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

                      <h3 class="accordion-header md-bg-blue-400" style="padding:10px;"><span style="color:white; padding:10px;"><i class="fas fa-user-clock"></i>&nbsp;&nbsp;&nbsp;<strong>ONGOING</strong></span></h3>
                      <div class="accordion-content" data-wrapper="true" style="padding: 0px;overflow:hidden;height:0;position:relative;" aria-expanded="false">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="card">
                                <div class="card-content">
                                  <div class="toolbar">
                                    <select class="selectpicker" data-style="select-with-transition" title="FILTER" data-size="7" onchange="filterOngoing($(this).val());">
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
                                    <table class="datatables table table-striped table-no-bordered table-hover" id="completedTask" cellspacing="0" width="100%" style="width:100%">
                                      <thead>
                                        <tr>
                                          <th>Category</th>
                                          <th>Task ID</th>
                                          <th>Completion date</th>
                                          <th>Assigned Employee</th>
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
                                          <th>Completion date</th>
                                          <th>Assigned Employee</th>
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
  <script src="../../assets/vendors/nouislider.min.js"></script>
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
  var userId;
  $(document).ready(function() {
    $('.navbar-brand').html('View Tasks');
    $('.activeTabsSidebar').removeClass('active');
    $('#activeTabsSidebarTask').addClass('active');
    $('#activeTabsSidebarViewTask').addClass('active');
    $('#tasks').addClass('in');
    $('#tasks').css('height','');

    $(document).ajaxComplete(function () {
          $('.loader').fadeOut();
     });
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


    //Remove task!
    $(document).on('click', '.remove', function () {
      var rid = $(this).closest('tr').attr('id');
      if($(this).closest('table').attr('id') == 'pendingTask'){
        var table = $('#pendingTask').DataTable();
      }
      else if($(this).closest('table').attr('id') == 'ongoingTask'){
        var table = $('#ongoingTask').DataTable();
      }
      else if($(this).closest('table').attr('id') == 'completedTask'){
        var table = $('#completedTask').DataTable();
      }

      swal({
        title: 'Are you sure?',
        text: 'You want to delete this task!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, keep it',
        confirmButtonClass: "btn btn-success",
        cancelButtonClass: "btn btn-danger",
        buttonsStyling: false
      }).then(function() {
        swal({
          title: 'Deleted!',
          text: 'Task has been deleted.',
          type: 'success',
          confirmButtonClass: "btn btn-success",
          buttonsStyling: false
        }).then(function(){

          $.ajax({
            type: 'POST',
            url: '../php/delete.php',
            data: {id:rid},

            beforeSend: function() {

            },
            success: function(response) {
              if ( response.match(/success/) )
              {
                table.row("#"+rid).remove().draw();
              }
              else
              {
                alert('Error Occured');
              }
            }
          });

        });
      }, function(dismiss) {
        if (dismiss === 'cancel') {
          swal({
            title: 'Cancelled',
            text: 'Task is safe :)',
            type: 'error',
            confirmButtonClass: "btn btn-info",
            buttonsStyling: false
          })
        }
      });
    });


  });

  function load()
  {
      $.ajax({
      type: 'POST',
      url: '../php/enterDataViewTask.php',

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
    $("#pendingTable").append($('.pending'));
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
  function assignTask(rid)
  {
      $('.loader').fadeIn();
    var rowId=rid;
    $.ajax({
      type: 'post',
      url: '../php/assignTask.php',
      data: {
        rowId: rowId
      },
      success: function( data ) {
        $("#dataContainer").html(data);
        $("#myButton").trigger( "click" );
          $('.loader').fadeOut();
      }
    });
  }
  function assignEmployee(){
    if($('#users').val()==null)
    {
      alert('Please Select any employee');
      return false;
    }

    $myVar=$('#users').val();
    // console.log($myVar);
    $index=$myVar.indexOf('/');
    $myvar1=$myVar.substring(0,$index);
    $myvar2=$myVar.substring($index+1);
    userId = $myVar.substring($index+1);

    $.ajax({
      type: 'POST',
      url: '../php/assigntaskdb.php',
      data: {taskId:$('#taskidfield').val(),userId:$myvar2,userIdName:$myvar1},

      beforeSend: function() {
          $('.loader').fadeIn();
      },
      success: function(response) {
        if(response.match(/Success/)){
          sendNotification();
        }
        else{
            $('.loader').fadeOut();
          swal({
            title: "Error occured!",
            timer: 5000,
            text: "Please try again",
            buttonsStyling: false,
            confirmButtonClass: "btn btn-success",
            type: "warning"
          })
        }
      }
    });
  }
  function myInfoFunction(rid)
  {
      $('.loader').fadeIn();
    var rowId=rid;
    $.ajax({
      type: 'post',
      url: '../php/taskDescription.php',
      data: {
        rowId: rowId
      },
      success: function( data ) {
          $('.loader').fadeOut();
        $("#dataContainer").html(data);
        $("#myButton").trigger( "click" );
      }
    });
  }
  function filterPending(filterVal){
    var table = $('#pendingTask').DataTable();
    table.search(filterVal).draw();
  }
  function filterOngoing(filterVal){
    var table = $('#ongoingTask').DataTable();
    table.search(filterVal).draw();
  }
  function filterCompleted(filterVal){
    var table = $('#completedTask').DataTable();
    table.search(filterVal).draw();
  }

  function sendNotification(){
    $.ajax({
      type: 'POST',
      url: '../php/sendNotification.php',
      data: {  category: "task", name: "You", description: "are assigned a new task.", target: userId, link: "../tasks/viewTasksEmployee.php" },

      success: function(response) {
        sendAlert();
      }
    });
  }
  function sendAlert(){
    var data = {
      category: "task",
      name: "You",
      description: "are assigned a new task.",
      target: userId,
      link: "../tasks/viewTasksEmployee.php"
    };
    $.ajax({
      type: 'POST',
      url: '../../pusher.php',
      data: { data: data},

      success : function(response){
        swal({
          title: 'Task Assigned!',
          text: "Successfully Assigned",
          type: 'success',
          showCancelButton: false,
          confirmButtonClass: 'btn btn-success',
          confirmButtonText: 'OK',
          buttonsStyling: false
        }).then(function() {
          window.open('viewTasks.php','_self');
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
  <script>window.open('../php/cookiesunset.php','_self')</script>
  <?php
}
?>
