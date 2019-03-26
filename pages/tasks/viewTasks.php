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



  <script type="text/javascript">
  var tableDataPendingAll ='';
  var tableDataPendingWebDevelopment ='';
  var tableDataPendingContentWriting ='';
  var tableDataPendingDigitalMarketing ='';
  var tableDataPendingGraphicDesigning ='';

  var tableDataOngoingAll ='';
  var tableDataOngoingWebDevelopment ='';
  var tableDataOngoingContentWriting ='';
  var tableDataOngoingDigitalMarketing ='';
  var tableDataOngoingGraphicDesigning ='';

  var tableDataCompletedAll ='';
  var tableDataCompletedWebDevelopment ='';
  var tableDataCompletedContentWriting ='';
  var tableDataCompletedDigitalMarketing ='';
  var tableDataCompletedGraphicDesigning ='';

    function loadTableData(data, category){
      if(category == 'PWD'){
        tableDataPendingWebDevelopment = tableDataPendingWebDevelopment + data;
        tableDataPendingAll = tableDataPendingAll + data;
      }
      else if(category == 'PCW'){
        tableDataPendingContentWriting = tableDataPendingContentWriting + data;
        tableDataPendingAll = tableDataPendingAll + data;
      }
      else if(category == 'PDM'){
        tableDataPendingDigitalMarketing = tableDataPendingDigitalMarketing + data;
        tableDataPendingAll = tableDataPendingAll + data;
      }
      else if(category == 'PGD'){
        tableDataPendingGraphicDesigning = tableDataPendingGraphicDesigning + data;
        tableDataPendingAll = tableDataPendingAll + data;
      }


      else if(category == 'OWD'){
        tableDataOngoingWebDevelopment = tableDataOngoingWebDevelopment + data;
        tableDataOngoingAll = tableDataOngoingAll + data;
      }
      else if(category == 'OCW'){
        tableDataOngoingContentWriting = tableDataOngoingContentWriting + data;
        tableDataOngoingAll = tableDataOngoingAll + data;
      }
      else if(category == 'ODM'){
        tableDataOngoingDigitalMarketing = tableDataOngoingDigitalMarketing + data;
        tableDataOngoingAll = tableDataOngoingAll + data;
      }
      else if(category == 'OPGD'){
        tableDataOngoingGraphicDesigning = tableDataOngoingGraphicDesigning + data;
        tableDataOngoingAll = tableDataOngoingAll + data;
      }


      else if(category == 'CWD'){
        tableDataCompletedWebDevelopment = tableDataCompletedWebDevelopment + data;
        tableDataCompletedAll = tableDataCompletedAll + data;
      }
      else if(category == 'CCW'){
        tableDataCompletedContentWriting = tableDataCompletedContentWriting + data;
        tableDataCompletedAll = tableDataCompletedAll + data;
      }
      else if(category == 'CDM'){
        tableDataCompletedDigitalMarketing = tableDataCompletedDigitalMarketing + data;
        tableDataCompletedAll = tableDataCompletedAll + data;
      }
      else if(category == 'CGD'){
        tableDataCompletedGraphicDesigning = tableDataCompletedGraphicDesigning + data;
        tableDataCompletedAll = tableDataCompletedAll + data;
      }

    }
    function showData(){
      $('.datatables').DataTable().destroy();
      $('#tableBodyPendingAll').html(tableDataPendingAll);
      $('#tableBodyPendingWebDevelopment').html(tableDataPendingWebDevelopment);
      $('#tableBodyPendingContentWriting').html(tableDataPendingContentWriting);
      $('#tableBodyPendingDigitalMarketing').html(tableDataPendingDigitalMarketing);
      $('#tableBodyPendingGraphicDesigning').html(tableDataPendingGraphicDesigning);

      $('#tableBodyOngoingAll').html(tableDataOngoingAll);
      $('#tableBodyOngoingWebDevelopment').html(tableDataOngoingWebDevelopment);
      $('#tableBodyOngoingContentWriting').html(tableDataOngoingContentWriting);
      $('#tableBodyOngoingDigitalMarketing').html(tableDataOngoingDigitalMarketing);
      $('#tableBodyOngoingGraphicDesigning').html(tableDataOngoingGraphicDesigning);

      $('#tableBodyCompletedAll').html(tableDataCompletedAll);
      $('#tableBodyCompletedWebDevelopment').html(tableDataCompletedWebDevelopment);
      $('#tableBodyCompletedContentWriting').html(tableDataCompletedContentWriting);
      $('#tableBodyCompletedDigitalMarketing').html(tableDataCompletedDigitalMarketing);
      $('#tableBodyCompletedGraphicDesigning').html(tableDataCompletedGraphicDesigning);
      $('.datatables').DataTable().draw();
    }

  </script>

