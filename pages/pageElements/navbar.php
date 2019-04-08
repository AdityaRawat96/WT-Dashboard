<nav class="navbar navbar-default navbar-absolute" data-topbar-color="default" style="background-image: linear-gradient(#5785B0, #00B4B4) !important;">
    <div class="container-fluid">
        <div class="navbar-minimize">
            <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
  <i class="material-icons visible-on-sidebar-regular f-26">keyboard_arrow_left</i>
                <i class="material-icons visible-on-sidebar-mini f-26">keyboard_arrow_right</i>
            </button>
        </div>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"> Dashboard </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">notifications</i>
                        <span class="notification">
                            <?php
                            include('../php/connection.php');
                   // $rows=mysql_num_rows(mysql_query("SELECT COUNT(*) FROM leave_employee WHERE status = 0"));
                   // $result = mysql_query('SELECT COUNT(*) FROM leave_employee WHERE status = 0');
                   // $num_rows = mysql_result($result, 0, 0);
                     //        echo $num_rows;
                     $result = mysqli_query($con,"SELECT COUNT(*) FROM leave_employee WHERE status = 0");
$row = mysqli_fetch_array($result);

$total = $row[0];
echo  $total;
                             ?>
                            </span>
                        <p class="hidden-lg hidden-md">
                            Notifications
                            <b class="caret"></b>
                        </p>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="leave_admin1.php">Check out new leaves</a>
                        </li>
                 <!--        <li>
                            <a href="#">You're now friend with Mike</a>
                        </li>
                        <li>
                            <a href="#">Wish Mary on her birthday!</a>
                        </li>
                        <li>
                            <a href="#">5 warnings in Server Console</a>
                        </li>
                        <li>
                            <a href="#">Jane completed 'Induction Training'</a>
                        </li>
                        <li>
                            <a href="#">'Prepare Marketing Report' is overdue</a>
                        </li> -->
                    </ul>
                </li>
                <li>
                    <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">apps</i>
                        <p class="hidden-lg hidden-md">Apps</p>
                    </a>
                </li>
                <li>
                    <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">person</i>
                        <p class="hidden-lg hidden-md">Profile</p>
                    </a>
                </li>
                <li>
                    <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">settings</i>
                        <p class="hidden-lg hidden-md">Settings</p>
                    </a>
                </li>
                <li class="separator hidden-lg hidden-md"></li>
            </ul>
        </div>
    </div>
</nav>
