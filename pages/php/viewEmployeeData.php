<?php

include "connection.php";

$roh= mysqli_select_db($con,'wtintern_wt')
   or die("Unable to connect to the database server! <br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>");

$result= mysqli_query($con,"select * from users")
or die('Uppss.. an Error accured...(unable to process this request)<br>Reason : &nbsp;'. mysqli_error($con));

while($row=mysqli_fetch_array($result))
{
  $p0=$row['name'];
  $p1=$row['contact'];
  $p2=$row['email'];
  $p3=$row['category'];
  $p4=$row['id'];

  if($p3=="Web Development")
  {
    ?>

    <tr class="wd" id="<?php echo $p4; ?>">
        <td><?php echo $p0; ?></td>
        <td><?php echo $p1; ?></td>
        <td><?php echo $p2; ?></td>
        <td class="text-right">
            <a href="#" class="btn btn-simple btn-info btn-icon view"><i class="fas fa-info-circle"></i></a>
            <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
        </td>
    </tr>

      <?php
  }
    if($p3=="Content Writing" )
  {
    ?>

    <tr class="cw" id="<?php echo $p4; ?>">
        <td><?php echo $p0; ?></td>
        <td><?php echo $p1; ?></td>
        <td><?php echo $p2; ?></td>
        <td class="text-right">
          <a href="#" class="btn btn-simple btn-info btn-icon view"><i class="fas fa-info-circle"></i></a>
          <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
        </td>
    </tr>

      <?php
  }
    if($p3=="Graphic Designing")
  {
    ?>

    <tr class="gd" id="<?php echo $p4; ?>">
        <td><?php echo $p0; ?></td>
        <td><?php echo $p1; ?></td>
        <td><?php echo $p2; ?></td>
        <td class="text-right">
          <a href="#" class="btn btn-simple btn-info btn-icon view"><i class="fas fa-info-circle"></i></a>
          <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
        </td>
    </tr>

      <?php
  } if($p3=="Digital Marketing")
  {
    ?>

    <tr class="dm" id="<?php echo $p4; ?>">
        <td><?php echo $p0; ?></td>
        <td><?php echo $p1; ?></td>
        <td><?php echo $p2; ?></td>
        <td class="text-right">
          <a href="#" class="btn btn-simple btn-info btn-icon view"><i class="fas fa-info-circle"></i></a>
          <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
        </td>
    </tr>

      <?php
  }
     if($p3=="Public Relations")
  {
    ?>

    <tr class="pr" id="<?php echo $p4; ?>">
        <td><?php echo $p0; ?></td>
        <td><?php echo $p1; ?></td>
        <td><?php echo $p2; ?></td>
        <td class="text-right">
          <a href="#" class="btn btn-simple btn-info btn-icon view"><i class="fas fa-info-circle"></i></a>
          <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
        </td>
    </tr>

      <?php
  } if($p3=="Video Editing")
  {
    ?>

    <tr class="ve" id="<?php echo $p4; ?>">
        <td><?php echo $p0; ?></td>
        <td><?php echo $p1; ?></td>
        <td><?php echo $p2; ?></td>
        <td class="text-right">
          <a href="#" class="btn btn-simple btn-info btn-icon view"><i class="fas fa-info-circle"></i></a>
          <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
        </td>
    </tr>

      <?php
  }
}
?>