</head>

<body onload="showData()">
  <div class="wrapper">

      <!--  Sidebar included     -->
      <?php include('../pageElements/sidebar.php'); ?>

      <div class="main-panel">

        <!--  Navbar included     -->
        <?php include('../pageElements/navbar.php'); ?>

          <div class="content">
              <div class="container-fluid">

                <!--  Page content goes here!    -->

                <?php include('../php/enterDataViewTask.php'); ?>


                <div class="row">
                  <div class="col-lg-12">

                    <div class="card">
                        <div class="card-header">
                            <h4>TASKS:</h4>
                        </div>

                        <div class="card-content">
                          <h4 class="w-100 md-bg-red-300 p-t-15 p-b-15 p-l-30 f-400">Pending</h4>
                          <div id="simple-accordion-alt-3" class="accordion accordion-alt">
                              <h3 class="accordion-header">ALL</h3>
                              <div class="accordion-content" data-wrapper="true" style="overflow:hidden;height:0;position:relative;" aria-expanded="false">
                                  <div>
                                    <div class="material-datatables">
                                        <table id='tablePA' class="datatables table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%;padding:0px;margin:0px;">
                                            <thead>
                                                <tr>
                                                    <th>Category</th>
                                                    <th>Task Id</th>
                                                    <th>Task Name</th>
                                                    <th>Deadline</th>
                                                    <th class="disabled-sorting text-right">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tableBodyPendingAll">

                                            </tbody>
                                        </table>
                                    </div>
                                  </div>
                              </div>


                                <h3 class="accordion-header">Web Development</h3>
                                <div class="accordion-content" data-wrapper="true" style="overflow:hidden;height:0;position:relative;" aria-expanded="false">
                                    <div>
                                      <div class="material-datatables">
                                          <table id='tablePWD' class="datatables table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%;padding:0px;margin:0px;">
                                              <thead>
                                                  <tr>
                                                      <th>Category</th>
                                                      <th>Task Id</th>
                                                      <th>Task Name</th>
                                                      <th>Deadline</th>
                                                      <th class="disabled-sorting text-right">Actions</th>
                                                  </tr>
                                              </thead>
                                              <tbody id="tableBodyPendingWebDevelopment">

                                              </tbody>
                                          </table>
                                      </div>
                                    </div>
                                </div>

                                <h3 class="accordion-header">Content Writing</h3>
                                <div class="accordion-content" data-wrapper="true" style="overflow:hidden;height:0;position:relative;" aria-expanded="false">
                                    <div>
                                      <div class="material-datatables">
                                          <table id='tablePCW' class="datatables table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%;padding:0px;margin:0px;">
                                              <thead>
                                                  <tr>
                                                      <th>Category</th>
                                                      <th>Task Id</th>
                                                      <th>Task Name</th>
                                                      <th>Deadline</th>
                                                      <th class="disabled-sorting text-right">Actions</th>
                                                  </tr>
                                              </thead>
                                              <tbody id="tableBodyPendingContentWriting">

                                              </tbody>
                                          </table>
                                      </div>
                                    </div>
                                </div>

                                <h3 class="accordion-header">Digital Marketing</h3>
                                <div class="accordion-content" data-wrapper="true" style="overflow:hidden;height:0;position:relative;" aria-expanded="false">
                                    <div>
                                      <div class="material-datatables">
                                          <table id='tablePDM' class="datatables table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%;padding:0px;margin:0px;">
                                              <thead>
                                                  <tr>
                                                      <th>Category</th>
                                                      <th>Task Id</th>
                                                      <th>Task Name</th>
                                                      <th>Deadline</th>
                                                      <th class="disabled-sorting text-right">Actions</th>
                                                  </tr>
                                              </thead>
                                              <tbody id="tableBodyPendingDigitalMarketing">

                                              </tbody>
                                          </table>
                                      </div>
                                    </div>
                                </div>

                                <h3 class="accordion-header">Graphic Designing</h3>
                                <div class="accordion-content" data-wrapper="true" style="overflow:hidden;height:0;position:relative;" aria-expanded="false">
                                    <div>
                                      <div class="material-datatables">
                                          <table id='tablePGD' class="datatables table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%;padding:0px;margin:0px;">
                                              <thead>
                                                  <tr>
                                                      <th>Category</th>
                                                      <th>Task Id</th>
                                                      <th>Task Name</th>
                                                      <th>Deadline</th>
                                                      <th class="disabled-sorting text-right">Actions</th>
                                                  </tr>
                                              </thead>
                                              <tbody id="tableBodyPendingGraphicDesigning">

                                              </tbody>
                                          </table>
                                      </div>
                                    </div>
                                </div>
                            </div>

                            <h4 class="w-100 md-bg-blue-300 p-t-15 p-b-15 p-l-30 f-400">Ongoing</h4>
                            <div id="simple-accordion-alt-3" class="accordion accordion-alt">
                                <h3 class="accordion-header">ALL</h3>
                                <div class="accordion-content" data-wrapper="true" style="overflow:hidden;height:0;position:relative;" aria-expanded="false">
                                    <div>
                                      <div class="material-datatables">
                                          <table id='tableOA' class="datatables table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%;padding:0px;margin:0px;">
                                              <thead>
                                                  <tr>
                                                      <th>Category</th>
                                                      <th>Task Id</th>
                                                      <th>Task Name</th>
                                                      <th>Deadline</th>
                                                      <th class="disabled-sorting text-right">Actions</th>
                                                  </tr>
                                              </thead>
                                              <tbody id="tableBodyOngoingAll">

                                              </tbody>
                                          </table>
                                      </div>
                                    </div>
                                </div>

                                <h3 class="accordion-header">Web Development</h3>
                                <div class="accordion-content" data-wrapper="true" style="overflow:hidden;height:0;position:relative;" aria-expanded="false">
                                    <div>
                                      <div class="material-datatables">
                                          <table id='tableOWD' class="datatables table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%;padding:0px;margin:0px;">
                                              <thead>
                                                  <tr>
                                                      <th>Category</th>
                                                      <th>Task Id</th>
                                                      <th>Task Name</th>
                                                      <th>Deadline</th>
                                                      <th class="disabled-sorting text-right">Actions</th>
                                                  </tr>
                                              </thead>
                                              <tbody id="tableBodyOngoingWebDevelopment">

                                              </tbody>
                                          </table>
                                      </div>
                                    </div>
                                </div>

                                <h3 class="accordion-header">Content Writing</h3>
                                <div class="accordion-content" data-wrapper="true" style="overflow:hidden;height:0;position:relative;" aria-expanded="false">
                                    <div>
                                      <div class="material-datatables">
                                          <table id='tableOCW' class="datatables table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%;padding:0px;margin:0px;">
                                              <thead>
                                                  <tr>
                                                      <th>Category</th>
                                                      <th>Task Id</th>
                                                      <th>Task Name</th>
                                                      <th>Deadline</th>
                                                      <th class="disabled-sorting text-right">Actions</th>
                                                  </tr>
                                              </thead>
                                              <tbody id="tableBodyOngoingContentWriting">

                                              </tbody>
                                          </table>
                                      </div>
                                    </div>
                                </div>

                                <h3 class="accordion-header">Digital Marketing</h3>
                                <div class="accordion-content" data-wrapper="true" style="overflow:hidden;height:0;position:relative;" aria-expanded="false">
                                    <div>
                                      <div class="material-datatables">
                                          <table id='tableODM' class="datatables table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%;padding:0px;margin:0px;">
                                              <thead>
                                                  <tr>
                                                      <th>Category</th>
                                                      <th>Task Id</th>
                                                      <th>Task Name</th>
                                                      <th>Deadline</th>
                                                      <th class="disabled-sorting text-right">Actions</th>
                                                  </tr>
                                              </thead>
                                              <tbody id="tableBodyOngoingDigitalMarketing">

                                              </tbody>
                                          </table>
                                      </div>
                                    </div>
                                </div>

                                <h3 class="accordion-header">Graphic Designing</h3>
                                <div class="accordion-content" data-wrapper="true" style="overflow:hidden;height:0;position:relative;" aria-expanded="false">
                                    <div>
                                      <div class="material-datatables">
                                          <table id='tableOGD' class="datatables table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%;padding:0px;margin:0px;">
                                              <thead>
                                                  <tr>
                                                      <th>Category</th>
                                                      <th>Task Id</th>
                                                      <th>Task Name</th>
                                                      <th>Deadline</th>
                                                      <th class="disabled-sorting text-right">Actions</th>
                                                  </tr>
                                              </thead>
                                              <tbody id="tableBodyOngoingGraphicDesigning">

                                              </tbody>
                                          </table>
                                      </div>
                                    </div>
                                </div>
                            </div>

                            <h4 class="w-100 md-bg-green-300 p-t-15 p-b-15 p-l-30 f-400">Completed</h4>
                            <div id="simple-accordion-alt-3" class="accordion accordion-alt">
                                <h3 class="accordion-header">ALL</h3>
                                <div class="accordion-content" data-wrapper="true" style="overflow:hidden;height:0;position:relative;" aria-expanded="false">
                                    <div>
                                      <div class="material-datatables">
                                          <table id='tableCA' class="datatables table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%;padding:0px;margin:0px;">
                                              <thead>
                                                  <tr>
                                                      <th>Category</th>
                                                      <th>Task Id</th>
                                                      <th>Task Name</th>
                                                      <th>Deadline</th>
                                                      <th class="disabled-sorting text-right">Actions</th>
                                                  </tr>
                                              </thead>
                                              <tbody id="tableBodyCompletedAll">

                                              </tbody>
                                          </table>
                                      </div>
                                    </div>
                                </div>

                                <h3 class="accordion-header">Web Development</h3>
                                <div class="accordion-content" data-wrapper="true" style="overflow:hidden;height:0;position:relative;" aria-expanded="false">
                                    <div>
                                      <div class="material-datatables">
                                          <table id='tableCWD' class="datatables table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%;padding:0px;margin:0px;">
                                              <thead>
                                                  <tr>
                                                      <th>Category</th>
                                                      <th>Task Id</th>
                                                      <th>Task Name</th>
                                                      <th>Deadline</th>
                                                      <th class="disabled-sorting text-right">Actions</th>
                                                  </tr>
                                              </thead>
                                              <tbody id="tableBodyCompletedWebDevelopment">

                                              </tbody>
                                          </table>
                                      </div>
                                    </div>
                                </div>

                                <h3 class="accordion-header">Content Writing</h3>
                                <div class="accordion-content" data-wrapper="true" style="overflow:hidden;height:0;position:relative;" aria-expanded="false">
                                    <div>
                                      <div class="material-datatables">
                                          <table id='tableCCW' class="datatables table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%;padding:0px;margin:0px;">
                                              <thead>
                                                  <tr>
                                                      <th>Category</th>
                                                      <th>Task Id</th>
                                                      <th>Task Name</th>
                                                      <th>Deadline</th>
                                                      <th class="disabled-sorting text-right">Actions</th>
                                                  </tr>
                                              </thead>
                                              <tbody id="tableBodyCompletedContentWriting">

                                              </tbody>
                                          </table>
                                      </div>
                                    </div>
                                </div>

                                <h3 class="accordion-header">Digital Marketing</h3>
                                <div class="accordion-content" data-wrapper="true" style="overflow:hidden;height:0;position:relative;" aria-expanded="false">
                                    <div>
                                      <div class="material-datatables">
                                          <table id='tableCDM' class="datatables table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%;padding:0px;margin:0px;">
                                              <thead>
                                                  <tr>
                                                      <th>Category</th>
                                                      <th>Task Id</th>
                                                      <th>Task Name</th>
                                                      <th>Deadline</th>
                                                      <th class="disabled-sorting text-right">Actions</th>
                                                  </tr>
                                              </thead>
                                              <tbody id="tableBodyCompletedDigitalMarketing">

                                              </tbody>
                                          </table>
                                      </div>
                                    </div>
                                </div>

                                <h3 class="accordion-header">Graphic Designing</h3>
                                <div class="accordion-content" data-wrapper="true" style="overflow:hidden;height:0;position:relative;" aria-expanded="false">
                                    <div>
                                      <div class="material-datatables">
                                          <table id='tableCGD' class="datatables table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%;padding:0px;margin:0px;">
                                              <thead>
                                                  <tr>
                                                      <th>Category</th>
                                                      <th>Task Id</th>
                                                      <th>Task Name</th>
                                                      <th>Deadline</th>
                                                      <th class="disabled-sorting text-right">Actions</th>
                                                  </tr>
                                              </thead>
                                              <tbody id="tableBodyCompletedGraphicDesigning">

                                              </tbody>
                                          </table>
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

      <!--  Theme changer included     -->
      <!--  <?php include('../pageElements/themeChanger.php'); ?>     -->

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

