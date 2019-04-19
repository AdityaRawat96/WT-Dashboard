<?php
session_start();
if($_SESSION['Username']=='' || $_SESSION['Rights']!='employee')
{
    session_unset();
    session_destroy();
?> <script>window.open('../index.html','_self')</script> <?php
}
else
{

    $uname=$_SESSION['Username'];
 $startdate = $_POST['startdate'];
 $enddate=$_POST['enddate'];
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
   

   
            $_SESSION["reportname"]="";
            $_SESSION['reportusername']="";
            $_SESSION['reportdob']="";
            $p1="";$p2="";$p3="";
    
     include('connection.php');
 $roh= mysqli_select_db($con,'wtintern_wt')
    or die("Unable to connect to the database server! <br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>");

    $result= mysqli_query($con,"select * from users where username='$uname'")
or die(mysqli_error($con));
 if(mysqli_num_rows($result)>0)
            {
       
                    $row=mysqli_fetch_array($result);
                    $p1=$row['name'];
                    $p2=$row['id'];
                    $p3=$row['dob'];
                    $p4=$row['img_path'];
                    $p5=$row['email'];
                    $p6=$row['contact'];
                    $p7=$row['category'];
     
                    $_SESSION["reportsdate"]=$date1;
                    $_SESSION["reportedate"]=$date2;
                    $_SESSION["reportcategory"]=$p7;
                    $_SESSION["reporteid"]=$p2;
                    $_SESSION["reportname"]=$p1;
                    $_SESSION['reportusername']=$uname;
                    $_SESSION['reportdob']=$p3;
                    $_SESSION['reportimg']=$p4;
                    $_SESSION['reportemail']=$p5;
                    $_SESSION['reportcontact']=$p6;
 }
}
 ?> 
