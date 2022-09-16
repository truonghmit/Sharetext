<?php
set_time_limit(120);
error_reporting(0);
include('library/Requests.php');

$token = $_GET["token"]; #token được gửi lên từ tool
$request_id = $_GET["request_id"]; #request_id được gửi lên từ tool

//$urlhost = "http://103.142.139.33:1337/V1/RequestCheck?token=".$token."&request_id=".$request_id;
$urlhost = "http://codefb.xyz/API/code/".$token."/"&request_id"/Tele/30"
Requests::register_autoloader();
$response = Requests::get($urlhost);
$dataouts = $response->body;
$dataout = json_decode($dataouts, true);

$data["sms"] = $dataout["OtpContent"];
$data["otp"] = $dataout["OtpContent"];
echo json_encode($data);
?>
