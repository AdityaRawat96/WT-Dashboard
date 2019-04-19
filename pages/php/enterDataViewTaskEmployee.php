<?php
session_start();
$uname=$_SESSION['Username'];
include('../php/connection.php');
$result=mysqli_query($con,"select * from users where username='$uname'");
$row=mysqli_fetch_array($result);
$category=$row['category'];
$id=$row['id'];
$sql="select * from tasks where task_category='$category' and assigned_to='$id' order by task_deadline DESC";
$result = mysqli_query($con,$sql);
date_default_timezone_set('Asia/Calcutta');
$date=date("m/d/Y");

if(mysqli_num_rows($result)>0)
{
    
while($row=mysqli_fetch_array($result))
{

$p0=$row["task_id"];
$p1=$row["task_name"];
$p3=$row["task_deadline"];
    $p3=substr($p3,0,strpos($p3," "));
$p2=$row["task_description"];
if(strlen($p2)>30)
{
    $p2=substr($p2,0,30)."....";
}
if($p3>$date)
{
?>
<tr><td><?php echo $p0;?></td><td><?php echo $p1;?></td><td><?php echo $p2;?></td><td><?php echo $p3;?></td><td><a class="btn btn-simple btn-info btn-icon " onclick="myLikeFunction(\'<?php echo $p2; ?>\');"><i class="material-icons">add</i></a></td></tr>
<?php
}
else
    {
       ?>
<tr style="background-color:#FA8072;"><td><?php echo $p0;?></td><td><?php echo $p1;?></td><td><?php echo $p2;?></td><td><?php echo $p3;?></td><td><a class="btn btn-simple btn-info btn-icon " onclick="myLikeFunction(\'<?php echo $p2; ?>\');"><i class="material-icons">add</i></a></td></tr>
<?php 
    }
}
}
else
{
    echo "failure";
}
?>
