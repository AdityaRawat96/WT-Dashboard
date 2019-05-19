<?php
if(!isset($_COOKIE["wtsolutionusername"])||!isset($_COOKIE["wtsolutionrights"]))
{
  ?>
  <!doctype html>
  <html lang="en">


  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="myscript.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>WT Solutions</title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link type="text/css" href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link type="text/css" href="assets/css/turbo.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link type="text/css" href="assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link type="text/css" href="assets/vendors/maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <style>
    #forgot_password_link
    {
      color:black;
      transition:all 0.1s;
    }
    #forgot_password_link:hover
    {
      color: #2598F3;
      border-bottom: 1px solid #2598F3;
      cursor: pointer;
    }
    .mainContent
    {
      height: 100%;
      width:100%;
    }

    </style>
  </head>

  <body style="background-image: linear-gradient(#5785B0, #00B4B4) !important;">
    <div class="loader" style="display: none; z-index:300; position:fixed; height:100%; width:100%; background-color:black; opacity: 0.8; padding-top:35vh;">
      <center>
        <img src="assets/img/loader.svg" style="position:relative; height:200px; width:200px;">
      </center>
    </div>

    <nav class="navbar navbar-primary navbar-transparent navbar-absolute">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index-2.html">
            <span><img src="assets/img/logo-w.png" alt="" style="height:70px;width:70px;">&nbsp; LOGIN PANEL</span>

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
                      <h3 class="card-title" style="color:#fff;">LOGIN</h3>
                    </div>
                    <div class="card-content" >

                      <br>
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i style='color:black;' class="material-icons">face</i>
                        </span>
                        <div class="form-group label-floating">
                          <label class="control-label" id="usenameinput" style="color:black;">User Name</label>
                          <input type="text" class="form-control" id="username" autocomplete="off" style="color:white;">
                          <br>
                        </div>
                      </div>
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i style='color:black;'  class="material-icons">lock_outline</i>
                        </span>
                        <div class="form-group label-floating">
                          <label class="control-label" style="color:black;">Password</label>
                          <input type="password" class="form-control" id="pwd" style="color:white;">
                          <span id="show_hide" style="font-size: 20px;">
                            <i style="position: relative;margin-left:95%;top:-28px;z-index: 1000;color:black ;" class="fa fa-eye" aria-hidden="true"></i></span>
                            <br>
                            <span id="incorrectCredentials" style="color: red;visibility: hidden;">Username or Password is incorrect!</span>
                          </div>
                        </div><br>
                        <div class="text-center">
                          <a onclick='window.open("pages/php/forgotPassword.php","_self");' id="forgot_password_link">Forgot Password</a>
                        </div>
                      </div>
                      <div class="text-center">
                        <button type="button" class="btn btn-wd btn-lg btn-primary" onclick="loginFunction();" id="login_btn">Sign In</button><br>
                      </div>
                      <div class="text-center">
                        <input type="checkbox" id="remember">Remember my account<br>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <footer class="footer">
            <div class="container">
              <p class="copyright pull-left">
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
    <script src="assets/vendors/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="assets/vendors/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/vendors/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/vendors/material.min.js" type="text/javascript"></script>
    <script src="assets/vendors/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <!-- Forms Validations Plugin -->
    <script src="assets/vendors/jquery.validate.min.js"></script>
    <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
    <script src="assets/vendors/moment.min.js"></script>
    <!--  Charts Plugin -->
    <script src="assets/vendors/chartist.min.js"></script>
    <!--  Plugin for the Wizard -->
    <script src="assets/vendors/jquery.bootstrap-wizard.js"></script>
    <!--  Notifications Plugin    -->
    <script src="assets/vendors/bootstrap-notify.js"></script>
    <!-- DateTimePicker Plugin -->
    <script src="assets/vendors/bootstrap-datetimepicker.js"></script>
    <!-- Vector Map plugin -->
    <script src="assets/vendors/jquery-jvectormap.js"></script>
    <!-- Sliders Plugin -->
    <script src="assets/vendors/nouislider.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <!-- Select Plugin -->
    <script src="assets/vendors/jquery.select-bootstrap.js"></script>
    <!--  DataTables.net Plugin    -->
    <script src="assets/vendors/jquery.datatables.js"></script>
    <!-- Sweet Alert 2 plugin -->
    <script src="assets/vendors/sweetalert2.js"></script>
    <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="assets/vendors/jasny-bootstrap.min.js"></script>
    <!--  Full Calendar Plugin    -->
    <script src="assets/vendors/fullcalendar.min.js"></script>
    <!-- TagsInput Plugin -->
    <script src="assets/vendors/jquery.tagsinput.js"></script>
    <!-- Material Dashboard javascript methods -->
    <script src="assets/js/turbo.js"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>
    <script type="text/javascript">
    $().ready(function() {
      demo.checkFullPageBackgroundImage();

      setTimeout(function() {
        // after 1000 ms we add the class animated to the login/register card
        $('.card').removeClass('card-hidden');
      }, 200)
    });
  </script>

  <script type="text/javascript">
  $(document).ready(function(){

    $('#username').click(function(){
      $('#incorrectCredentials').css('visibility','hidden');
    });

    $('#pwd').click(function(){
      $('#incorrectCredentials').css('visibility','hidden');
    });

    $('#pwd').keypress(function(){
      $('#incorrectCredentials').css('visibility','hidden');
    });

    $('#pwd').keypress(function(key) {
      if(key.charCode == 13) loginFunction();
    });

    $('#username').keypress(function(key) {
      if(key.charCode == 13) loginFunction();
    });

  });

</script>

</html>
<?php

}

else
{
  $_SESSION['checkCounter']=0;
  include('pages/php/connection.php');
  session_start();
  $_SESSION["Username"]= $_COOKIE["wtsolutionusername"];
  $_SESSION["Rights"]=$_COOKIE["wtsolutionrights"];
  $a=$_SESSION["Username"];
  $result= mysqli_query($con,"select * from users where USERNAME='$a'")
  or die('Uppss.. an Error accured...(unable to process this request)<br>Reason : &nbsp;'. mysqli_error($con));
  $row=mysqli_fetch_array($result);
  $p0=$row['id'];
  $p1=$row['name'];
  $p2=$row['username'];
  $p3=$row['password'];
  $p4=$row['status'];
  $p5=$row['rights'];
  $p6=$row['category'];
  $p7=$row['notification_count'];

  $_SESSION['id']=$p0;
  $_SESSION['Rights']=$p5;
  $_SESSION['name']=$p1;
  $_SESSION['department']=$p6;
  $_SESSION['notificationCount']=$p7;
  if($_SESSION["Rights"]=='employee')
  {
    ?>
    <script>window.open('pages/dashboard/employee_dashboard.php','_self')</script>
    <?php
  }
  else
  {
    ?>
    <script>window.open('pages/dashboard/dashboard.php','_self')</script>
    <?php
  }
}
?>
