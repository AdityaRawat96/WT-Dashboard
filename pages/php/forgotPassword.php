<!doctype html>
<html lang="en">


<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="../../assets/img/favicon.png" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
  .mainContent
  {
    height: 100%;
    width:100%;
  }

  .otpInput{
    background-color: transparent;
    color:white;
    width:30px;
    height: 40px;
    border: 1px solid white;
    border-radius: 5px;
    padding:0px 8px;
    margin: 5px;
  }

  .otpInput:focus{
    border:2px solid #33b5e5;
  }

  </style>
</head>

<body style="background-image: linear-gradient(#5785B0, #00B4B4) !important;">
  <nav class="navbar navbar-primary navbar-transparent navbar-absolute">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index-2.html">
          <span><img src="../../assets/img/logo-w.png" alt="" style="height:70px;width:70px;">&nbsp; ADMIN PANEL</span>

        </a>
      </div>
    </div>
  </nav>

  <div class="wrapper wrapper-full-page">
    <div class="full-page login-page"  data-color="blue">
      <div class="content">
        <div class="container  mainContent">
          <div class="row">
            <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
              <form>
                <div class="card card-login card-hidden" style="background: rgba(255, 255, 255, 0.1);">
                  <div class="card-header text-center">
                    <h3 class="card-title" style="color:#fff;">FORGOT PASSWORD?</h3>
                  </div>
                  <div class="card-content" >

                    <br>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i style='color:black; position:relative; top:-5px;' class="material-icons">face</i>
                      </span>
                      <div class="form-group label-floating">
                        <label class="control-label" style="color:black;">Enter user Name</label>
                        <input type="text" class="form-control" id="username" autocomplete="off" style="color:white;" onclick='$("#usernameError").css("visibility","hidden");'>
                        <small style="color:red; visibility:hidden;" id="usernameError">Username does not exist!</small>
                        <br>
                      </div>
                    </div><br>
                    <div class="input-group" style="visibility:hidden; display:none;" id="otpSection">
                      <span class="input-group-addon" style="color:black;position:relative; top:-5px;">OTP:
                      </span>
                      <div class="form-group label-floating">
                        <center>
                          <input class="otpInput" type="text" id="otp1" maxlength="1" onkeypress="javascript: $('#otp2').focus();">
                          <input class="otpInput" type="text" id="otp2" maxlength="1" onkeypress="javascript: $('#otp3').focus();">
                          <input class="otpInput" type="text" id="otp3" maxlength="1" onkeypress="javascript: $('#otp4').focus();">
                          <input class="otpInput" type="text" id="otp4" maxlength="1" onkeypress="javascript: $('#otp5').focus();">
                          <input class="otpInput" type="text" id="otp5" maxlength="1" onkeypress="javascript: $('#otp6').focus();">
                          <input class="otpInput" type="text" id="otp6" maxlength="1">
                          <br>
                        </center>
                      </div>
                    </div>
                    <div class="changePasswordDiv" style="visibility:hidden; display:none;">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i style='color:black; position:relative; top:0px;' class="material-icons">face</i>
                        </span>
                        <div class="form-group label-floating">
                          <label class="control-label" style="color:black;">Enter new password.</label>
                          <input type="text" class="form-control" id="newPassword" autocomplete="off" style="color:white;" onclick='$("#passwordError").css("visibility","hidden");'>
                        </div>
                      </div>
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i style='color:black; position:relative; top:-5px;' class="material-icons">face</i>
                        </span>
                        <div class="form-group label-floating">
                          <label class="control-label" style="color:black;">Confirm password</label>
                          <input type="text" class="form-control" id="confirmPassword" autocomplete="off" style="color:white;" onclick='$("#passwordError").css("visibility","hidden");'>
                          <small style="color:red; visibility:hidden;" id="passwordError">Passwords does not match!</small>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="text-center" id="otpSent" style="visibility:hidden; display:none;">
                      <span style="color:white;">OTP sent to registered e-mail address</span>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="button" class="btn btn-wd btn-lg btn-primary sendEmail" id="submitButton" value="mail">SEND OTP</button><br>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container">
          <nav class="pull-left">
            <ul>
              <li>
                <a href="#">
                  Home
                </a>
              </li>
              <li>
                <a href="#">
                  Company
                </a>
              </li>
              <li>
                <a href="#">
                  Portfolio
                </a>
              </li>
              <li>
                <a href="#">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <p class="copyright pull-right">
            &copy;
            <script>
            document.write(new Date().getFullYear())
            </script>
            <a href="http://wtsolutions.cc">WT</a> Admin Dashboard
          </p>
        </div>
      </footer>
    </div>
  </div>
  <div id="myDiv" style="position: relative;"></div>
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
<script type="text/javascript">

