<?php
$con= mysqli_connect("localhost", "root", "")
 or die("Unable to connect to the database server!");
 $roh= mysqli_select_db($con, 'wt')
  or die("Unable to connect to the database server! <br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>");
?>
