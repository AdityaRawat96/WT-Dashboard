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
      <li class="active">
        <a href="../dashboard/dashboard.php">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li>
        <a data-toggle="collapse" href="#tasks" class="collapsed" aria-expanded="false">
          <i class="material-icons">list</i>
          <p>Task
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="tasks" aria-expanded="false" style="height: 0px;">
          <ul class="nav">
            <li>
              <a href="../tasks/addTask.php">Add Task</a>
            </li>
            <li>
              <a href="../tasks/viewTasks.php">View Tasks</a>
            </li>
          </ul>
        </div>
      </li>
      <li>
        <a data-toggle="collapse" href="#employee" class="collapsed" aria-expanded="false">
          <i class="material-icons">perm_identity</i>
          <p>Employee
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="employee" aria-expanded="false" style="height: 0px;">
          <ul class="nav">
            <li>
              <a href="../employee/viewEmployee.php">View Employees</a>
            </li>
            <li>
              <a href="../employee/addEmployee.php">Add Employee</a>
            </li>
          </ul>
        </div>
      </li>
      <li>
        <a data-toggle="collapse" href="#reports" class="collapsed" aria-expanded="false">
          <i class="material-icons">assignment</i>
          <p>Report
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="reports" aria-expanded="false" style="height: 0px;">
          <ul class="nav">
            <li>
              <a href="../reports/reportByEmployee.php">Employee Report</a>
            </li>
            <li>
              <a href="../reports/reportByDepartment.php">Department Report</a>
            </li>
          </ul>
        </div>
      </li>
      <li>
        <a data-toggle="collapse" href="#actions" class="collapsed" aria-expanded="false">
          <i class="material-icons">work</i>
          <p>Actions
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="actions" aria-expanded="false" style="height: 0px;">
          <ul class="nav">
            <li>
              <a href="../notice/addNotice.php">Send Notice</a>
            </li>
            <li>
              <a href="../notice/addNotice.php">View Notices</a>
            </li>
            <li>
              <a href="../leave/viewLeave1.php">View Leaves</a>
            </li>
            <li>
              <a href="../leave/leaveStatus.php">Leave History</a>
            </li>
          </ul>
        </div>
      </li>
    </ul>

  </div>
</div>
