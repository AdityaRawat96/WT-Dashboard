<?php
include('connection.php');
$result= mysqli_query($con,"alter table Notice add column notice_department varchar(50)'")
or die('Uppss.. an Error accured...(unable to process this request)<br>Reason : &nbsp;'. mysqli_error($con));

 ?>
