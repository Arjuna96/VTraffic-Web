<?php
session_start();
require 'headtag.php';
$activeuser1 = "active";
$activeuser5 = "active";
require 'menu.php';
?>

<script type="text/javascript">
    function Data1() {
        try {
            var locationID = 1;

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("traffic_data").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "Events.Vtraffic/Event_check_traffic_data.php?locationId="+locationID+"&stateNo=1", true);
            xmlhttp.send();
        } catch (err) {
            document.getElementById("traffic_data").innerHTML = "";
        }
    }
    
    function Data2() {
        try {
            var locationID = 1;

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("traffic_data").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "Events.Vtraffic/Event_check_traffic_data.php?locationId=" + locationID + "&stateNo=2", true);
            xmlhttp.send();
        } catch (err) {
            document.getElementById("traffic_data").innerHTML = "";
        }
    }
    
    function Data3() {
        try {
            var locationID = 1;

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("traffic_data").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "Events.Vtraffic/Event_check_traffic_data.php?locationId=" + locationID + "&stateNo=3", true);
            xmlhttp.send();
        } catch (err) {
            document.getElementById("traffic_data").innerHTML = "";
        }
    }
    
    function Data4() {
        try {
            var locationID = 1;

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("traffic_data").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "Events.Vtraffic/Event_check_traffic_data.php?locationId=" + locationID + "&stateNo=4", true);
            xmlhttp.send();
        } catch (err) {
            document.getElementById("traffic_data").innerHTML = "";
        }
    }
    
    function Data5() {
        try {
            var locationID = 1;

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("traffic_data").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "Events.Vtraffic/Event_check_traffic_data.php?locationId=" + locationID + "&stateNo=5", true);
            xmlhttp.send();
        } catch (err) {
            document.getElementById("traffic_data").innerHTML = "";
        }
    }
    
    function Data6() {
        try {
            var locationID = 1;

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("traffic_data").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "Events.Vtraffic/Event_check_traffic_data.php?locationId=" + locationID + "&stateNo=6", true);
            xmlhttp.send();
        } catch (err) {
            document.getElementById("traffic_data").innerHTML = "";
        }
    }

function populateData() {
    setTimeout(Data1, 2000);
    setTimeout(Data2, 4000);
    setTimeout(Data3, 6000);
    setTimeout(Data4, 8000);
    setTimeout(Data5, 10000);
    setTimeout(Data6, 12000);
}

setInterval(function () {
                populateData() // this will run after every 5 seconds
            }, 12000);
  
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

    <!-- Main content -->
    <section id="traffic_data" class="content">      

    </section>
</div>

<?php
require 'footer.php';
?>