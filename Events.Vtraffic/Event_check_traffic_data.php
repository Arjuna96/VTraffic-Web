<?php

$getLocationId = $_GET['locationId'];
$getStateID = $_GET['stateNo'];
$stateNo = (int)$getStateID;
include '../DAL.Vtraffic/DAL_tbl_trafficdata.php';
$resp = DAL_tbl_trafficdata::run_traffic_lights($getLocationId,$stateNo);
echo $resp;


