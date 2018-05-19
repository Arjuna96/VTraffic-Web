<?php
$getStateID = $_GET['stateNo']; // Get State no for traffic light
$stateNo = (int)$getStateID;
include '../DAL.Vtraffic/DAL_tbl_trafficdata.php';
$resp = DAL_tbl_trafficdata::run_traffic_lights($stateNo); // Get traffic data according to the parameters
echo $resp; // Show response


