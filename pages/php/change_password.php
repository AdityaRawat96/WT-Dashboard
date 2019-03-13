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
        <script type="text/javascript">
            function check()
            {
                var a=$('#pwd').val();
                var b=$('#cpwd').val();

                if(a!=b)
                    {
                        alert("Passwords do not match");
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

                              if ( response.match(/done/) )
                        {
                            window.location.href='../dashboard/dashboard.php';
                        }
                        else if ( response.match(/notdone/) )
                        {
                            $('#myresult').html(response);
                        }

                        }

                        });
                    }
            }
            function skip()
            {
//                  $.ajax({
//                    type: 'POST',
//                    url: 'skip_password.php',
//                    data: {},
//
//                        beforeSend: function() {
//
//                    },
//                success: function(response) {
//
                       window.location.href='dashboard.php';
//                }
//                });
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
    <body>
        <div class="wrapper wrapper-full-page">
        <div class="full-page login-page"  data-color="blue">
            <div class="content">
                <div class="container mainContent">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                            <form>
                                <div class="card card-login card-hidden">
                                    <div class="card-header text-center">
                                        <h4 class="card-title">Change Password</h4>
                                    </div>
                                    <div class="card-content">

                                        <div class="input-group inputContent">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Password</label>
                                                <input type="text" class="form-control" id="pwd">
                                            </div>
                                        </div>
                                        <div class="input-group inputContent">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Confirm Password</label>
                                                <input type="password" class="form-control" id="cpwd">
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
        <div id="myResult" hidden></div>
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
