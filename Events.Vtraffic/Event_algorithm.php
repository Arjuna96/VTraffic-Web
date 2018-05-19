<?php

$url = 'http://18.191.39.15:2000/api/getCurrentState';
$params = "trafficLightId=1";

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

curl_close($ch);

$response = json_decode($result);

$status = $response->Current_state;

$url2 = 'http://18.191.39.15:2000/api/requestTime';
$params2 = "trafficLightId=1&stateId=$status";
$ch2 = curl_init($url2);
curl_setopt($ch2, CURLOPT_POST, 1);
curl_setopt($ch2, CURLOPT_POSTFIELDS, $params2);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
$result2 = curl_exec($ch2);
curl_close($ch2);

$time = $result2;

?>

