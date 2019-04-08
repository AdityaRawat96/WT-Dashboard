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
$a=$_GET['val'];
$message="";
if($a==1)
{
    $p1='../reports/reportByDepartment.php';
    $message="No Record Found. Please Enter Valid Data";
}
else if($a==2)
{
    $p1='../reports/reportByEmployee.php';
    $message="No Record Found. Please Enter Valid Data";

}
else if($a==3)
{
    $p1='../tasks/viewTasks.php';
    $message="OOps, An Error Occured. Sorry for Inconvinience. Please Try again later";
}
else if($a==4)
{
    $p1='../employee/viewEmployee.php';
    $message="OOps, An Error Occured. Sorry for Inconvinience. Please Try again later";

}
?>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="margin-top:20%">
    <center>
        <div class="container">
  <h1><?php echo $message; ?></h1>
            
            <button class="btn btn-success" onclick="window.open('<?php echo $p1; ?>','_self')">Return Back</button>
</div>
    </center>
</body>
</html>
<?php
    
}
?>