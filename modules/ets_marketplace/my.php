<?php

phpinfo();
die();

define("PROJECT_ID","29544632ee3d4b09ac9ed183c80a8112");
$url = "https://mainnet.infura.io/v3/".PROJECT_ID;
$headers = "Content-Type: application/json";
$data = '{"jsonrpc": "2.0", "id": 1, "method": "eth_blockNumber", "params": []}';
#echo "<pre>";var_export($data);echo "</pre>";exit();

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLINFO_HEADER_OUT, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$data = curl_exec($ch);
if (!$data) {
    echo ("Ошибка cURL: ".curl_errno($ch)." — ".curl_error($ch));
    echo"<pre>";print_r(curl_getinfo($ch));echo"</pre>"; # вывод curl запроса
}
curl_close($ch);
$contents = $data;
$rslt = json_decode($contents,true);
if (is_array($rslt)) {
	echo "<pre>";var_export($rslt);echo "</pre>";
}

/*
curl -X POST \
-H "Content-Type: application/json" \
--data '{"jsonrpc": "2.0", "id": 1, "method": "eth_blockNumber", "params": []}' \
"https://mainnet.infura.io/v3/29544632ee3d4b09ac9ed183c80a8112"
*/