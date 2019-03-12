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
                  <div class="col-lg-12">

                    <div class="card">
                        <div class="card-header">
                            <h4>TASKS:</h4>
                        </div>

                        <div class="card-content">
                            <h4 class="w-100 md-bg-red-300 p-t-15 p-b-15 p-l-30 f-400">Pending</h4>
                            <div id="simple-accordion-alt-2" class="accordion accordion-alt">
                                <h3 class="accordion-header">ALL</h3>
                                <div class="accordion-content" data-wrapper="true" style="height: 0px; position: relative; overflow: hidden;" aria-expanded="false">
                                    <div>
                                      <!-- Table starts! -->
                                      <div class="card" style="background-color:#dee1e5;">
                                          <div class="card-content">
                                              <div class="toolbar">
                                                  <!--        Here you can write extra buttons/actions for the toolbar              -->
                                              </div>
                                              <div class="material-datatables">
                                                  <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                                      <thead>
                                                          <tr>
                                                              <th>Category</th>
                                                              <th>Task Id</th>
                                                              <th>Task Name</th>
                                                              <th>Task Description</th>
                                                              <th>Deadline</th>
                                                              <th class="disabled-sorting text-right">Actions</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          <tr>
                                                              <td>Web Designing</td>
                                                              <td>WDES140021</td>
                                                              <td>Design landing page</td>
                                                              <td>Designing landing page of WT solutions</td>
                                                              <td>2011/04/25</td>
                                                              <td class="text-right">
                                                                  <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">favorite</i></a>
                                                                  <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="material-icons">dvr</i></a>
                                                                  <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
                                                              </td>
                                                          </tr>
                                                          <tr>
                                                              <td>Web Development</td>
                                                              <td>WDEV144521</td>
                                                              <td>Develop user authentication.</td>
                                                              <td>Create form validator to authenticate user.</td>
                                                              <td>2011/07/25</td>
                                                              <td class="text-right">
                                                                  <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">favorite</i></a>
                                                                  <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="material-icons">dvr</i></a>
                                                                  <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
                                                              </td>
                                                          </tr>
                                                      </tbody>
                                                  </table>
                                              </div>
                                          </div>
                                      </div>

                                      <!-- Table ends!   -->
                                    </div>
                                </div>

                                <h3 class="accordion-header">Web Development</h3>
                                <div class="accordion-content" data-wrapper="true" style="overflow:hidden;height:0;position:relative;" aria-expanded="false">
                                    <div></div>
                                </div>

                                <h3 class="accordion-header">Web Designing</h3>
                                <div class="accordion-content" data-wrapper="true" style="overflow:hidden;height:0;position:relative;" aria-expanded="false">
                                    <div></div>
                                </div>
                            </div>

                            <h4 class="w-100 md-bg-blue-300 p-t-15 p-b-15 p-l-30 f-400">Ongoing</h4>
                            <div id="simple-accordion-alt-3" class="accordion accordion-alt">
                                <h3 class="accordion-header">ALL</h3>
                                <div class="accordion-content" data-wrapper="true" style="overflow:hidden;height:0;position:relative;" aria-expanded="false">
                                    <div></div>
                                </div>

                                <h3 class="accordion-header">Web Development</h3>
                                <div class="accordion-content" data-wrapper="true" style="overflow:hidden;height:0;position:relative;" aria-expanded="false">
                                    <div></div>
                                </div>

                                <h3 class="accordion-header">Web Designing</h3>
                                <div class="accordion-content" data-wrapper="true" style="overflow:hidden;height:0;position:relative;" aria-expanded="false">
                                    <div></div>
                                </div>
                            </div>

                            <h4 class="w-100 md-bg-green-300 p-t-15 p-b-15 p-l-30 f-400">Completed</h4>
                            <div id="simple-accordion-alt-3" class="accordion accordion-alt">
                                <h3 class="accordion-header">ALL</h3>
                                <div class="accordion-content" data-wrapper="true" style="overflow:hidden;height:0;position:relative;" aria-expanded="false">
                                    <div></div>
                                </div>

                                <h3 class="accordion-header">Web Development</h3>
                                <div class="accordion-content" data-wrapper="true" style="overflow:hidden;height:0;position:relative;" aria-expanded="false">
                                    <div></div>
                                </div>

                                <h3 class="accordion-header">Web Designing</h3>
                                <div class="accordion-content" data-wrapper="true" style="overflow:hidden;height:0;position:relative;" aria-expanded="false">
                                    <div></div>
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
        $('#datatables').DataTable({
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


        var table = $('#datatables').DataTable();

        // Edit record
        table.on('click', '.edit', function() {
            $tr = $(this).closest('tr');

            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });

        // Delete a record
        table.on('click', '.remove', function(e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });

        //Like record
        table.on('click', '.like', function() {
            alert('You clicked on Like button');
        });

        $('.card .material-datatables label').addClass('form-group');
    });
</script>

</html>
