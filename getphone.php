<?php
set_time_limit(120);
error_reporting(0);
include('library/Requests.php');

$token =   $_GET["token"]; //#token được gửi lên từ tool
//codefb.xyz/API/sim/emhieu_4a16d0908ef1a5a0a65687d656054b9b/Tele
//$urlhost = "http://codefb.xyz/API/sim/".$token."/Tele";
Requests::register_autoloader();
//$response = Requests::get($urlhost);
//$dataouts = $response->body;
//$dataout = json_decode($dataouts, true);
// echo json_encode($dataout);

//$request_id =$dataout["id"];

for ($i = 0; $i < 180; $i++) {
	//codefb.xyz/API/code/emhieu_4a16d0908ef1a5a0a65687d656054b9b/[SimID]/Tele/[AccountID]
    $urlhost2 = "http://codefb.xyz/API/sim/".$token."/Tele";
    $response2 = Requests::get($urlhost2);
    $dataouts2 = $response2->body;
    $dataout2 = json_decode($dataouts2, true);
    $phone = $dataout2["SimPhoneNo"];
	$request_id =$dataout["SimID"];
    if (strlen($phone) > 5){
        break;
    }
    sleep(1000);

}
$data["phone"] = $phone;
$data["request_id"] = $request_id;
echo json_encode($data);
// echo $urlhost2;
?>