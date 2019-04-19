<html>
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
    <script src="../../assets/vendors/jquery-3.1.1.min.js" type="text/javascript"></script>
    <!--     Fonts and icons     -->
    <link href="../../assets/vendors/maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
      
    </head>
   <body>
                 
        <input type="text" id="username" placeholder="Enter Your Username">
        <br><br>
        <button type="button" id="emailbtn" onclick="emailSend();">Submit</button>
        <br><br>
        <input type="password" id="otp" placeholder="Enter Your OTP" maxlength="6" style="visibility:hidden;">
        <br><br>
        <button type="button" id="otpbtn" onclick="verifyOTP();" style="visibility:hidden;">Verify</button>
        <br><br>
        <input type="password" id="pwd" placeholder="Enter New Password" style="visibility:hidden;"><br><br>
        <input type="password" id="cpwd" placeholder="Enter Password again" style="visibility:hidden;"><br><br>
        <button type="button" id="submitbtn" onclick="submitRequest();" style="visibility:hidden;">Change Password</button>
                                
        <div id="myResult"></div>
        
    </body>
    <script src="../../assets/vendors/jquery-ui.min.js" type="text/javascript"></script>
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
    $attempt=0;
    $otp="";
    $().ready(function() {
        demo.checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
    
    function emailSend()
    {
//        alert('hii');
         $('body').css('opacity','0.5');
         $('body').css('pointer-events','none');   
           $.ajax({
                    type: 'POST',
                    url: '../email/email.php',
                    data: { Username:$('#username').val()},

                        beforeSend: function() {
                    },
                success: function(response) {
//                    alert(response);
                    if(response.match(/error/))
                    {
                        alert("Problem occured during your request.Please try again later"); 
                        window.open('../index.html','_self');
                    }
                    else if(response.match(/usernameproblem/))
                        {
                            alert('Username does not exist');
                            $('#username').val("");
                              $('body').css('opacity','1');
                        $('body').css('pointer-events','auto');
                        }
                    else
                    {
                        
                       $('#otp').css('visibility','visible'); 
                        $('#otpbtn').css('visibility','visible');
                        $otp=response;
                        $('#emailbtn').css('visibility','hidden');
                         $('body').css('opacity','1');
                        $('body').css('pointer-events','auto');
                        alert("Email succesfully send. Please use that otp to change your password");
                    }
                }
                });
    }
    function verifyOTP()
    {
//        alert($otp);
        if($otp!=$('#otp').val())
            {
                $attempt++;
                if($attempt>2)
                    {
                        alert('Too many wrong attempt.Please try again later');
                        window.open('../index.html','_self');
                    }
                else
                {
                    $chance=3-$attempt;
                    alert("OTP wrong.You have "+$chance+" attempts left");
                    $('#otp').val("");
                }         
            }
        else
        {
            $('#otpbtn').css('visibility','hidden');
            $('#otp').css('visibility','hidden');
             $('#pwd').css('visibility','visible'); 
             $('#cpwd').css('visibility','visible');
             $('#submitbtn').css('visibility','visible');
        }
    }
    
    function submitRequest()
    {
         $.ajax({
                    type: 'POST',
                    url: '../email/emailajax.php',
                    data: { Username:$('#username').val(),Password:$('#pwd').val()},

                        beforeSend: function() {
                    },
                success: function(response) {
//                    alert(response);
                    if(response.match(/failure/))
                    {
                        alert("Problem occured during your request.Please try again later");           
                    }
                    else
                    {
                        alert("Password successfully changed");
                        window.open('../dashboard/employee_dashboard.php');
                    }
                }
                });
    }
</script>
</html>
