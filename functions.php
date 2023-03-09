<?php
// $fname = $_POST['FName'];
// $lname = $_POST['LName'];
// $fullphone = $_POST['Phone']; // \D [^0-9]
// $email = $_POST['Email'];

// $fname = 'test123';
// $lname = 'test123';
// $fullphone = '79045681123'; // \D [^0-9]
// $email = 'test32145678lead@gmail.com';
extract(array_map("htmlspecialchars", $_POST), EXTR_OVERWRITE);

// $url = "https://marketing.affboat.com/api/v3/integration?api_token=mVec2YGDK6LU9PiU4r8uBjGCP46nLHIjtVXy5h3rP583yeGvfowvx9A3TEVO";

if (isset($_SERVER['HTTP_CLIENT_IP'])) {
	$ip = $_SERVER['HTTP_CLIENT_IP'];
} else {
	$ip = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
}

$domain = $_SERVER['SERVER_NAME'];

// $apiData = array(
// 	'link_id' => 3234,
// 	'fname' => $fname,
// 	'lname' => $lname,
// 	'email' => $email,
// 	'fullphone' => $fullphone,
// 	'source' => "BitIQ",
// 	'ip' => $ip,
// 	'domain' => $domain,
// 	'utm_source' => isset($utm_source) ? $utm_source : "",
// 	'utm_medium' => isset($utm_medium) ? $utm_medium : "",
// 	'utm_campaign' => isset($utm_campaign) ? $utm_campaign : "",
// 	'utm_term' => isset($utm_term) ? $utm_term : "",
// 	'utm_content' => isset($utm_content) ? $utm_content : "",
// 	'click_id' => isset($click_id) ? $click_id : "",
// 	'promo' => isset($promo) ? $promo : "",
// 	'trading_platform' => isset($tradeserv) ? $tradeserv : "WebTrade",
// );


// header('Content-Type: application/json');
//01

// $ch = curl_init();

// $options = array(
// 	CURLOPT_URL => 'https://marketing.affboat.com/api/v3/integration?api_token=mVec2YGDK6LU9PiU4r8uBjGCP46nLHIjtVXy5h3rP583yeGvfowvx9A3TEVO',
// 	CURLOPT_POST => 1,
// 	CURLOPT_POSTFIELDS => $apiData,
// 	CURLOPT_RETURNTRANSFER => 1
// );

// curl_setopt_array($ch, $options);

// $result = curl_exec($ch);

// curl_close($ch);

// print_r($result);



//03
// $header = {
// 	'Content-Type': 'application/json',
// 	'cache-control': 'no-cache'
// };



// try {
// 	$sh = curl_init('https://api.alphatech.proftit.com/api/user/v3/tokens');
// 	curl_setopt($sh, CURLOPT_POST, 1);
// 	curl_setopt($sh, CURLOPT_POSTFIELDS, http_build_query($apiDataTest, '', '&'));
// 	curl_setopt($sh, CURLOPT_RETURNTRANSFER, true);
// 	curl_setopt($sh, CURLOPT_SSL_VERIFYPEER, false);
// 	$result = curl_exec($sh);
// 	curl_close($sh);
// } catch (Exception $e) {
// 	echo json_encode(['success' => false, 'message' => $e->getMessage()]);
// 	die;
// }

// if ($response->success) {
// 	echo json_encode([
// 		'success' => true,
// 		'autologin' => $response->autologin,
// 		'password' => ($response->password),
// 		'login' => ($apiData['email'])
// 	]);
// 	die;
// } else {
// 	echo json_encode([
// 		'success' => false,
// 		'message' => 'Server error!',
// 		'debug' => json_encode($response)

// 	]);
// 	die;
// }

//03



// $ch = curl_init();

// $options = array(
// 	CURLOPT_URL => 'https://api.alphatech.proftit.com/api/user/v3/tokens',
// 	CURLOPT_POST => 1,
// 	CURLOPT_POSTFIELDS => $apiDataTest,
// 	CURLOPT_RETURNTRANSFER => 1,
// 	CURLOPT_HEADER => ('Content-Type: application/json')


// );

// curl_setopt_array($ch, $options);

// $result = curl_exec($ch);

// curl_close($ch);

// print_r($result);

// $apiDataTest = array(
// 	"username" => "MetaLive",
// 	"password" => "HvoGeZ0574aL"
// );

// $url = 'https://api.alphatech.proftit.com/api/user/v3/tokens';
// $header = array();
// $header[] = 'Accept: application/json';
// $header[] = 'Content-Type: application/json';
// $header[] = 'cache-control: no-cache';
// // $header[] = 'Authorization: Bearer '.$token;

// $crl = curl_init();
// curl_setopt($crl, CURLOPT_URL, $url);
// curl_setopt($crl, CURLOPT_HTTPHEADER, $header);
// curl_setopt($crl, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($crl, CURLOPT_POST, true);
// // curl_setopt($crl, CURLOPT_POSTFIELDS, '{"username": "Faust","password": "Qwert"}');
// curl_setopt($crl, CURLOPT_POSTFIELDS, '{"username": "MetaLive","password": "HvoGeZ0574aL"}');


// $rest = curl_exec($crl);
// var_dump($rest);

// curl_close($crl);
