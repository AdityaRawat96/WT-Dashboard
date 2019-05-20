<?php
session_start();
if(isset($_SESSION['Username']))
{
    include('../php/connection.php');
    $user=$_GET['myval'];
    $result=mysqli_query($con,"select * from users where id='$user'") or die(mysqli_error($con));
    $row=mysqli_fetch_array($result);
    $aname=$row['name'];
     $uname=$row['username'];
    $password=$row['password'];
    $contact=$row['contact'];
    $email=$row['email'];
    $temprory=$row['temprory_address'];
    $permanent=$row['permanent_address'];
    $category=$row['category'];
    $dob=$row['dob'];
    $rights=$row['rights']; 
    $date=$row['date'];
    $img=$row['img_path'];

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
                    <div class="row">
                         
                        
                        <div class="col-md-4">
                            <div class="card" style="min-height: 338px;">
                              <div class="card-content">
                                <h4 class="card-title" style="text-align:center; font-weight:bold;" id="employeeImage">
                                </h4>
                                <div class="card-profile">
                                  <div class="card-avatar" style="height:500px;">
                                    <a href="#pablo">
                                      <img class="img" id="logoImage" src="<?php echo $img; ?>" style="background-size:cover;"/>
                                    </a>
                                     
                                  </div>
                                     <h6 class="category text-gray" style="color:black;"><strong><?php echo $rights;?></strong></h6>
                                </div>
                              </div>
                            </div>
                          </div>
                        
                        
                        <div class="col-md-8">
                            <div class="card" id="profile-main">

                                <div class="card-content">

                                    <h3><?php echo $aname; ?></h3>



                                    <div role="tabpanel">
                                        <ul class="nav nav-pills">
                                            <li class="active"><a href="#profile11" aria-controls="profile11" role="tab" data-toggle="tab">Profile</a>
                                            </li>

                                        </ul>

                                        <div class="tab-content">

                                            <div role="tabpanel" class="tab-pane active" id="profile11">
                                                <div class="row">
                                                    <div class="col-sm-10">
                                                        <div class="p-15">
                                                            <h4>General</h4>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <p><strong>Username</strong></p>
                                                                    
                                                                </div>
                                                                <div class="col-sm-7">
                                                                    <p><?php echo $uname; ?></p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <p><strong>Category</strong></p>
                                                                    
                                                                </div>
                                                                <div class="col-sm-7">
                                                                    <p><?php echo $category; ?></p>
                                                                </div>
                                                            </div> 
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <p><strong>Date of Birth</strong></p>
                                                                    
                                                                </div>
                                                                <div class="col-sm-7">
                                                                    <p><?php echo $dob; ?></p>
                                                                </div>
                                                            </div> 
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <p><strong>Date of Joining</strong></p>
                                                                    
                                                                </div>
                                                                <div class="col-sm-7">
                                                                    <p><?php echo $date; ?></p>
                                                                </div>
                                                            </div>
                                                            <h4>Contact</h4>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                    <p><i class="zmdi zmdi-phone"></i><strong>Mobile</strong></p>
                                                                   
                                                                </div>
                                                                <div class="col-sm-7">
                                                                    <p><?php echo $contact; ?></p>
                                                                   
                                                                </div>
                                                            </div>
                                                             <div class="row">
                                                                <div class="col-sm-3">
                                                                    <p><i class="zmdi zmdi-phone"></i><strong>Email</strong></p>
                                                                   
                                                                </div>
                                                                <div class="col-sm-7">
                                                                    <p><?php echo $email; ?></p>
                                                                   
                                                                </div>
                                                            </div> <div class="row">
                                                                <div class="col-sm-3">
                                                                    <p><i class="zmdi zmdi-phone"></i><strong>Current Address</strong></p>
                                                                   
                                                                </div>
                                                                <div class="col-sm-7">
                                                                    <p><?php echo $temprory; ?></p>
                                                                   
                                                                </div>
                                                            </div> <div class="row">
                                                                <div class="col-sm-3">
                                                                    <p><i class="zmdi zmdi-phone"></i><strong>Permanent Addres</strong></p>
                                                                   
                                                                </div>
                                                                <div class="col-sm-7">
                                                                    <p><?php echo $permanent; ?></p>
                                                                   
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
    <script>
        function myFunction()
        {
           $('#cpwd').css('visibility','visible');
           $('#npwd').css('visibility','visible');
           $('#npwd1').css('visibility','visible');
           $('#sbmt').css('visibility','visible');

        }
         function mySubmit()
        {
           if($('#cpwd').val()=="")
            {
             $('#cpwd').focus();
            }
            else if($('#npwd').val()=="")
            {
                $('#npwd').focus();
            }
            else if($('#npwd1').val()=="")
            {
                $('#npwd1').focus();
            }
            else
            {
              var pwd=$('#taketext').val();           
            if($('#cpwd').val()!=pwd)
               {
                    $('#cpwd').focus();
                    alert("Current password is not correct");
               }
            else
                {
                    if($('#npwd').val()!=$('#npwd1').val()) 
                        {
                            alert("Re Password entered is not correct");
                            $('#npwd').focus();
                        }
                    else
                    {
                        $.ajax({
                            type: 'POST',
                            url: '../php/cpwd.php',
                            data: {Password:$('#npwd').val()},

                                beforeSend: function() {

                            },
                        success: function(response) {
                            if(response.match(/failure/))
                                {
                                    alert("Password not successfully changed.Try again later");
                                }
                            else
                                {
                                    alert("Password Successfully changed");
                                    $('#cpwd').val('');
                                    $('#npwd').val('');
                                    $('#npwd1').val('');
                                    location.reload(true); 
                                }
                            }

                        }); 
                    }
                }   
            }

        }
    </script>
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

<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initVectorMap();
    });
</script>

</html>
<?php
    
}
else
{
    ?>
<script>window.open('../php/cookiesunset.php','_self');</script>
<?php
}
?>
