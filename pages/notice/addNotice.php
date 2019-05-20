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
    <script src="../../assets/vendors/jquery-3.1.1.min.js" type="text/javascript"></script>
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
                      <div class="card" style="padding:2%;">
                          <form class="form-horizontal">
                              <div class="card-header card-header-text">
                                  <h4 class="card-title">NOTICE HEADING:</h4>
                              </div>
                              <div class="card-content">
                                <div class="row">
                                  <label class="col-sm-2 label-on-left" style="top:-5px;">NOTICE TARGET:</label>
                                  <div class="col-lg-3 col-md-6 col-sm-3">
                                  <select class="selectpicker" data-style="btn btn-primary btn-round" title="ALL" data-size="7" id="noticeTarget">
                                      <option disabled selected value="ALL">ALL</option>
                                      <option value="WEB DEVELOPMENT">WEB DEVELOPMENT</option>
                                      <option value="CONTENT WRITING">CONTENT WRITING</option>
                                      <option value="GRAPHIC DESIGNING">GRAPHIC DESIGNING</option>
                                      <option value="VIDEO EDITING">VIDEO EDITING</option>
                                      <option value="DIGITAL MARKETING">DIGITAL MARKETING</option>
                                      <option value="PUBLIC RELATIONS">PUBLIC RELATIONS</option>
                                  </select>
                                </div>
                              </div><br>
                                  <div class="row">
                                      <label class="col-sm-2 label-on-left">NOTICE HEADING:</label>
                                      <div class="col-sm-10">
                                          <div class="form-group label-floating is-empty">
                                              <label class="control-label"></label>
                                              <input type="text" id="headingInput" class="form-control" value maxlength="100" onkeyup="headingCount();" required>
                                              <span class="help-block" id="headingSpan">Add a heading for your notice (0/100).</span>
                                          </div>
                                      </div>
                                  </div><br>
                                  <div class="row">
                                      <label class="col-sm-2 label-on-left">NOTICE DESCRIPTION:</label>
                                      <div class="col-sm-10">
                                          <div class="form-group label-floating is-empty">
                                              <label class="control-label"></label>
                                              <textarea rows="3" type="text" id="descriptionInput" class="form-control" value maxlength="300" onkeyup="descriptionCount();" required></textarea>
                                              <span class="help-block" id="descriptionSpan">Add description for your notice (0/300).</span>
                                          </div>
                                      </div>
                                  </div><br>
                                  <div class="row">
                                    <center>
                                    <div class="col-lg-12">
                                      <button type="button" class="btn btn-fill btn-primary" onclick="addNotice();">Submit</button>

                                    </div>
                                  </center>
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
<!--  Google Maps Plugin    -->
 
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
        demo.initFormExtendedDatetimepickers();
        $('.navbar-brand').html('Send Notice');
        $('.activeTabsSidebar').removeClass('active');
        $('#activeTabsSidebarActions').addClass('active');
        $('#activeTabsSidebarSendNotice').addClass('active');
        $('#actions').addClass('in');
        $('#actions').css('height','');
    });

</script>

<script type="text/javascript">

  var target = '';

  function headingCount(){
    var len1 = $('#headingInput').val();
    $('#headingSpan').html("Add heading for your notice ("+(len1.length)+"/100).");
  }

  function descriptionCount(){
    var len1 = $('#descriptionInput').val();
    $('#descriptionSpan').html("Add heading for your notice ("+(len1.length)+"/300).");
  }

  function addNotice(){

    if($('#noticeTarget').val()==null){
      target = "ALL";
    }
    else{
      target = $('#noticeTarget').val();
    }


    if($('#headingInput').val()==null)
    {
      $('#headingInput').focus();
      return false;
    }
    else if($('#descriptionInput').val()=='')
    {
      $('#descriptionInput').focus();
      return false;
    }
    else
    {
      if(navigator.onLine)
      {
        var noticeHead = ($('#headingInput')).val();
        var noticeBody = ($('#descriptionInput')).val();

        $.ajax({
          type: 'POST',
          url: '../php/addNoticeDatabase.php',
          data: {  notice_head: noticeHead, notice_body: noticeBody, notice_target: target },
          beforeSend: function() {
          },
          success: function(response) {
            showAlert();
            sendNotification();
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
          text: "Notice sent successfully!",
          buttonsStyling: false,
          confirmButtonClass: "btn btn-success",
          type: "success"
      });
   	 $('#headingInput').val('');
     $('#descriptionInput').val('');
  }

  function sendNotification(){
    $.ajax({
      type: 'POST',
      url: '../php/sendNotification.php',
      data: {  category: "notice", name: "Admin", description: "sent a new notice.", target: target, link: "../notice/viewNotice.php" },

      success: function(response) {
        sendAlert();
      }
    });
  }
  function sendAlert(){
    var data = {
      category: "notice",
      name: "Admin",
      description: "sent a new notice.",
      target: target,
      link: "../notice/viewNotice.php"
    };
    $.ajax({
      type: 'POST',
      url: '../../pusher.php',
      data: { data: data},
    });
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
