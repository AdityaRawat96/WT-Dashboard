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

</head>

<body onload="load()">
    <div class="wrapper">

        <!--  Sidebar included     -->
        <?php include('../pageElements/sidebar.php'); ?>

        <div class="main-panel">

          <!--  Navbar included     -->
          <?php include('../pageElements/navbar.php'); ?>

            <div class="content">
                <div class="container-fluid">
                  <!--  Page content goes here!    -->
                  <div id="main" hidden>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>EMPLOYEES:</h4>
                            </div>

                            <div class="card-content" style="padding:2%;">
                                <div id="simple-accordion-colored" class="accordion">
                                    <h3 class="accordion-header md-bg-blue-400"><span style="color:white;"><i class="fas fa-edit"></i>&nbsp; &nbsp;&nbsp;WEB DEVELOPMENT</span></h3>
                                    <div class="accordion-content" data-wrapper="true" style="padding: 0px;height: 0px; position: relative; overflow: hidden;" aria-expanded="false">
                                      <div class="container-fluid">
                                          <div class="row">
                                              <div class="col-md-12">
                                                  <div class="card">
                                                      <div class="card-content">
                                                          <div class="material-datatables">
                                                              <table class="datatables table table-striped table-no-bordered table-hover" id="wdemployee" cellspacing="0" width="100%" style="width:100%">
                                                                  <thead>
                                                                      <tr>
                                                                          <th>Name</th>
                                                                          <th>Phone</th>
                                                                          <th>E-mail</th>
                                                                          <th class="disabled-sorting text-right">Actions</th>
                                                                      </tr>
                                                                  </thead>

                                                                  <tbody id="WDTable">

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

                                    <h3 class="accordion-header md-bg-blue-400"><span style="color:white;"><i class="fas fa-pencil-ruler"></i>&nbsp;&nbsp;&nbsp;GRAPHIC DESIGNING</span></h3>
                                    <div class="accordion-content" data-wrapper="true" style="padding: 0px;overflow:hidden;height:0;position:relative;" aria-expanded="false">
                                      <div class="container-fluid">
                                          <div class="row">
                                              <div class="col-md-12">
                                                  <div class="card">
                                                      <div class="card-content">
                                                          <div class="material-datatables">
                                                              <table class="datatables table table-striped table-no-bordered table-hover" id="gdemployee" cellspacing="0" width="100%" style="width:100%">
                                                                  <thead>
                                                                      <tr>
                                                                          <th>Name</th>
                                                                          <th>Phone</th>
                                                                          <th>E-mail</th>
                                                                          <th class="disabled-sorting text-right">Actions</th>
                                                                      </tr>
                                                                  </thead>

                                                                  <tbody id="GDTable">

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

                                    <h3 class="accordion-header md-bg-blue-400"><span style="color:white;"><i class="fas fa-edit"></i>&nbsp;&nbsp;&nbsp;CONTENT WRITING</span></h3>
                                    <div class="accordion-content" data-wrapper="true" style="padding: 0px;overflow:hidden;height:0;position:relative;" aria-expanded="false">
                                      <div class="container-fluid">
                                          <div class="row">
                                              <div class="col-md-12">
                                                  <div class="card">
                                                      <div class="card-content">
                                                          <div class="material-datatables">
                                                              <table class="datatables table table-striped table-no-bordered table-hover" id="cwemployee" cellspacing="0" width="100%" style="width:100%">
                                                                  <thead>
                                                                      <tr>
                                                                          <th>Name</th>
                                                                          <th>Phone</th>
                                                                          <th>E-mail</th>
                                                                          <th class="disabled-sorting text-right">Actions</th>
                                                                      </tr>
                                                                  </thead>

                                                                  <tbody id="CWTable">

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
                                    <h3 class="accordion-header md-bg-blue-400"><span style="color:white;"><i class="fas fa-globe-asia"></i>&nbsp;&nbsp;&nbsp;DIGITAL MARKETING</span></h3>
                                    <div class="accordion-content" data-wrapper="true" style="padding: 0px;height: 0px; position: relative; overflow: hidden;" aria-expanded="false">
                                      <div class="container-fluid">
                                          <div class="row">
                                              <div class="col-md-12">
                                                  <div class="card">
                                                      <div class="card-content">
                                                          <div class="material-datatables">
                                                              <table class="datatables table table-striped table-no-bordered table-hover" id="dmemployee" cellspacing="0" width="100%" style="width:100%">
                                                                  <thead>
                                                                      <tr>
                                                                          <th>Name</th>
                                                                          <th>Phone</th>
                                                                          <th>E-mail</th>
                                                                          <th class="disabled-sorting text-right">Actions</th>
                                                                      </tr>
                                                                  </thead>

                                                                  <tbody id="DMTable">

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

                                    <h3 class="accordion-header md-bg-blue-400"><span style="color:white;"><i class="fas fa-video"></i>&nbsp;&nbsp;&nbsp;VIDEO EDITING</span></h3>
                                    <div class="accordion-content" data-wrapper="true" style="padding: 0px;overflow:hidden;height:0;position:relative;" aria-expanded="false">
                                      <div class="container-fluid">
                                          <div class="row">
                                              <div class="col-md-12">
                                                  <div class="card">
                                                      <div class="card-content">
                                                          <div class="material-datatables">
                                                              <table class="datatables table table-striped table-no-bordered table-hover" id="veemployee" cellspacing="0" width="100%" style="width:100%">
                                                                  <thead>
                                                                      <tr>
                                                                          <th>Name</th>
                                                                          <th>Phone</th>
                                                                          <th>E-mail</th>
                                                                          <th class="disabled-sorting text-right">Actions</th>
                                                                      </tr>
                                                                  </thead>

                                                                  <tbody id="VETable">

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

                                    <h3 class="accordion-header md-bg-blue-400"><span style="color:white;"><i class="fas fa-users"></i>&nbsp;&nbsp;&nbsp;PUBLIC RELATIONS</span></h3>
                                    <div class="accordion-content" data-wrapper="true" style="padding: 0px;overflow:hidden;height:0;position:relative;" aria-expanded="false">
                                      <div class="container-fluid">
                                          <div class="row">
                                              <div class="col-md-12">
                                                  <div class="card">
                                                      <div class="card-content">
                                                          <div class="material-datatables">
                                                              <table class="datatables table table-striped table-no-bordered table-hover" id="premployee" cellspacing="0" width="100%" style="width:100%">
                                                                  <thead>
                                                                      <tr>
                                                                          <th>Name</th>
                                                                          <th>Phone</th>
                                                                          <th>E-mail</th>
                                                                          <th class="disabled-sorting text-right">Actions</th>
                                                                      </tr>
                                                                  </thead>

                                                                  <tbody id="PRTable">

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
         url: '../php/viewEmployeeData.php',

             beforeSend: function(){
         },
         success: function(response) {
           $('#main').html(response);
           addData();
         }
       });
    }


     function addData(){
       $("#WDTable").append($('.wd'));
       $("#GDTable").append($('.gd'));
       $("#CWTable").append($('.cw'));
       $("#DMTable").append($('.dm'));
       $("#VETable").append($('.ve'));
       $("#PRTable").append($('.pr'));

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


       var table = $('.datatables').DataTable();


        $(document).on('click', '.remove', function () {
            var table=$(this).closest('table').attr('id');
//            alert(table);
            var mytable=$('#'+table).DataTable();
            var tr = $(this).closest('tr').attr('id');
             swal({
                  title: 'Are you sure?',
                  text: 'You want to remove this employee!',
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonText: 'Yes, remove it!',
                  cancelButtonText: 'No, keep it',
                  confirmButtonClass: "btn btn-success",
                  cancelButtonClass: "btn btn-danger",
                  buttonsStyling: false
              }).then(function() {

                swal({
                  title: 'Deleted!',
                  text: 'Employee has been removed.',
                  type: 'success',
                  confirmButtonClass: "btn btn-success",
                  buttonsStyling: false
                  }).then(function(){

                    $.ajax({
                    type: 'POST',
                    url: '../php/delete_employee.php',
                    data: {id:tr},

                        beforeSend: function() {

                    },
                success: function(response) {
                    if ( response.match(/success/) )
                        {
                           mytable.row('#'+tr).remove().draw();
                        }
                    else
                    {
                        window.open('../php/error.php?myval=4');
                    }
                }
                });

                });
              }, function(dismiss) {
                if (dismiss === 'cancel') {
                  swal({
                    title: 'Cancelled',
                    text: 'Employee is safe :)',
                    type: 'error',
                    confirmButtonClass: "btn btn-info",
                    buttonsStyling: false
                  })
                }
              });
        });

       //Like record
       table.on('click', '.view', function() {
           alert('You clicked on Like button');
       });

       $('.card .material-datatables label').addClass('form-group');
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
