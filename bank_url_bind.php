<?php
$url = "http://api.teegon.com/v1/bank/url/bind";
$data = array(
    'client_id' => 'vk5pjq*******4asdyzb7xl',
    'client_secret' => 'lutiiwp*******64q7f4xal542a3',
    'account_id' => '17usbmi7',
    'notify_url' => 'www.baidu.com',
 //   'bind_type' => 'u',  // u b    非必填参数 默认 u
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
  "result": "https://api.teegon.com/app/bank/bind_card?token=d7kfivh*******psxf5cmdifj"     //绑卡地址
}"
 */