<!-- Script for accordion! -->
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

<!-- Script for table! -->
<script type="text/javascript">
    $(document).ready(function() {
        $('.datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [5, 10, 15, -1],
                [5, 10, 15, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            }

        });


        var table = $('.datatables').DataTable();

        // Edit record
        table.on('click', '.edit', function() {
            $tr = $(this).closest('tr');

            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });

        //Like record
        table.on('click', '.like', function() {
            var rid = $(this).closest('tr').attr('id');
            window.open('assign_task.php?myvar='+rid);
        });

        $('.card .material-datatables label').addClass('form-group');




        $(document).on('click', '.remove', function () {

          var rid = $(this).closest('tr').attr('id');

          if($(this).closest('table').attr('id') == 'tablePA'){
            var table = $('#tablePA').DataTable();
          }
          else if($(this).closest('table').attr('id') == 'tablePWD'){
            var table = $('#tablePWD').DataTable();
          }
          else if($(this).closest('table').attr('id') == 'tablePCW'){
            var table = $('#tablePCW').DataTable();
          }
          else if($(this).closest('table').attr('id') == 'tablePDM'){
            var table = $('#tablePDM').DataTable();
          }
          else if($(this).closest('table').attr('id') == 'tablePGD'){
            var table = $('#tablePGD').DataTable();
          }

          else if($(this).closest('table').attr('id') == 'tableOA'){
            var table = $('#tableOA').DataTable();
          }
          else if($(this).closest('table').attr('id') == 'tableOWD'){
            var table = $('#tableOWD').DataTable();
          }
          else if($(this).closest('table').attr('id') == 'tableOCW'){
            var table = $('#tableOCW').DataTable();
          }
          else if($(this).closest('table').attr('id') == 'tableODM'){
            var table = $('#tableODM').DataTable();
          }
          else if($(this).closest('table').attr('id') == 'tableOGD'){
            var table = $('#tableOGD').DataTable();
          }

          else if($(this).closest('table').attr('id') == 'tableCA'){
            var table = $('#tableCA').DataTable();
          }
          else if($(this).closest('table').attr('id') == 'tableCWD'){
            var table = $('#tableCWD').DataTable();
          }
          else if($(this).closest('table').attr('id') == 'tableCCW'){
            var table = $('#tableCCW').DataTable();
          }
          else if($(this).closest('table').attr('id') == 'tableCDM'){
            var table = $('#tableCDM').DataTable();
          }
          else if($(this).closest('table').attr('id') == 'tableCGD'){
            var table = $('#tableCGD').DataTable();
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
                table.row("#"+rid).remove().draw();
                swal({
                  title: 'Deleted!',
                  text: 'Task has been deleted.',
                  type: 'success',
                  confirmButtonClass: "btn btn-success",
                  buttonsStyling: false
                  })
              }, function(dismiss) {
                // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
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

</script>

</html>
