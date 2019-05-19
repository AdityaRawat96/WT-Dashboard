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

    <link href="../../assets/vendors/dropzone/dropzone.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <style media="screen">

    /* Hide HTML5 Up and Down arrows. */
    input[type="number"]::-webkit-outer-spin-button, input[type="number"]::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    input[type="number"] {
      -moz-appearance: textfield;
    }
    </style>

    <script type="text/javascript">

    function loadCroppie(){
      $('#image-3').croppie('bind');
    }
    function setImage(){
      $('#image-3').croppie('result', {
        type: 'canvas',
        size: 'viewport',
        circle: false
      }).then(function (resp) {
        $('#wizardPicturePreview').attr('src', resp).fadeIn('slow');
        $('#imagebase64').val(resp);
        $("#closeModal").trigger('click');
      });

    }

    </script>

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
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Crop Image</h4>
                  </div>
                  <div class="modal-body">
                    <div class="image-wrapper">
                      <img id="image-3" src="">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" id="closeModal" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="setImage();">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            <button id="imageModal" type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal" style="visibility:hidden"></button>

            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <div class="wizard-container">
                  <div class="card wizard-card" data-color="rose" id="wizardProfile">
                    <form action="#" method="POST" id="uploadForm">
                      <div class="wizard-header">
                        <h3 class="wizard-title">
                          Register an Employee
                        </h3>
                        <h5>Add new employee details in the database.</h5>
                      </div>
                      <div class="wizard-navigation">
                        <ul class="trackPage">
                          <li>
                            <a href="#about" data-toggle="tab">About</a>
                          </li>
                          <li>
                            <a href="#skills" data-toggle="tab">Skills</a>
                          </li>
                          <li>
                            <a href="#address" data-toggle="tab">Address</a>
                          </li>
                          <li>
                            <a href="#confirm" data-toggle="tab">Confirm</a>
                          </li>
                        </ul>
                      </div>
                      <div class="tab-content">
                        <div class="tab-pane" id="about">
                          <div class="row">
                            <h4 class="info-text"> Enter basic employee information.</h4>
                            <div class="col-sm-4 col-sm-offset-1">
                              <div class="picture-container">
                                <div class="picture">
                                  <img src="../../assets/img/faces/avatar.png" class="picture-src" id="wizardPicturePreview" title="" />
                                  <input name="userImage" type="file" accept="image/*" id="wizard-picture" required onclick="$('#picError').fadeOut();">
                                  <input type="hidden" id="imagebase64" name="imagebase64">
                                </div>
                                <h6>Choose Picture</h6>
                                <small id="picError" style="display:none; color:red;">Please select a profile picture!</small>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="input-group">
                                <span class="input-group-addon">
                                  <i class="material-icons">face</i>
                                </span>
                                <div class="form-group label-floating">
                                  <label class="control-label">First Name
                                    <small>(required)</small>
                                  </label>
                                  <input name="firstname" type="text" class="form-control" id="efname" maxlength="20" autocomplete="nope">
                                </div>
                              </div>
                              <div class="input-group">
                                <span class="input-group-addon">
                                  <i class="material-icons">record_voice_over</i>
                                </span>
                                <div class="form-group label-floating">
                                  <label class="control-label">Last Name
                                    <small>(required)</small>
                                  </label>
                                  <input name="lastname" type="text" class="form-control" id="elname" maxlength="20" autocomplete="nope">
                                </div>
                              </div>
                              <div class="input-group">
                                <span class="input-group-addon">&nbsp;
                                  <i class="fas fa-calendar-alt"></i>
                                </span>
                                <div class="form-group label-floating" id='divdib' onclick="$('#dateError').css('color','black')">
                                  <label class="control-label" id="dateError">Date of Birth
                                    <small>(required)</small>
                                  </label>
                                  <input type="text" maxlength="10" id="edob" class="datepicker form-control" onkeydown="return false;" name="employee_dob" required onblur="$('#divdib').removeClass('is-empty');" autocomplete="nope" />
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-10 col-lg-offset-1">
                              <div class="input-group">
                                <span class="input-group-addon">&nbsp;
                                  <i class="fas fa-phone-volume fa-2x"></i>
                                </span>
                                <div class="form-group label-floating">
                                  <label class="control-label">Phone
                                    <small>(required)</small>
                                  </label>
                                  <input name="phone" type="number" class="form-control" required id="ephone" maxlength="10" autocomplete="nope">
                                </div>
                              </div>
                              <div class="input-group">
                                <span class="input-group-addon">
                                  <i class="material-icons">email</i>
                                </span>
                                <div class="form-group label-floating">
                                  <label class="control-label">Email
                                    <small>(required)</small>
                                  </label>
                                  <input name="email" type="email" class="form-control" id="eemail"  maxlength="40" autocomplete="nope">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane" id="skills">
                          <h4 class="info-text"> Add employee skills. </h4>
                          <center>
                            <small id="skillError" style="display:none; color:red;">Please enter atleast one skill.</small>
                          </center>

                          <div class="row">
                            <div class="col-lg-10">
                              <div class="col-sm-4">
                                <div class="choice" id="checkboxDivGD" data-toggle="wizard-checkbox" onclick="checkboxValidation();">
                                  <input type="checkbox" name="jobb" value="Graphic Designing" id="checkboxGD" autocomplete="nope" required>
                                  <div class="icon">
                                    <i class="fas fa-pencil-ruler"></i>
                                  </div>
                                  <h6>Graphic Designing</h6>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="choice" id="checkboxDivWD" data-toggle="wizard-checkbox" onclick="checkboxValidation();">
                                  <input type="checkbox" name="jobb" value="Web Development" id="checkboxWD" autocomplete="nope" required>
                                  <div class="icon">
                                    <i class="fa fa-terminal"></i>
                                  </div>
                                  <h6>Web Development</h6>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="choice" id="checkboxDivCW" data-toggle="wizard-checkbox" onclick="checkboxValidation();">
                                  <input type="checkbox" name="jobb" value="Content Writing" id="checkboxCW" autocomplete="nope" required>
                                  <div class="icon">
                                    <i class="fas fa-edit"></i>
                                  </div>
                                  <h6>Content Writing</h6>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="choice" id="checkboxDivDM" data-toggle="wizard-checkbox" onclick="checkboxValidation();">
                                  <input type="checkbox" name="jobb" value="Digital Marketing" id="checkboxDM" autocomplete="nope" required>
                                  <div class="icon">
                                    <i class="fas fa-globe-asia"></i>
                                  </div>
                                  <h6>Digital Marketing</h6>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="choice" id="checkboxDivVE" data-toggle="wizard-checkbox" onclick="checkboxValidation();">
                                  <input type="checkbox" name="jobb" value="Video Editing" id="checkboxVE" required>
                                  <div class="icon">
                                    <i class="fas fa-video"></i>
                                  </div>
                                  <h6>Video Editing</h6>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="choice" id="checkboxDivPR" data-toggle="wizard-checkbox" onclick="checkboxValidation();">
                                  <input type="checkbox" name="jobb" value="Public Relations" id="checkboxPR" required>
                                  <div class="icon">
                                    <i class="fas fa-users"></i>
                                  </div>
                                  <h6>Public Relations</h6>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane" id="address">
                          <div class="row">
                            <div class="col-sm-12">
                              <h4 class="info-text"> Add employee Address. </h4>
                            </div>
                            <div class="col-sm-7 col-sm-offset-1">
                              <div class="form-group label-floating">
                                <label class="control-label">Current Address</label>
                                <input type="text" class="form-control" name="currentAddress" id="currentAddress" autocomplete="nope" required>
                              </div>
                            </div>
                            <div class="col-sm-7 col-sm-offset-1">
                              <div class="form-group label-floating">
                                <label class="control-label">Permanent Address</label>
                                <input type="text" class="form-control" name="permanentAddress" id="permanentAddress" autocomplete="nope" required>
                                <input type="checkbox" id="checkboxAddress"  onchange='copyAddress(this);'><small>&nbsp; Same as current address.</small>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane" id="confirm">
                          <div class="row">
                            <div class="col-sm-12">
                              <h4 class="info-text"> Confirm Details! </h4>
                            </div>
                            <div class="col-sm-12">
                              <center>
                                <table style="width:90%;">
                                  <tr>
                                    <td style="width:20%"><label>First Name:</label></td>
                                    <td style="width:50%"><input id="confirmfname" type="text" name="confirmfname" value="" class="form-control" onkeydown='return(false);' style="margin-bottom:20px;"></td>
                                    <td rowspan="3" style="width:30%">
                                      <div class="picture">
                                        <img src="../../assets/img/faces/avatar.png" class="picture-src" id="confirmwizardPicturePreview" title="" />
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="width:20%"><label>Last Name:</label></td>
                                    <td style="width:50%"><input id="confirmlname" type="text" name="confirmlname" value="" class="form-control" onkeydown='return(false);' style="margin-bottom:20px;"></td>
                                  </tr>
                                  <tr>
                                    <td style="width:20%"><label>Date of Birth:</label></td>
                                    <td style="width:50%"><input id="confirmdob" type="text" name="confirmdob" value="" class="form-control" onkeydown='return(false);' style="margin-bottom:20px;"></td>
                                  </tr>
                                  <tr>
                                    <td style="width:20%"><label>Phone:</label></td>
                                    <td colspan="2"><input id="confirmphone" type="text" name="confirmphone" value="" class="form-control" onkeydown='return(false);' style="margin-bottom:20px;"></td>
                                  </tr>
                                  <tr>
                                    <td style="width:20%"><label>e-mail:</label></td>
                                    <td colspan="2"><input id="confirmemail" type="text" name="confirmemail" value="" class="form-control" onkeydown='return(false);' style="margin-bottom:20px;"></td>
                                  </tr>
                                  <tr>
                                    <td style="width:20%"><label>Skill:</label></td>
                                    <td colspan="2"><input id="confirmskill" type="text" name="confirmskill" value="" class="form-control" onkeydown='return(false);' style="margin-bottom:20px;"></td>
                                  </tr>
                                  <tr>
                                    <td style="width:20%"><label>Current Address:</label></td>
                                    <td colspan="2"><input id="confirmcaddress" type="text" name="confirmcaddress" value="" class="form-control" onkeydown='return(false);' style="margin-bottom:20px;"></td>
                                  </tr>
                                  <tr>
                                    <td style="width:20%"><label>Permanent Address:</label></td>
                                    <td colspan="2"><input id="confirmpaddress" type="text" name="confirmpaddress" value="" class="form-control" onkeydown='return(false);' style="margin-bottom:20px;"></td>
                                  </tr>
                                </table>
                              </center>
                            </div>

                          </div>
                        </div>
                      </div>
                      <div class="wizard-footer">
                        <div class="pull-right">
                          <input type='button' id="nextButton" class='btn btn-next btn-fill btn-primary btn-wd' name='next' value='Next' />
                          <input type='submit' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Finish' onclick="$('.loader').fadeIn();"/>
                        </div>
                        <div class="pull-left">
                          <input type='button' id="prevButton" class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </form>
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

  <script type="text/javascript" src="../../assets/js/employee.js"></script>

  <script src="../../assets/dist/croppie.js" ></script>
  <link href="../../assets/dist/croppie.css" media="screen" rel="stylesheet" type="text/css">


  <script>
  $(document).ready(function() {

    $('.navbar-brand').html('Add Employee');
    $('.activeTabsSidebar').removeClass('active');
    $('#activeTabsSidebarEmployee').addClass('active');
    $('#activeTabsSidebarAddEmployee').addClass('active');
    $('#employee').addClass('in');
    $('#employee').css('height','');

    demo.initFormExtendedDatetimepickers();
    demo.initMaterialWizard();

    $('#ephone').keypress(function(key) {
      if(key.charCode < 48 || key.charCode > 57) return false;
      else if($('#ephone').val().length >= 10)
      {
        return false;
      }
    });
  });

  function checkboxValidation(){
    $('#skillError').fadeOut();
  }
  function copyAddress(checkbox){
    if(checkbox.checked == true){
      $("#permanentAddress").val($("#currentAddress").val());
    }
    else{
      $("#permanentAddress").val('');
    }
  }
  function confirmResult(){
    $("#confirmwizardPicturePreview").attr("src",$('#wizardPicturePreview').attr("src"));

    $("#confirmfname").val($("#efname").val());
    $("#confirmlname").val($("#elname").val());
    $("#confirmdob").val($("#edob").val());
    $("#confirmemail").val($("#eemail").val());
    $("#confirmphone").val($("#ephone").val());
    $("#confirmskill").val($('input[name="jobb"]:checked').val());
    $("#confirmpaddress").val($("#permanentAddress").val());
    $("#confirmcaddress").val($("#currentAddress").val());
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
