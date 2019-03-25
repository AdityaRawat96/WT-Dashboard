<?php

$task_status = "";

include('../php/connection.php');
$sql="select * from tasks where task_status LIKE '$task_status%'";
$result = mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result))
{

$p0=$row["task_status"];
$p1=$row["task_category"];
$p2=$row["task_id"];
$p3=$row["task_name"];
$p4=$row["task_deadline"];

if($p0 == 'PENDING'){

  if($p1 == 'WEB DEVELOPMENT'){
    ?>
    <script type="text/javascript">
    var date = '<?php echo $p4 ?>';
    date = date.slice(0,date.indexOf(" "));
    date = new Date(date);
    var deadline = new Date();
    if(deadline > date){
      var data = '<tr id=<?php echo $p2 ?> style="background-color: #ff9191 !important;"><td>'+"<?php echo $p1 ?>"+'</td><td>'+"<?php echo $p2 ?>"+'</td><td>'+"<?php echo $p3 ?>"+'</td><td>'+"<?php echo $p4 ?>"+'</td><td class="text-right"><a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">add</i></a><a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>  </td></tr>';
    }
    else{
      var data = '<tr id=<?php echo $p2 ?>><td>'+"<?php echo $p1 ?>"+'</td><td>'+"<?php echo $p2 ?>"+'</td><td>'+"<?php echo $p3 ?>"+'</td><td>'+"<?php echo $p4 ?>"+'</td><td class="text-right"><a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">add</i></a><a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>  </td></tr>';
    }
    loadTableData(data, "PWD");
    </script>
    <?php
  }
  else if($p1 == 'CONTENT WRITING'){
    ?>
    <script type="text/javascript">
    var date = '<?php echo $p4 ?>';
    date = date.slice(0,date.indexOf(" "));
    date = new Date(date);
    var deadline = new Date();
    if(deadline > date){
      var data = '<tr id=<?php echo $p2 ?> style="background-color: #ff9191 !important;"><td>'+"<?php echo $p1 ?>"+'</td><td>'+"<?php echo $p2 ?>"+'</td><td>'+"<?php echo $p3 ?>"+'</td><td>'+"<?php echo $p4 ?>"+'</td><td class="text-right"><a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">add</i></a><a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>  </td></tr>';
    }
    else{
      var data = '<tr id=<?php echo $p2 ?>><td>'+"<?php echo $p1 ?>"+'</td><td>'+"<?php echo $p2 ?>"+'</td><td>'+"<?php echo $p3 ?>"+'</td><td>'+"<?php echo $p4 ?>"+'</td><td class="text-right"><a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">add</i></a><a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>  </td></tr>';
    }
    loadTableData(data, "PCW");
    </script>
    <?php
  }
  else if($p1 == 'DIGITAL MARKETING'){
    ?>
    <script type="text/javascript">
    var date = '<?php echo $p4 ?>';
    date = date.slice(0,date.indexOf(" "));
    date = new Date(date);
    var deadline = new Date();
    if(deadline > date){
      var data = '<tr id=<?php echo $p2 ?> style="background-color: #ff9191 !important;"><td>'+"<?php echo $p1 ?>"+'</td><td>'+"<?php echo $p2 ?>"+'</td><td>'+"<?php echo $p3 ?>"+'</td><td>'+"<?php echo $p4 ?>"+'</td><td class="text-right"><a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">add</i></a><a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>  </td></tr>';
    }
    else{
      var data = '<tr id=<?php echo $p2 ?>><td>'+"<?php echo $p1 ?>"+'</td><td>'+"<?php echo $p2 ?>"+'</td><td>'+"<?php echo $p3 ?>"+'</td><td>'+"<?php echo $p4 ?>"+'</td><td class="text-right"><a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">add</i></a><a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>  </td></tr>';
    }
    loadTableData(data, "PDM");
    </script>
    <?php
  }
  else if($p1 == 'GRAPHIC DESIGNING'){
    ?>
    <script type="text/javascript">
    var date = '<?php echo $p4 ?>';
    date = date.slice(0,date.indexOf(" "));
    date = new Date(date);
    var deadline = new Date();
    if(deadline > date){
      var data = '<tr id=<?php echo $p2 ?> style="background-color: #ff9191 !important;"><td>'+"<?php echo $p1 ?>"+'</td><td>'+"<?php echo $p2 ?>"+'</td><td>'+"<?php echo $p3 ?>"+'</td><td>'+"<?php echo $p4 ?>"+'</td><td class="text-right"><a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">add</i></a><a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>  </td></tr>';
    }
    else{
      var data = '<tr id=<?php echo $p2 ?>><td>'+"<?php echo $p1 ?>"+'</td><td>'+"<?php echo $p2 ?>"+'</td><td>'+"<?php echo $p3 ?>"+'</td><td>'+"<?php echo $p4 ?>"+'</td><td class="text-right"><a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">add</i></a><a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>  </td></tr>';
    }
    loadTableData(data, "PGD");
    </script>
    <?php
  }
}
else if($p0 == 'ONGOING'){
  if($p1 == 'WEB DEVELOPMENT'){
    ?>
    <script type="text/javascript">
    var data = '<tr id=<?php echo $p2 ?>><td>'+"<?php echo $p1 ?>"+'</td><td>'+"<?php echo $p2 ?>"+'</td><td>'+"<?php echo $p3 ?>"+'</td><td>'+"<?php echo $p4 ?>"+'</td><td class="text-right"><a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">add</i></a><a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>  </td></tr>';
    loadTableData(data, "OWD");
    </script>
    <?php
  }
  else if($p1 == 'CONTENT WRITING'){
    ?>
    <script type="text/javascript">
    var data = '<tr id=<?php echo $p2 ?>><td>'+"<?php echo $p1 ?>"+'</td><td>'+"<?php echo $p2 ?>"+'</td><td>'+"<?php echo $p3 ?>"+'</td><td>'+"<?php echo $p4 ?>"+'</td><td class="text-right"><a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">add</i></a><a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>  </td></tr>';
    loadTableData(data, "OCW");
    </script>
    <?php
  }
  else if($p1 == 'DIGITAL MARKETING'){
    ?>
    <script type="text/javascript">
    var data = '<tr id=<?php echo $p2 ?>><td>'+"<?php echo $p1 ?>"+'</td><td>'+"<?php echo $p2 ?>"+'</td><td>'+"<?php echo $p3 ?>"+'</td><td>'+"<?php echo $p4 ?>"+'</td><td class="text-right"><a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">add</i></a><a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>  </td></tr>';
    loadTableData(data, "ODM");
    </script>
    <?php
  }
  else if($p1 == 'GRAPHIC DESIGNING'){
    ?>
    <script type="text/javascript">
    var data = '<tr id=<?php echo $p2 ?>><td>'+"<?php echo $p1 ?>"+'</td><td>'+"<?php echo $p2 ?>"+'</td><td>'+"<?php echo $p3 ?>"+'</td><td>'+"<?php echo $p4 ?>"+'</td><td class="text-right"><a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">add</i></a><a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>  </td></tr>';
    loadTableData(data, "OGD");
    </script>
    <?php
  }

}
else if($p0 == 'COMPLETED'){
  if($p1 == 'WEB DEVELOPMENT'){
    ?>
    <script type="text/javascript">
    var data = '<tr id=<?php echo $p2 ?>><td>'+"<?php echo $p1 ?>"+'</td><td>'+"<?php echo $p2 ?>"+'</td><td>'+"<?php echo $p3 ?>"+'</td><td>'+"<?php echo $p4 ?>"+'</td><td class="text-right"><a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">add</i></a><a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>  </td></tr>';
    loadTableData(data, "CWD");
    </script>
    <?php
  }
  else if($p1 == 'CONTENT WRITING'){
    ?>
    <script type="text/javascript">
    var data = '<tr id=<?php echo $p2 ?>><td>'+"<?php echo $p1 ?>"+'</td><td>'+"<?php echo $p2 ?>"+'</td><td>'+"<?php echo $p3 ?>"+'</td><td>'+"<?php echo $p4 ?>"+'</td><td class="text-right"><a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">add</i></a><a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>  </td></tr>';
    loadTableData(data, "CCW");
    </script>
    <?php
  }
  else if($p1 == 'DIGITAL MARKETING'){
    ?>
    <script type="text/javascript">
    var data = '<tr id=<?php echo $p2 ?>><td>'+"<?php echo $p1 ?>"+'</td><td>'+"<?php echo $p2 ?>"+'</td><td>'+"<?php echo $p3 ?>"+'</td><td>'+"<?php echo $p4 ?>"+'</td><td class="text-right"><a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">add</i></a><a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>  </td></tr>';
    loadTableData(data, "CDM");
    </script>
    <?php
  }
  else if($p1 == 'GRAPHIC DESIGNING'){
    ?>
    <script type="text/javascript">
    var data = '<tr id=<?php echo $p2 ?>><td>'+"<?php echo $p1 ?>"+'</td><td>'+"<?php echo $p2 ?>"+'</td><td>'+"<?php echo $p3 ?>"+'</td><td>'+"<?php echo $p4 ?>"+'</td><td class="text-right"><a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">add</i></a><a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>  </td></tr>';
    loadTableData(data, "CGD");
    </script>
    <?php
  }

}




}

?>
