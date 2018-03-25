<body class="hold-transition skin-blue sidebar-mini" onload="timer()>
    
<!-- Pre loding animation -->
<div class="se-pre-con"></div>
<!-- Ends -->
    
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>VTraffic</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>V</b>Traffic</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">0</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 0 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
<!--                                        <li> start message 
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user1.jpg" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>-->
                                        <!-- end message -->
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Notifications</a></li>
                            </ul>
                        </li>

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="dist/img/org.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <p>
                                        System User
                                        <small>Member since 2018</small>
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="logout.php"><i class="fa fa-sign-out"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>System User</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- User menu:-->
                <ul class="sidebar-menu" style="<?php echo $usermenu ?>">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="<?php echo $activeuser1 ?>">
                        <a href="A"><i class="fa fa-dashboard"></i> <span>Map Overview</span></a>
                    </li>
                    <li class="<?php echo $activeuser2 ?>">
                        <a href=""><i class="fa fa-paper-plane-o"></i> <span>Locations</span></a>
                    </li>   
                    <li class="<?php echo $activeuser2 ?>">
                        <a href=""><i class="fa fa-cogs"></i> <span>Controlling</span></a>
                    </li>
                </ul>
                
               
            </section>
            <!-- /.sidebar -->
        </aside>