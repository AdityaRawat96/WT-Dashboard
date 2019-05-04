<?php

$exp=time()-31536000;
setcookie("wtsolutionusername","",$exp,'/');
setcookie("wtsolutionrights","",$exp,'/');

session_start();
session_unset();
session_destroy();
?>
<script>window.open('../../index.php','_self');</script>
<?php
?>