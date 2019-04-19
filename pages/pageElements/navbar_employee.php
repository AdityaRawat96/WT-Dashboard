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
        <div class="collapse navbar-collapse" onclick="myFunction();" style="cursor:pointer;">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">notifications</i>
                         <?php
                            include('../php/connection.php');
                            $uname=$_SESSION['Username'];
                            $sql=mysqli_query($con,"select * from users where username='$uname'");
                            $row=mysqli_fetch_array($sql);
                            $id=$row['id'];
                            $result = mysqli_query($con,"SELECT COUNT(*) FROM leave_employee WHERE status!= '0' and seen_status='notseen' and id='$id'");
                            $row = mysqli_fetch_array($result);

                            $total = $row[0];
                            if($total!=0)
                            {
                                ?>
                                <span class="notification">
                                    <?php  echo  $total; ?>
                                </span><?php
                            }
                       
                           
                               
                             ?>
                           
                        <p class="hidden-lg hidden-md">
                            Notifications
                            <b class="caret"></b>
                        </p>
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
                        <i class="material-icons">rotate_left</i>
                        <p class="hidden-lg hidden-md">Log Out</p>
                    </a>
                </li>
                <li class="separator hidden-lg hidden-md"></li>
            </ul>
        </div>
    </div>
</nav>

