<?php
session_start();
$data = $_POST['data'];
$name = $_SESSION['Username'];
$fname = $name.".txt";
$file = fopen("../../assets/userData/" .$fname, 'w');
fwrite($file, $data);
fclose($file);
?>