$attempt=0;
$otp="";

$().ready(function() {
  demo.checkFullPageBackgroundImage();

  setTimeout(function() {
    $('.card').removeClass('card-hidden');
  }, 200);

  $("#submitButton").on("click", function(){
    if($('#submitButton').val() == "mail"){
      $(".sendEmail").append('&nbsp; <i class="fa fa-circle-o-notch fa-spin" style="font-size:24px"></i>');
      $.ajax({
        type: 'POST',
        url: '../email/email.php',
        data: { Username:$('#username').val()},

        beforeSend: function() {
        },
        success: function(response) {
          if(response.match(/error/))
          {
            alert("Problem occured during your request.Please try again later");
            window.open('../../index.html','_self');
            $(".sendEmail").html("SEND OTP");
          }
          else if(response.match(/usernameproblem/))
          {
            $("#usernameError").css("visibility","visible");
            $(".sendEmail").html("SEND OTP");
          }
          else
          {
            $('#otpSection').css('visibility','visible');
            $('#otpSection').css('display','block');
            $('#otpSent').css('visibility','visible');
            $('#otpSent').css('display','block');
            $('#submitButton').html("Verify OTP");
            $('#submitButton').removeClass("sendEmail");
            $('#submitButton').addClass("submitOTP");
            $('#submitButton').val("otp");
            $otp=response;
          }
        }
      });
    }
    else if($('#submitButton').val() == "otp"){
      $otpVal = $('#otp1').val()+$('#otp2').val()+$('#otp3').val()+$('#otp4').val()+$('#otp5').val()+$('#otp6').val();
      if($otp != $otpVal)
      {
        $attempt++;
        if($attempt>2)
        {
          swal({
            title: 'Too may wrong attempts!',
            text: "Try again later",
            type: 'warning',
            showCancelButton: false,
            confirmButtonClass: 'btn btn-success',
            confirmButtonText: 'OK',
            buttonsStyling: false
          }).then(function() {
            window.open('../../index.html','_self');
          });
        }
        else
        {
          $chance=3-$attempt;
          $('#otpSent').css('color','red');
          $('#otpSent').html("Wrong OTP! You have "+$chance+" attempts left.");
        }
      }
      else
      {
        $('#otpSent').css('visibility','hidden');
        $('.changePasswordDiv').css('visibility','visible');
        $('.changePasswordDiv').fadeIn(1000);
        $('#otpSection').fadeOut(1000);
        $('#submitButton').html("Change Password");
        $('#submitButton').val("change");
      }
    }
    else if($('#submitButton').val() == "change"){
      if($('#newPassword').val() != $('#confirmPassword').val()){
        $('#passwordError').css('visibility','visible');
        $('#newPassword').focus();
      }
      else{
        $.ajax({
          type: 'POST',
          url: '../email/emailajax.php',
          data: { Username:$('#username').val(),Password:$('#newPassword').val()},

          beforeSend: function() {
          },
          success: function(response) {
            if(response.match(/failure/))
            {
              alert("Problem occured during your request.Please try again later");
            }
            else
            {
              swal({
                title: 'Password successfully changed!',
                text: "Please login again.",
                type: 'success',
                showCancelButton: false,
                confirmButtonClass: 'btn btn-success',
                confirmButtonText: 'OK',
                buttonsStyling: false
              }).then(function() {
                window.open('../../index.html','_self');
              });
            }
          }
        });
      }
    }

  });

});

</script>

</html>
