<?php
session_start();
require 'headtag.php';
$activeuser2 = "active";
require 'menu.php';
?>

<div class="content-wrapper">
    <section class="content">
        <form class="form-horizontal" role="form" action="Admin_location_create.php" method="post" enctype="multipart/form-data" >
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Location Creation</h3>
                        </div>

                        <div class="box-body">

                            <div class="col-md-12">

                                <div class="form-group">
                                    <label>Location ID</label>
                                    <input type="number" class="form-control" name="locID" placeholder="Location ID" required>
                                </div>

                                <div class="form-group">
                                    <label>Location Name</label>
                                    <input type="text" class="form-control" name="locName" placeholder="Location Name" required>
                                </div>

                                <div class="form-group">
                                    <label>Junction Type </label>
                                    <select class="form-control" name="locType">
                                        <option value="3">3 way intersection</option>
                                        <option value="4">4 way intersection</option>                                    
                                    </select>
                                </div>

                                <div class="form-group">
                                    <div id="map"></div>
                                    <script>
                                        function initMap() {
                                            // Create a map object and specify the DOM element for display.
                                            var map = new google.maps.Map(document.getElementById('map'), {
                                                center: {lat: 7.386165385339516, lng: 80.73094894744497},
                                                zoom: 8
                                            });

                                            google.maps.event.addListener(map, 'click', function (event) {
                                                document.getElementById('maps_latitude').value = event.latLng.lat()
                                                document.getElementById('maps_longitude').value = event.latLng.lng()
                                            });

                                        }
                                    </script>
                                </div>

                                <div class="form-group">
                                    <label>Map Latitude( Click on the map )</label>
                                    <input type="text" class="form-control" name="maps_latitude" id="maps_latitude" placeholder="Location Name" required>
                                </div>

                                <div class="form-group">
                                    <label>Map Longitude( Click on the map )</label>
                                    <input type="text" class="form-control" name="maps_longitude" id="maps_longitude" placeholder="Location Name" required>
                                </div>

                                <div class="box-footer">
                                    <button type="submit" name="btn-submit" class="btn btn- pull-right">Create Location &nbsp;<i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                </div>

                            </div>
                        </div>
                        <?php
                        if (isset($_POST['btn-submit'])) {
                            include_once './dbconnect.php';
                            $locationID = mysqli_real_escape_string($con, $_POST['locID']); // filtter out SQL injections
                            $locationName = mysqli_real_escape_string($con, $_POST['locName']); // filtter out SQL injections
                            $mapLat = mysqli_real_escape_string($con, $_POST['maps_latitude']); // filtter out SQL injections
                            $mapLong = mysqli_real_escape_string($con, $_POST['maps_longitude']); // filtter out SQL injections        
                            $locType = $_POST['locType'];

                            //Data inserting 
                            $url = 'http://18.191.39.15:2000/api/addTrafficLight';

                            $params = "locationID=$locationID&Latitude=$mapLat&Longitude=$mapLong&locationName=$locationName&junctionType=$locType";

                            $ch = curl_init($url);

                            curl_setopt($ch, CURLOPT_POST, 1);
                            curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            $result = curl_exec($ch);

                            curl_close($ch);

                            $response = json_decode($result);

                            $finalResult = $response->Status;

                            if ($finalResult == "Success") {
                                echo "<div class='alert alert-success'>
                                 <a class='close' data-dismiss='alert'>×</a>
                                 <strong>Location Created !</strong>
                                 </div> ";
                            } else {
                                die("<div class='alert alert-warning'>
                                 <a class='close' data-dismiss='alert'>×</a>
                                 <strong>Something Error ! </strong>" . mysqli_error()) . "
                                 </div> ";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </form>
    </section>
</div>
<?php
require 'footer.php';
?>
