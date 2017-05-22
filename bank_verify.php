<?php
$url = "http://api.teegon.com/v1/bank/verify";
$data = array(
    'client_id' => 'vk5pjqq*******dyzb7xl',
    'client_secret' => 'lutiiwp*******64q7f4xal542a3',
    'account_id' => 'oahjmk2x',
    'amount' => 0.14,
);
$data = http_build_query($data);
$ch = curl_init();
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_FRESH_CONNECT,1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_FORBID_REUSE,1);
curl_setopt($ch,CURLOPT_TIMEOUT,1);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
$re = curl_exec($ch);
curl_close($ch);
var_dump($re);

/*
返回值：
string(90) "{
  "result": "https://api.teegon.com/app/bank/bind_card?token=wyxhd4z*******r5tcxww6"
}"
 */
