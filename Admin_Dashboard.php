<?php
session_start();
require 'headtag.php';
$activeuser1 = "active";
require 'menu.php';

//Default Values
$num1 = 5000;
$num2 = 10000;
$num3 = 15000;
$num4 = 20000;
$num5 = 25000;
$num6 = 30000;
?>

<script type="text/javascript">
    function populateData() {
        try {
            var locationID = 1; // Traffic light location ID

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("traffic_data").innerHTML = this.responseText; // Dispaly response in Traffic_data DIV
                }
            };
            xmlhttp.open("GET", "Events.Vtraffic/Event_check_traffic_data.php?locationId=" + locationID + "&stateNo=1", true); // Traffic State No 1
            xmlhttp.send();
        } catch (err) {
            document.getElementById("traffic_data").innerHTML = "";
        }
    }

    setInterval(function () {
        populateData(); // this will run after every 5 seconds
    }, 5000);
    
    setTimeout(function() {
        document.getElementById("myDiv").style.display="none";
    }, 6000);  // 5 seconds

</script>

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

    <section class="content">      
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Select Traffic Area</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label></label>
                                <select class="form-control" id="myDropDown" name="drpcamp" onchange="this.form.submit()">
                                    <option>Select Location</option>
                                    <?php
                                    require 'dbconnect.php';
                                    $sql = "SELECT * FROM tbl_vtlocations WHERE active='1' "; // Get all active locations
                                    $result = mysqli_query($con, $sql) or die(mysqli_error());
                                    while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <option value="<?php echo $row ['locationID']; ?>"><?php echo $row ['locationName'] ?></option> 
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="traffic_data" class="row">            
                <div id = "myDiv">
                    <center>
                        <img id = "myImage" src = "images/cloudsync.gif" width="10%"><br>
                    Please wait, Synchronizing Data...
                    </center>
                </div><br>
            </div>
        </div>

    </section>
</div>

<?php
require 'footer.php';
?>