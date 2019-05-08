<?php
session_start();
if($_SESSION['Username']=='' || $_SESSION['Rights']!='admin')
{
    session_unset();
    session_destroy();
?> <script>window.open('../php/cookiesunset.php','_self')</script> <?php
}
else
{

 $startdate = $_POST['startdate'];
 $enddate=$_POST['enddate'];
 $category=$_POST['category'];
  $time1=strtotime($startdate);
  $time2=strtotime($enddate);
  $newFormat1=date('Y-m-d',$time1);
  $newFormat2=date('Y-m-d',$time2);
  $str1 = substr($newFormat1,0,4);
  $str2 = substr($newFormat1,5,2);
  $str3 = substr($newFormat1,8,2);
  $date1=$str1.$str2.$str3;
 $str1 = substr($newFormat2,0,4);
  $str2 = substr($newFormat2,5,2);
  $str3 = substr($newFormat2,8,2);
  $date2=$str1.$str2.$str3;
   

    if($category==1)
    {
        $category='Web Development';
    }
    else if($category==2)
    {
        $category='Content Writing';
    }
    else if($category==3)
    {
        $category='Digital Marketing';
    }
    else if($category==4)
    {
        $category='Graphic Designing';
    }
    else if($category==5)
    {
        $category='Public Relations';
    }
    else if($category==6)
    {
        $category='Video Editor';
    }

    $_SESSION["reportsdate"]=$date1;
    $_SESSION["reportedate"]=$date2;
    $_SESSION["reportcategory"]=$category;


     include('connection.php');
 $roh= mysqli_select_db($con,'wtintern_wt')
    or die("Unable to connect to the database server! <br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>");

    $result= mysqli_query($con,"select * from users where category='$category' and rights='employee'")or dir(mysqli_error($con));

    $nor=mysqli_num_rows($result);
    $_SESSION['no_of_employee']=$nor;
}
 ?> 
