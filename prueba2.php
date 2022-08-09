<?php


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.ultramsg.com/instance11907/messages/chat",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "token=2dybk8z264762brn&to=+573016984868&body=La API de WhatsApp en UltraMsg.com funciona bien&priority=1&referenceId=",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/x-www-form-urlencoded"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}



exit;
define('CHAT_TOKEN', 'hyg1a0vao95bq3ij');
define('CHAT_URL', 'instance261035');

function sendMessage($to,$msg){
	$data = [
		'phone' => $to,
		'body' => $msg,
	];
	$json = json_encode($data);
	//$url = CHAT_URL.'sendMessage?token='.CHAT_TOKEN;
	$url = 'https://api.chat-api.com/'.CHAT_URL.'/sendMessage?token='.CHAT_TOKEN;
	$options = stream_context_create(['http' => [
			'method' => 'POST',
			'header' => 'Content-type: application/json',
			'content' => $json
		]
	]);

	$result = file_get_contents($url, false, $options);
	if($result) return json_decode($result);

	return false;
}

$msg = "Esta es una prueba desde la app";
$phone = '573016984868';
$result = sendMessage($phone,$msg);
	if($result !== false){
		if($result->sent == 1){
			echo "Mensaje enviado!<br>";
			echo $result->message;
		}else{
			echo $result->message;
		}
	}else{
		var_dump($result);
	}

?>