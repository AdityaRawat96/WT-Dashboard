<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">

  <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>

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
   else{
       var notifications = "<?php
        $name = $_SESSION['Username'];
        $filename = $name.'.txt';
        $myfile = fopen('../../assets/userData/'.$filename, 'r') or die('Unable to open file!');
        echo fread($myfile,filesize('../../assets/userData/'.$filename));
        fclose($myfile);
        ?>";
        checkNotifications(notifications);
   }
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
      <?php $_SESSION['checkCounter']=1; ?>
      <?php $_SESSION['notificationDifference']=0; ?>
      $("#notificationCounter").html('0');
      $("#notificationCounter").css("visibility", "hidden");
    }
  });
}

var pusher = new Pusher('1f80074228f1ab8196f3', {
  cluster: 'ap2',
  forceTLS: true
});

var channel = pusher.subscribe('my-channel');
channel.bind('my-event', function(data) {
  getNotifications();
});

</script>
</html>
