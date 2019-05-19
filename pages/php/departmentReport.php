<?php
session_start();
error_reporting(0);
if($_SESSION['Username']=='' || $_SESSION['Rights']!='admin')
{
  session_unset();
  session_destroy();
  ?> <script>window.open('../php/cookiesunset.php','_self')</script>
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
    <title>WT Solutions</title><meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <script>
    function myajaxfunction()
    {
      var departmentCategory = '<?php echo $_SESSION['reportcategory']; ?>';
      departmentCategory = departmentCategory.toUpperCase();
      $("#departmentLogo").html(departmentCategory);
      if(departmentCategory == "WEB DEVELOPMENT"){
        $("#logoImage").attr("src","../../assets/img/webdevelopment.png")
      }
      else if(departmentCategory == "CONTENT WRITNG"){
        $("#logoImage").attr("src","../../assets/img/contentwriting.png")
      }
      else if(departmentCategory == "GRAPHIC DESIGNING"){
        $("#logoImage").attr("src","../../assets/img/graphicdesigning.png")
      }
      else if(departmentCategory == "DIGITAL MARKETING"){
        $("#logoImage").attr("src","../../assets/img/digitalmarketing.png")
      }
      else if(departmentCategory == "PUBLIC RELATIONS"){
        $("#logoImage").attr("src","../../assets/img/publicrelations.png")
      }
      else if(departmentCategory == "VIDEO EDITING"){
        $("#logoImage").attr("src","../../assets/img/videoediting.png")
      }

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
        <div class="content" style="overflow:hidden;">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-4">
                <div class="card" style="height: 300px;">
                  <div class="card-content">
                    <h4 class="card-title" style="text-align:center; font-weight:bold;" id="departmentLogo">
                    </h4>
                    <div class="card-profile">
                      <div class="card-avatar" style="height:500px;">
                        <a href="#pablo">
                          <img class="img" id="logoImage" src="" style="background-size:cover;"/>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                <div class="card" style="height: 300px">
                  <div class="card-header card-header-icon" style="position:relative; top:-5px">
                    <i class="fas fa-info-circle fa-2x"></i>
                  </div>
                  <div class="card-content">
                    <h4 class="card-title">BASIC INFORMATION:
                    </h4>
                    <div class="row">
                      <table class="table table-borderless">
                        <tr>
                          <td>
                            <span><label for="name"> <strong>TOTAL EMPLOYEES:</strong> </label></span>
                          </td>
                          <td>
                            <span> <input type="text" name="temployee" value="<?php echo $a; ?>" id="temployee" readonly style="border:none;"> </span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <span><label for="name"><strong>TOTAL TASKS:</strong> </label></span>
                          </td>
                          <td>
                            <span> <input type="text" name="ttasks" id="ttasks" readonly style="border:none;"> </span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <span><label for="name"> <strong>PENDING TASKS:</strong> </label></span>
                          </td>
                          <td>
                            <span> <input type="text" name="ptasks" id="ptasks" readonly style="border:none;"> </span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <span><label for="name"> <strong>ONGOING TASKS:</strong> </label></span>
                          </td>
                          <td>
                            <span> <input type="text" name="otasks" id="otasks" readonly style="border:none;"> </span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <span><label for="name"> <strong>COMPLETED TASKS:</strong> </label></span>
                          </td>
                          <td>
                            <span> <input type="text" name="ctasks" id="ctasks" readonly style="border:none;"> </span>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                  </div>
                  <div class="card-content" id="noemployeefound" style="padding:4%;">
                    <h4 class="card-title" style="text-align:center;"><strong>EMPLOYEES LIST:</strong>
                    </h4>
                    <br>
                    <div class="table-responsive">
                      <table class="table table-hover" id="tableEmployee">
                        <thead class="text-success">
                          <th>Username</th>
                          <th>Name</th>
                          <th>Contact</th>
                          <th>Email</th>
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
                      <div class="card-content" id="nodatafound" style="padding:4%;">
                        <h4 class="card-title"><strong>ONGOING TASKS:</strong></h4><br>
                        <div class="table-responsive">
                          <table class="table table-hover">
                            <thead class="text-primary">
                              <th>TASK ID</th>
                              <th>TASK NAME</th>
                              <th>ASSIGNED TO</th>
                              <th>TASK DEADLINE</th>
                            </thead>
                            <tbody id="ongoingtable">

                            </tbody>
                          </table>
                        </div><br><br>
                        <h4 class="card-title"><strong>COMPLETED TASKS:</strong></h4><br>
                        <div class="table-responsive">
                          <table class="table table-hover">
                            <thead class="text-primary">
                              <th>TASK ID</th>
                              <th>TASK NAME</th>
                              <th>ASSIGNED TO</th>
                              <th>COMPLETED DATE</th>
                            </thead>
                            <tbody id="completedtable">

                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div style="text-align:center;padding-bottom:10px;">
                        <button type="button" class='btn btn-primary' id="printButton">PRINT REPORT</button>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <!--  Footer included     -->
              <?php include('../pageElements/footer.php'); ?>

            </div>



          </div>

          <div class="container fluid" id="printContainer" style=" font-family: helvetica;">
            <div class="row">
              <center>
                <h3>WEB DEVELOPMENT:</h3>
              </center>

            </div>
            <div class="row">
              <h5>EMPLOYEE LIST:</h5>
              <center>
              <table class="table" id="tableEmployee1" cellpadding='5'>

              </table>
            </center>

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
        $(document).ready(function(){
          $(".table-responsive").perfectScrollbar();
        });

        $("#printButton").on("click", function () {
          $("#tableEmployee1").html($('#tableEmployee').html());
          $('<iframe>', {
            name: 'myiframe',
            class: 'printFrame'
          })
          .appendTo('body')
          .contents().find('body')
          .append($("#printContainer"));

          window.frames['myiframe'].focus();
          window.frames['myiframe'].print();

          setTimeout(() => { $(".printFrame").remove(); }, 1000);
        });
        </script>

        <style media="screen">
        @media screen {
          #printContainer {display:none;}
        }

        @media print {
          #printContainer {display:block;}
        }
        </style>

        </html>
        <?php
      }
      ?>
