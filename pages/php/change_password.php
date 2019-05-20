<?php session_start(); 
error_reporting(0);
if(isset($_SESSION['Username'])&&$_SESSION['Rights']=='admin')
{
?>

<html>
    <head>
<!--
          <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.min.js"></script>

-->
          <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
        <script type="text/javascript"> 
            
            
            
            $(document).ready(function(){
   $('#pwd').keypress(function(e){
      $('#incorrectCredentials').css('visibility','hidden');
   });
});

$(document).ready(function(){
   $('#cpwd').keypress(function(e){
       $('#incorrectCredentials').css('visibility','hidden');
   });
});

            
            $(document).ready(function(){
    $('#show_hide').on('click',function(){
                var password=$('#pwd');
                var btn=$('#show_hide'); 
                var passwordtype=password.attr('type');
                if(passwordtype=='password')
                {
                    password.attr('type','text');
                    btn.find("i").removeClass("fa-eye").addClass("fa-eye-slash");
                }
                else
                {
                    password.attr('type','password');
                    btn.find("i").removeClass("fa-eye-slash").addClass("fa-eye");
                }
            });    
        });
            
             $(document).ready(function(){
    $('#show_hide1').on('click',function(){
                var password=$('#cpwd');
                var btn=$('#show_hide1'); 
                var passwordtype=password.attr('type');
                if(passwordtype=='password')
                {
                    password.attr('type','text');
                    btn.find("i").removeClass("fa-eye").addClass("fa-eye-slash");
                }
                else
                {
                    password.attr('type','password');
                    btn.find("i").removeClass("fa-eye-slash").addClass("fa-eye");
                }
            });    
        });
            
            
            function check()
            {
                var a=$('#pwd').val();
                var b=$('#cpwd').val();

                if(a!=b)
                    {
                        $('#incorrectCredentials').css('visibility','visible');
                        $('#cpwd').val("");
                        $('#cpwd').focus();
                    }
                else
                    {
                          $.ajax({
                            type: 'POST',
                            url: 'successful_password_change.php',
                            data: {Password:$('#pwd').val()},

                                beforeSend: function() {

                            },
                        success: function(response) {

                            
//                            alert(response);
                              if ( response.match(/done/) )
                        {
                            window.location.href='../dashboard/dashboard.php';
                        }
                        else if ( response.match(/notdone/) )
                        {
                            $('#myresult').html("Some internal error");
                             $('#myresult').css("visibility","visible");
                        }

                        }

                        });
                    }
            }
            function skip()
            {
                       window.location.href='../dashboard/dashboard.php';
            }

        </script>
        <style>
            .mainContent
            {
                height: auto;
                width:100%;
            }
            .inputContent
            {
                width:100%;
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
              <a class="navbar-brand" href="../index-2.html">
                <span><img src="../../assets/img/logo-w.png" alt="" style="height:70px;width:70px;">&nbsp; ADMIN PANEL</span>

              </a>
          </div>
      </div>
  </nav>

        <div class="wrapper wrapper-full-page">
        <div class="full-page login-page"  data-color="blue">
            <div class="content">
                <div class="container mainContent">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                            <form>
                                <div class="card card-login card-hidden"  style="background: rgba(255, 255, 255, 0.1);">
                                    <div class="card-header text-center">
                                        <h4 class="card-title">Change Password</h4>
                                    </div>
                                    <div class="card-content">

                                        <div class="input-group inputContent">
                                            <div class="form-group label-floating">
                                                <label class="control-label" style="color:black">Password</label>
                                                <input type="password" class="form-control" style="color:white;" id="pwd">
                                                <span id="show_hide" style="font-size: 20px;">
                                                <i style="position: relative;margin-left:95%;top:-28px;z-index: 1000;color:black ;" class="fa fa-eye" aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                        <div class="input-group inputContent">
                                            <div class="form-group label-floating">
                                                <label class="control-label" style="color:black;">Confirm Password</label>
                                                <input type="password" class="form-control" style="color:white;" id="cpwd">
                                                <span id="show_hide1" style="font-size: 20px;">
                                                <i style="position: relative;margin-left:95%;top:-28px;z-index: 1000;color:black ;" class="fa fa-eye" aria-hidden="true"></i></span>
                                                <br>
                                                <span id="incorrectCredentials" style="color: red;visibility:hidden">Username or Password is incorrect!</span>
                                            </div>
                                        </div><br>
                                    </div>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-wd btn-lg btn-success"  onclick="check();">Submit</button>
                                         <button type="button" class="btn btn-wd btn-lg btn-success" onclick="skip();">Skip</button><br>
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
<!--

        <h1>Change Your Password</h1>
        <br><br>
        <label>Password</label>
        <input type="password" id="pwd">
        <br>
        <label> Confirm Password</label>
        <input type="password" id="cpwd">
        <button type="button" onclick="check();">Submit</button>
        <button type="button" onclick="skip();">Skip</button>
-->
        <div id="myResult" style="visibility:hidden;"></div>
        
    </body>
    <script src="../../assets/vendors/jquery-ui.min.js" type="text/javascript"></script>
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
<script type="text/javascript">
    $().ready(function() {
        demo.checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
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