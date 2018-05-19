<?php

require '../dbconnect.php'; // Database connection
date_default_timezone_set("Asia/Colombo"); // Set time equals to local time
$locationID = $_GET['vtlocation']; // Get location ID from URL
$lightID = $_GET['vtlight']; // Get Lihght ID fron URL
$lightName = 'TL'.$lightID;
$time = date("d-m-Y h:i:s a");

// Insert Data into the table_trafficdata
$sql = "INSERT INTO tbl_trafficdata(locationID,".$lightName.", time) VALUES ('$locationID',1,'$time')";

//Exception handling
$retval = mysqli_query($con,$sql);
if (!$retval) {
        die("<div class='alert alert-warning'>
             <a class='close' data-dismiss='alert'>×</a>
             <strong>Something Error ! </strong>" . mysqli_error($retval)) . "
             </div> ";
    } 
mysqli_close($con);