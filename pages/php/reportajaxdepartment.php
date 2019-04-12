<?php
session_start();
if($_SESSION['Username']=='')
{
  session_unset();
  session_destroy();
  ?> <script>window.open('../index.html','_self')</script> <?php
}
else
{
  $d=$_SESSION['reportsdate'];
  $e=$_SESSION['reportedate'];
  $f=$_SESSION['reportcategory'];
  $var=0;
  $var1=0;
  $var2=0;
  include('connection.php');
  $roh= mysqli_select_db($con,'wtintern_wt')
  or die("Unable to connect to the database server! <br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>");

  $result= mysqli_query($con,"select * from tasks where assigned_date>='$d' and assigned_date<='$e' and task_category='$f'")
  or die(mysqli_error($con));
  if(mysqli_num_rows($result)>0)
  {
    while($row=mysqli_fetch_array($result))
    {
      $p1=$row['task_id'];
      $p2=$row['task_name'];
      $p3=$row['task_category'];
      $p4=$row['task_deadline'];
      $p5=$row['task_status'];
      if($p5=="ONGOING")
      {
        $var++;
        ?>
        <tr class="ongoing"><td><?php echo $p1; ?></td><td><?php echo $p2; ?></td><td><?php echo $p3; ?></td><td><?php echo $p4; ?></td></tr>
        <?php
      }
      else if($p5=="COMPLETED")
      {
        $var1++;
        ?>
        <tr class="completed"><td><?php echo $p1; ?></td><td><?php echo $p2; ?></td><td><?php echo $p3; ?></td><td><?php echo $p4; ?></td></tr>
        <?php
      }
      else
      {
        $var2++;
      }
    }
    $result1= mysqli_query($con,"select * from users where category='$f' and rights='employee'") or die(mysqli_error($con));


    if(mysqli_num_rows($result1)>0)
    {
      while($row=mysqli_fetch_array($result1))
      {
        $p1=$row['id'];
        $p2=$row['name'];
        ?>
        <tr class="list"><td><?php echo $p1; ?></td><td><?php echo $p2; ?></td></tr>
        <?php
      }

    }
    else
    {
      echo 'employeeloadingfailure';
    }
    echo 'myvarcompleted'.$var1;
    echo 'myvarongoing'.$var;
    echo 'myvarpending'.$var2;

  }


  else
  {
    $result1= mysqli_query($con,"select * from users where category='$f' and rights='employee'") or die(mysqli_error($con));


    if(mysqli_num_rows($result1)>0)
    {
      while($row=mysqli_fetch_array($result1))
      {
        $p1=$row['id'];
        $p2=$row['name'];
        ?>
        <tr class="list"><td><?php echo $p1; ?></td><td><?php echo $p2; ?></td></tr>
        <?php
      }
      echo 'failure';

    }
    else
    {
      echo 'failureandemployeeloadingfailure';
    }
    unset($_SESSION['reportsdate']);
    unset($_SESSION['reportedate']);
    unset($_SESSION['reportcategory']);
    ?>
    <?php
  }
}
?>
