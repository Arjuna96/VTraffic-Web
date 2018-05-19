<?php
session_start();
require 'headtag.php';
$activeuser4 = "active";
require 'menu.php';
include_once './dbconnect.php';

$upload = mysqli_num_rows(mysqli_query($con, "SELECT * FROM tbl_vtusers WHERE isActive=1"));
$active = (int) $upload;

$upload3 = mysqli_num_rows(mysqli_query($con, "SELECT * FROM tbl_vtusers WHERE isActive=0"));
$disable = (int) $upload3;
?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><?php echo basename($_SERVER['PHP_SELF'], '.php'); ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <div class="info-box bg-green">
                    <span class="info-box-icon"><i class="fa fa-user" aria-hidden="true"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Active</span>
                        <span class="info-box-number"><?php echo $active ?></span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="progress-description">

                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-xs-6">
                <div class="info-box bg-red">
                    <span class="info-box-icon"><i class="fa fa-user-times" aria-hidden="true"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Inactive</span>
                        <span class="info-box-number"><?php echo $disable ?></span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="progress-description">

                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">User List</h3>
                    </div>

                    <div class="box-body"> 
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Mobile</th>       
                                    <th>User Type</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <<th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Mobile</th>       
                                    <th>User Type</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                $url = 'http://18.191.39.15:2000/api/getUser';

                                $params = "username=*";

                                $ch = curl_init($url);

                                curl_setopt($ch, CURLOPT_POST, 1);
                                curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                $result = curl_exec($ch);

                                curl_close($ch);

                                $dec = json_decode($result);

                                for ($idx = 0; $idx < count($dec); $idx++) {
                                    $obj = (Array) $dec[$idx];
                                    ?>
                                    <tr>
                                        <td><?php echo $obj["firstName"] . " " . $obj["lastName"]; ?></td>
                                        <td><?php echo $obj["email"]; ?></td>
                                        <td><?php echo $obj["password"]; ?></td>  
                                        <td><?php echo $obj["mobile"]; ?></td>
                                        <td><?php echo $obj["userRole"]; ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>                 
    </section>
</div>

<?php
require 'footer.php';
?>