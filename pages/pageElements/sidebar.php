<html>
<head>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</head>
<body>
  <div class="loader" style="display: none; z-index:300; position:fixed; height:100%; width:100%; background-color:black; opacity: 0.8; padding-top:35vh;">
    <center>
      <img src="../../assets/img/loader.svg" style="position:relative; height:200px; width:200px;">
    </center>
  </div>
  <div class="sidebar" data-background-color="gray">
    <div class="logo">
      <a href="#" class="simple-text">
        <img src="../../assets/img/logo-w.png" alt="">&nbsp; ADMIN PORTAL
      </a>
    </div>
    <div class="logo logo-mini">
      <a href="#" class="simple-text">
        <img src="../../assets/img/logo-w.png" alt="">
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="activeTabsSidebar" id='activeTabsSidebarDashboard'>
          <a href="../dashboard/dashboard.php">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="activeTabsSidebar" id='activeTabsSidebarTask'>
          <a data-toggle="collapse" href="#tasks" class="collapsed" aria-expanded="false">
            <i class="material-icons">list</i>
            <p>Task
              <b class="caret"></b>
            </p>
          </a>
          <div class="collapse" id="tasks" aria-expanded="false" style="height: 0px;">
            <ul class="nav">
              <li class="activeTabsSidebar" id='activeTabsSidebarAddTask'>
                <a href="../tasks/addTask.php">Add Task</a>
              </li>
              <li class="activeTabsSidebar" id='activeTabsSidebarViewTask'>
                <a href="../tasks/viewTasks.php">View Tasks</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="activeTabsSidebar" id='activeTabsSidebarEmployee'>
          <a data-toggle="collapse" href="#employee" class="collapsed" aria-expanded="false">
            <i class="material-icons">perm_identity</i>
            <p>Employee
              <b class="caret"></b>
            </p>
          </a>
          <div class="collapse" id="employee" aria-expanded="false" style="height: 0px;">
            <ul class="nav">
              <li class="activeTabsSidebar" id='activeTabsSidebarViewEmployee'>
                <a href="../employee/viewEmployee.php">View Employees</a>
              </li>
              <li class="activeTabsSidebar" id='activeTabsSidebarAddEmployee'>
                <a href="../employee/addEmployee.php">Add Employee</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="activeTabsSidebar" id='activeTabsSidebarReport'>
          <a data-toggle="collapse" href="#reports" class="collapsed" aria-expanded="false">
            <i class="material-icons">assignment</i>
            <p>Report
              <b class="caret"></b>
            </p>
          </a>
          <div class="collapse" id="reports" aria-expanded="false" style="height: 0px;">
            <ul class="nav">
              <li class="activeTabsSidebar" id='activeTabsSidebarEmployeeReport'>
                <a href="../reports/reportByEmployee.php">Employee Report</a>
              </li>
              <li class="activeTabsSidebar" id='activeTabsSidebarDepartmentReport'>
                <a href="../reports/reportByDepartment.php">Department Report</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="activeTabsSidebar" id='activeTabsSidebarActions'>
          <a data-toggle="collapse" href="#actions" class="collapsed" aria-expanded="false">
            <i class="material-icons">work</i>
            <p>Actions
              <b class="caret"></b>
            </p>
          </a>
          <div class="collapse" id="actions" aria-expanded="false" style="height: 0px;">
            <ul class="nav">
              <li class="activeTabsSidebar" id='activeTabsSidebarSendNotice'>
                <a href="../notice/addNotice.php">Send Notice</a>
              </li>
              <li class="activeTabsSidebar" id='activeTabsSidebarViewLeaves'>
                <a href="../leave/viewLeave.php">View Leaves</a>
              </li>
              <li style="cursor:pointer;" class="activeTabsSidebar" id='activeTabsSidebarAttendance'>
                <a onclick="attendanceFunction();">Attendance</a>
              </li>
            </li>
            <li style="cursor:pointer;" class="activeTabsSidebar" id='activeTabsSidebarViewAttendance'>
              <a href="../attendance/viewAttendance.php">View Attendance</a>
            </li>
          </ul>
        </div>
      </li>
    </ul>

  </div>
</div>
</body>

<script>
function attendanceFunction()
{
  $('.loader').fadeIn();
  $.ajax({
    type: 'POST',
    url: '../attendance/setDataAttendance.php',
    data: {},

    beforeSend: function() {

    },
    success: function(response) {
      if(response.match(/Success/))
      {
        $('.loader').fadeOut();
        window.open('../attendance/attendance.php','_self');
      }
      else
      {
        alert('Error while loading Portal');
      }
    }
  });
}
</script>

</html>
