      <?php
      include('connection.php');
        
      $result= mysqli_query($con,"update attendance_date set currentDate='2019-05-18'")
      or die(mysqli_error($con));
     ?>