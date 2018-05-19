<?php
session_start();
require 'headtag.php';
$activeuser6 = "active";
require 'menu.php';
include_once './dbconnect.php';
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
        <div class="row">

            <div class="col-md-6">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Send Dummy Requests</h3>
                    </div>

                    <div class="box-body"> 

                        <div class="col-md-12">
                            <form class="form-horizontal" action="Admin_Dummy_request.php" method="POST">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">LightID</label>

                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="lightId" id="inputEmail3" placeholder="Light ID">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Status Number</label>

                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="statNum" id="inputPassword3" placeholder="Status Number">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Requests</label>

                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" name="reqNum" id="inputPassword3" placeholder="Number of requests">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Latitude</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="lat" value="6.921248" id="inputPassword3" placeholder="Password">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Longitude</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="log" value="79.8917815" id="inputPassword3" placeholder="Password">
                                        </div>
                                    </div>


                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" name="btn-send" class="btn btn-info pull-right">Send</button>
                                </div>
                                <!-- /.box-footer -->
                            </form>
                            <?php
                            if (isset($_POST['btn-send'])) {
                                $ligtID = $_POST['lightId'];
                                $status = $_POST['statNum'];
                                $count = $_POST['reqNum'];
                                $lat = $_POST['lat'];
                                $log = $_POST['log'];

                                echo $ligtID . " " . $status . " " . $lat . " " . $log ."</br>"; 

                                $url = 'http://18.191.39.15:2000/api/addBulkTrafficData';

                                $params = "trafficLightId=$ligtID&routeId=$status&userlatitude=$lat&userlongitude=$log&count=$count";

                                $ch = curl_init($url);

                                curl_setopt($ch, CURLOPT_POST, 1);
                                curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                $result = curl_exec($ch);

                                curl_close($ch);

                                echo $result . "<br>";

//                                $response = json_decode($result);
//                                
//                                echo $response->Id . "<br>";
//                                echo $response->state . "<br>";
//                                echo $response->time . "<br>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Status Types</h3>
                    </div>

                    <div class="box-body"> 

                        <div class="row">
                            <div class="col-md-6">
                                <img src="images/Traffic/0.jpg" width="90%" alt=""/>
                                <p>Status No : 0</p>
                            </div>
                            <div class="col-md-6">
                                <img src="images/Traffic/2.jpg" width="90%" alt=""/>
                                <p>Status No : 1</p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="images/Traffic/3.jpg" width="90%" alt=""/>
                                <p>Status No : 2</p>
                            </div>
                            <div class="col-md-6">
                                <img src="images/Traffic/1.jpg" width="90%" alt=""/>
                                <p>Status No : 3</p>
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