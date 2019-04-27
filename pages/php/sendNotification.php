<?php

$category=$_POST['category'];
$dateTime = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
$date = $dateTime->format('Y-m-d H:i:s');
$name=$_POST['name'];
$description=$_POST['description'];
$target=$_POST['target'];
$link=$_POST['link'];

include('connection.php');

$sql= mysqli_query($con, "insert into notifications(category, date, name, description, target, link) values ('$category', '$date', '$name', '$description', '$target', '$link')")
or die('Uppss.. an Error accured Aditya...(unable to process this request)<br>Reason : &nbsp;'. mysqli_error($con).'<br><hr width=800 style=height:1px;></hr><center><input type=button value=OK class=buttons id=1 onclick=cancelit();></center>' );
echo "newUser";
 ?>
