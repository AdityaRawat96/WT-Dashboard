<?php
session_start(); 
error_reporting(0);
if(isset($_SESSION['Username'])&&$_SESSION['Rights']=='admin')
{
$var1="";
$var2="";
$arr =array();
// $arr1 = array();
$tname = $_GET['myvar'];
include ("../php/connection.php");
$roh= mysqli_select_db($con,'wtintern_wt')
   or die("Unable to connect to the database server! <br><hr width=800 style=height:1px;></hr><center><input type=button value=OK id=1 class=buttons onclick=cancelit();></center>");

   $result= mysqli_query($con,"select * from tasks where task_id='$tname'")
or die('Uppss.. an Error accured...(unable to process this request)<br>Reason : &nbsp;'. mysqli_error($con));

   if(mysqli_num_rows($result)>0)
   {
      $row=mysqli_fetch_array($result);
           $p1=$row['task_id'];
           $p2=$row['task_name'];
           $p3=$row['task_description'];
           $p4=$row['task_category'];
           ?>

           <!doctype html>
           <html lang="en">

           <head>
             <meta charset="utf-8" />
             <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png" />
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
             <link rel="icon" type="image/png" href="../../assets/img/favicon.png" />
             <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
             <title>Turbo - Bootstrap Material Admin Dashboard Template</title>
             <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
             <meta name="viewport" content="width=device-width" />
             <!-- Bootstrap core CSS     -->
             <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
             <!--  Material Dashboard CSS    -->
             <link href="../../assets/css/turbo.css" rel="stylesheet" />

             <!--  CSS for Demo Purpose, don't include it in your project     -->
             <link href="../../assets/css/demo.css" rel="stylesheet" />
             <!--     Fonts and icons     -->
             <link href="../../assets/vendors/maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
             <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />

             <link href="../../assets/vendors/dropzone/dropzone.min.css" rel="stylesheet">
             <script>
             </script>

           <style>
             input{
               border:none;
             }
           </style>


           </head>

           <body>
               <div class="wrapper">

                   <!--  Sidebar included     -->
                   <?php include('../pageElements/sidebar.php'); ?>

                   <div class="main-panel">

                     <!--  Navbar included     -->
                     <?php include('../pageElements/navbar.php'); ?>

                       <div class="content">
                           <div class="container-fluid">

                             <!--  Page content goes here!    -->
                   <div class="row">
                     <div class="col-sm-2">
                       <label for="task_id">
                         <strong>Task Name:</strong>
                       </label>
                     </div>
                     <div class="col-sm-10">
                       <input type="text" name="task_name" id="task_name" readonly value="<?php echo $p2; ?>" >
                     </div>
                   </div>

                   <br><br>

                   <div class="row">
                     <div class="col-sm-2">
                       <label for="task_name">
                         <strong>Task DESCRIPTION:</strong>
                       </label>
                     </div>
                     <div class="col-sm-10">
                       <input type="text" name="task_description" value="<?php echo $p3; ?>" id="task_description" readonly>
                     </div>
                   </div>
                   <br><br>

                   <div class="row">
                     <div class="col-sm-2">
                       <label for="task_id">
                         <strong>Task Category:</strong>
                       </label>
                     </div>
                     <div class="col-sm-10">
                       <input type="text" name="task_category" value="<?php echo $p4; ?>" id="task_category" readonly>
                     </div>
                   </div>
                   <br><br>

                   <div class="row">
                   <div class="col-sm-2">
                       <label for="users">
                         <strong>Employee</strong>
                       </label>
                   </div>
                       <div class="col-sm-3">
                           <select class="selectpicker" data-style="btn btn-info btn-round" title="Single Select" data-size="7" id="users" >
                               <option disabled selected value="">SELECT EMPLOYEE</option>


           <?php
           $sql="select * from users where category='$p4'";
           $rslt=mysqli_query($con,$sql) or die(mysqli_error($con));
           if(mysqli_num_rows($rslt)>0)
           {

            while($row1=mysqli_fetch_array($rslt))
            {
              $var1=$row1['name'];
              $var2=$row1['id'];
              ?><option value="<?php echo $var1."/".$var2; ?>"><?php echo $var1; ?></option>
              <?php
            }

           }
           else
           {
              print_r("NO record found");
           }


    }
    else
    {
      echo "No record found";
    }

?>

                </select>
            </div>
        </div>
        <input type="text" id="taskidfield" value="<?php echo $tname; ?>" hidden>

            <br><br>
            <div class="col-sm-6" style="margin-left:25%">
              <button class="btn btn-success" onclick="assignTask();">
                                                <span class="btn-label">
                                                    <i class="material-icons">check</i>
                                                </span>
                                                Assign
                                            </button>
            </div>

        </div>



                </div>
            </div>

            <!--  Footer included     -->
            <?php  include('../pageElements/footer.php'); ?>

        </div>



    </div>


</body>
<script type="text/javascript">

function assignTask() {
    if($('#users').val()==null)
        {
            alert('Please Select any employee');
            return false;
        }
    
  $myVar=$('#users').val();
  // console.log($myVar);
  $index=$myVar.indexOf('/');
  $myvar1=$myVar.substring(0,$index);
  $myvar2=$myVar.substring($index+1);

  $.ajax({
      type: 'POST',
      url: '../php/assigntaskdb.php',
      data: {taskId:$('#taskidfield').val(),userId:$myvar2,userIdName:$myvar1},

  beforeSend: function() {

  },
      success: function(response) {
//          alert(response);
          if(response.match(/Success/))
          {
            showAlert();
          
          }
          else
          {
            alert("Problem Occurs Guys");
          }


                   }
  });

}

function showAlert(){
  swal({
        title: "Done!",
        timer: 5000,
        text: "Task assigned successfully!",
        buttonsStyling: false,
        confirmButtonClass: "btn btn-success",
        type: "success"
    }).then(function(){
       window.open('viewTasks.php','_self');
  });  
}

</script>
<!--   Core JS Files   -->
<script src="../../assets/vendors/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="../../assets/vendors/jquery-ui.min.js" type="text/javascript"></script>
<script src="../../assets/vendors/bootstrap.min.js" type="text/javascript"></script>
<script src="../../assets/vendors/material.min.js" type="text/javascript"></script>
<script src="../../assets/vendors/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="../../assets/vendors/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="../../assets/vendors/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="../../assets/vendors/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="../../assets/vendors/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="../../assets/vendors/bootstrap-notify.js"></script>
<!-- DateTimePicker Plugin -->
<script src="../../assets/vendors/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="../../assets/vendors/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="../../assets/vendors/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<!-- Select Plugin -->
<script src="../../assets/vendors/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="../../assets/vendors/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="../../assets/vendors/sweetalert2.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="../../assets/vendors/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="../../assets/vendors/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="../../assets/vendors/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="../../assets/js/turbo.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../../assets/js/demo.js"></script>

<script src="../../assets/vendors/dropzone/dropzone.min.js"></script>



</html>
<?php
}
else
{
    session_unset();
    session_destroy();
    ?>
    <script>window.open('../index.html','_self')</script>
    <?php
}
?>