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
    function Data1() {
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

    function Data2() {
        try {
            var locationID = 1; // Traffic light location ID

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("traffic_data").innerHTML = this.responseText; // Dispaly response in Traffic_data DIV
                }
            };
            xmlhttp.open("GET", "Events.Vtraffic/Event_check_traffic_data.php?locationId=" + locationID + "&stateNo=2", true); // Traffic State No 2
            xmlhttp.send();
        } catch (err) {
            document.getElementById("traffic_data").innerHTML = "";
        }
    }

    function Data3() {
        try {
            var locationID = 1; // Traffic light location ID

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("traffic_data").innerHTML = this.responseText; // Dispaly response in Traffic_data DIV
                }
            };
            xmlhttp.open("GET", "Events.Vtraffic/Event_check_traffic_data.php?locationId=" + locationID + "&stateNo=3", true); // Traffic State No 3
            xmlhttp.send(); 
        } catch (err) {
            document.getElementById("traffic_data").innerHTML = "";
        }
    }

    function Data4() {
        try {
            var locationID = 1; // Traffic light location ID

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("traffic_data").innerHTML = this.responseText; // Dispaly response in Traffic_data DIV
                }
            };
            xmlhttp.open("GET", "Events.Vtraffic/Event_check_traffic_data.php?locationId=" + locationID + "&stateNo=4", true); // Traffic State No 4
            xmlhttp.send(); 
        } catch (err) {
            document.getElementById("traffic_data").innerHTML = "";
        }
    }

    function Data5() {
        try {
            var locationID = 1; // Traffic light location ID

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("traffic_data").innerHTML = this.responseText; // Dispaly response in Traffic_data DIV
                }
            };
            xmlhttp.open("GET", "Events.Vtraffic/Event_check_traffic_data.php?locationId=" + locationID + "&stateNo=5", true); // Traffic State No 5
            xmlhttp.send();
        } catch (err) {
            document.getElementById("traffic_data").innerHTML = "";
        }
    }

    function Data6() {
        try {
            var locationID = 1; // Traffic light location ID

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("traffic_data").innerHTML = this.responseText;  // Dispaly response in Traffic_data DIV
                }
            };
            xmlhttp.open("GET", "Events.Vtraffic/Event_check_traffic_data.php?locationId=" + locationID + "&stateNo=6", true); // Traffic State No 6
            xmlhttp.send();
        } catch (err) {
            document.getElementById("traffic_data").innerHTML = "";
        }
    }

    function populateData() {
        setTimeout(Data1, <?php echo $num1; ?>);
        setTimeout(Data2, <?php echo $num2; ?>);
        setTimeout(Data3, <?php echo $num3; ?>);
        setTimeout(Data4, <?php echo $num4; ?>);
        setTimeout(Data5, <?php echo $num5; ?>);
        setTimeout(Data6, <?php echo $num6; ?>);
    }

    setInterval(function () {
        populateData() // this will run after every 5 seconds
    }, <?php echo $num6; ?>);

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

    <section class="content" style=" margin-bottom: -150px; ">      
        <div class="box-body">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Select Location</label>
                    <select class="form-control" id="myDropDown" name="drpcamp" onchange="this.form.submit()">
                        <option>Select Location</option>
                        <?php
                        require 'dbconnect.php';
                        $sql = "SELECT * FROM tbl_vtlocations WHERE active='1' "; // Get all active locations
                        $result = mysqli_query($con,$sql) or die(mysqli_error());
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
    </section>

    <!-- Main content -->
    <section id="traffic_data" class="content">      

    </section>
</div>

<?php
require 'footer.php';
?>