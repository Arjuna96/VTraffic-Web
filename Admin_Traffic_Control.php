<?php
session_start();
require 'headtag.php';
$activeuser5 = "active";
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
            <div class="col-lg-6 col-xs-12">
                <div class="info-box bg-green">
                    <span class="info-box-icon"><i class="fa fa-car" aria-hidden="true"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Current Traffic State</span>
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
            <div class="col-lg-6 col-xs-12">
                <div class="info-box bg-red-active">
                    <span class="info-box-icon"><i class="fa fa-ambulance" aria-hidden="true"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Emergency / VVIP Mode</span>
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

        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Live Traffic</h3>
                    </div>

                    <div class="box-body"> 
                        <div id="map2"></div>
                        <script>
                            function initMap() {
                                // Create a map object and specify the DOM element for display.
                                var map = new google.maps.Map(document.getElementById('map2'), {
                                    center: {lat: 6.921248, lng: 79.8917815},
                                    zoom: 12
                                });

                                var trafficLayer = new google.maps.TrafficLayer();
                                trafficLayer.setMap(map);

                            }
                        </script>

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Sttings</h3>
                    </div>

                    <div class="box-body"> 

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>VTraffic Controller</label>
                                <div class="switch"><label>OFF<input type="checkbox" value="1" name="status" checked><span class="lever"></span>ON</label></div>
                            </div>
                            <div class="form-group">
                                <label>Emergency mode</label>
                                <div class="switch"><label>OFF<input type="checkbox" value="1" name="status" checked><span class="lever"></span>ON</label></div>
                            </div>
                            <div class="form-group">
                                <label>Yellow Light mode</label>
                                <div class="switch"><label>OFF<input type="checkbox" value="1" name="status" checked><span class="lever"></span>ON</label></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>                 
    </section>
</div>

<?php
require 'footer.php';
?>