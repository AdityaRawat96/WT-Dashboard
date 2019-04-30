<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">

  <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <script type="text/javascript" src='../../assets/js/bootstrap-notify.js'></script>

  <link rel="stylesheet" href="../../assets/css/style.css">

</head>
<body>
  <nav class="navbar navbar-default navbar-absolute" data-topbar-color="default" style="background-image: linear-gradient(#5785B0, #00B4B4) !important;">
    <div class="container-fluid">
      <div class="navbar-minimize">
        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
          <i class="material-icons visible-on-sidebar-regular f-26">keyboard_arrow_left</i>
          <i class="material-icons visible-on-sidebar-mini f-26">keyboard_arrow_right</i>
        </button>
      </div>
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"> Dashboard </a>
      </div>
      <div class="collapse navbar-collapse" onclick="updateNotifications();">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="material-icons">notifications</i>
              <span class="notification" id="notificationCounter" style="visibility:hidden;"></span>
              <p class="hidden-lg hidden-md">
                Notifications
                <b class="caret"></b>
              </p>
            </a>
            <ul class="dropdown-menu" id="notificationTab">

            </ul>
          </li>
          <li>
            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
              <i class="material-icons">apps</i>
              <p class="hidden-lg hidden-md">Apps</p>
            </a>
          </li>
          <li>
            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
              <i class="material-icons">person</i>
              <p class="hidden-lg hidden-md">Profile</p>
            </a>
          </li>
          <li>
            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
              <i class="material-icons">settings</i>
              <p class="hidden-lg hidden-md">Settings</p>
            </a>
          </li>
          <li class="separator hidden-lg hidden-md"></li>
        </ul>
      </div>
    </div>
  </nav>
</body>
<script type="text/javascript">
var checkCounter;

$(document).ready(function(){

  checkCounter = <?php echo $_SESSION['checkCounter']?>;
  if(checkCounter == 0){
    getNotifications();
  }
  else if(checkCounter == 1){
    var notifications = "<?php
    $name = $_SESSION['Username'];
    $filename = $name.'.txt';
    $myfile = fopen('../../assets/userData/'.$filename, 'r');
    echo fread($myfile,filesize('../../assets/userData/'.$filename));
    fclose($myfile);
    ?>";
    checkNotifications(notifications);
  }


  $(".notificationList").on("click", function(){
    $(this).css("font-weight","lighter");
    alert("STOP");
    $.ajax({
      type: 'POST',
      url: '../php/updateUserData.php',
      data: {  data: $("#notificationTab").html() },
    });
  });

});

function getNotifications(){
  <?php $_SESSION['checkCounter'] = 0; ?>
  $.ajax({
    type: 'POST',
    url: '../php/checkNotifications.php',
    success: function(response) {
      checkNotifications(response);
    }
  });
}
function checkNotifications(response){
  <?php $_SESSION['checkCounter'] = 1; ?>
  $("#notificationTab").html(response);
  var ncount = $("#list9").val();
  if(ncount > 0){
    $("#notificationCounter").html(ncount);
    $("#notificationCounter").css("visibility", "visible");
  }
}
function updateNotifications(){
  <?php $_SESSION['checkCounter']=0; ?>
  $.ajax({
    url: '../php/updateNotificationCount.php',
    success: function(response) {
      $(".notificationList").val("0");
      var listData = $("#notificationTab").html();
      listData = listData.replace(/"/g, "'");
      $.ajax({
        type: 'POST',
        url: '../php/updateUserData.php',
        data: {  data: listData },
        success: function(response) {
          <?php $_SESSION['checkCounter']=1; ?>
          $("#notificationCounter").html('0');
          $("#notificationCounter").css("visibility", "hidden");
        }
      });
    }
  });
}

var pusher = new Pusher('1f80074228f1ab8196f3', {
  cluster: 'ap2',
  forceTLS: true
});

var channel = pusher.subscribe('my-channel');
channel.bind('my-event', function(data) {
  var target = data.target;
  var id = "<?php echo $_SESSION['id'] ?>";
  var department = "<?php echo $_SESSION['department'] ?>";
  target = target.toUpperCase();
  id = id.toUpperCase();
  department = department.toUpperCase();

  if(target == "ALL" || target == id || target == department){
    getNotifications();
    playSound();
    showNotification(data.name, data.description, data.link);
    showAndroidToast(data.name, data.description, data.link);
  }
});

function showAndroidToast(name, description, link) {
  if (typeof Android === "undefined") {
    console.log("Not on Android");
  } else {
    Android.showToast(name, description, link);
  }

}

function playSound(){
  var audio = new Audio('../../assets/audio/notification.mp3');
  audio.play();
}

function showNotification(name, description, link){
  $.notify({
    // options
    title: 'New notification!',
    message: name + " " + description,
    url: link,
    target: '_self'
  },{
    // settings
    element: 'body',
    position: null,
    type: 'pastel-info',
    allow_dismiss: true,
    newest_on_top: false,
    showProgressbar: true,
    placement: {
      from: "bottom",
      align: "right"
    },
    offset: 20,
    spacing: 10,
    z_index: 1031,
    delay: 5000,
    timer: 70,
    url_target: '_self',
    mouse_over: 'pause',
    animate: {
      enter: 'animated fadeInDown',
      exit: 'animated fadeOutUp'
    },
    onShow: null,
    onShown: null,
    onClose: null,
    onClosed: null,
    icon_type: 'class',
    template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
    '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
    '<span data-notify="title"><strong> &nbsp; {1}</strong></span>' +
    '<span data-notify="message"> &nbsp; {2}</span>' +
    '<div class="progress" data-notify="progressbar">' +
    '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
    '</div>' +
    '<a href="{3}" target="{4}" data-notify="url"></a>' +
    '</div>'
  });

}

</script>
</html>
