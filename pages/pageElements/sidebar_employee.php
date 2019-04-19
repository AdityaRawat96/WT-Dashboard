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
        <a href="../dashboard/employee_dashboard.php">
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
              <a href="../tasks/viewTasksEmployee.php">View Tasks</a>
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
              <a href="../reports/employeeReport.php">Employee Report</a>
            </li>
          </ul>
        </div>
      </li>
    <li>
        <a class="collapsed" onclick="window.open('../leave/applyLeave.php','_self');" aria-expanded="false">
          <i class="material-icons">assignment</i>
          <p>Apply Leave
          </p>
        </a>
      </li>
    </ul>

  </div>
</div>
