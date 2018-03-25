<?php
require './dbconnect.php';

date_default_timezone_set("Asia/Colombo");
$timeNow = date("d-m-Y h:i:s a");
$timePast = date("d-m-Y h:i:s a", time() - 120);
//echo $timeNow;
//echo $timePast;

$sql = mysqli_query($con,"SELECT SUM(TL1),"
        . "SUM(TL2),"
        . "SUM(TL3),"
        . "SUM(TL4),"
        . "SUM(TL5),"
        . "SUM(TL6),"
        . "SUM(TL7),"
        . "SUM(TL8)"
        . "  FROM tbl_trafficdata" );

$data = mysqli_fetch_array($sql);

$TL1 = $data[0];
echo $TL1 .'<br>';
$TL2 = $data[1];
echo $TL2 .'<br>';
$TL3 = $data[2];
echo $TL3 .'<br>';
$TL4 = $data[3];
echo $TL4 .'<br>';
$TL5 = $data[4];
echo $TL5 .'<br>';
$TL6 = $data[5];
echo $TL6 .'<br>';
$TL7 = $data[6];
echo $TL7 .'<br>';
$TL8 = $data[7];
echo $TL8 .'<br>';

if($TL1 and $TL2 and $TL3 and $TL4 and $TL5 and $TL6 and $TL7 and $TL8 <5 ){
   // file_get_contents("https://httpbin.org/get?val=2");
}

