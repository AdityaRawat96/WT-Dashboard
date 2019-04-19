<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png" />
    <script src="../../assets/vendors/jquery-3.1.1.min.js" type="text/javascript"></script>
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

  <link href="../../assets/vendors/dropzone/dropzone.min.css" rel="stylesheet">





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
                          <form class="form-horizontal">
                              <div class="card-header card-header-text">
                                  <h4 class="card-title">SEND MAIL:</h4>
                              </div>
                              <div class="card-content">

                                  <div class="row">
                                      <label class="col-sm-2 label-on-left">NAME:</label>
                                      <div class="col-sm-10">
                                          <div class="form-group label-floating is-empty">
                                              <label class="control-label"></label>
                                              <input type="text" class="form-control" placeholder="" id="name">
                                              <small id="nameError" class="error" style="color:red; visibility:hidden;">Name cannot be left empty!</small>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <label class="col-sm-2 label-on-left">PHONE:</label>
                                      <div class="col-sm-10">
                                          <div class="form-group label-floating is-empty">
                                              <label class="control-label"></label>
                                              <input type="text" class="form-control" placeholder="" id="phone">
                                              <small id="phoneError" class="error" style="color:red; visibility:hidden;">Phone cannot be left empty!</small>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row">
                                      <label class="col-sm-2 label-on-left">EMAIL:</label>
                                      <div class="col-sm-10">
                                          <div class="form-group label-floating is-empty">
                                            <input type="text" class="form-control datetimepicker" id="email" />
                                            <small id="emailError" class="error" style="color:red; visibility:hidden;">Email cannot be left empty!</small>
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
                                      <button type="button" class="btn btn-info btn-round" onclick="sendMail();">SUBMIT &nbsp;<i class="material-icons">keyboard_arrow_right</i></button>
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
      $("#name").on("keydown", function(){
        $("#nameError").css("visibility","hidden");
      });
      $("#phone").on("keydown", function(){
        $("#phoneError").css("visibility","hidden");
      });
      $("#email").on("keydown", function(){
        $("#emailError").css("visibility","hidden");
      });
    });

  function sendMail(){
    //alert($('#task_category').val());

    if($('#name').val()=='')
    {
      $("#nameError").css("visibility","visible");
      $('#name').focus();
      return false;
    }
    else if($('#phone').val()=='')
    {
      $("#phoneError").css("visibility","visible");
      $('#phone').focus();
      return false;
    }
    else if($('#email').val()=='')
    {
      $("#emailError").css("visibility","visible");
      $('#email').focus();
      return false;
    }
    else
    {
      if(navigator.onLine)
      {
        $.ajax({
          type: 'POST',
          url: 'email.php',
          data: { name: $('#name').val(), phone: $('#phone').val(), email: $('#email').val() },
          beforeSend: function() {

          },
          success: function(response) {
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
          text: "Email sent successfully!",
          buttonsStyling: false,
          confirmButtonClass: "btn btn-success",
          type: "success"
      });
  }

</script>



</html>
