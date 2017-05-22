<?php
$data = array(
    'client_id' => 'vk5pjqqwlpoefh4asdyzb7xl',
    'client_secret' => 'lutiiwptjs475jiqc664q7f4xal542a3',
    'account_id' => 'main',
    'from_time' => '',
    'to_time' => '',
    'offset' => '',
    'limit' => '',
);
$data = http_build_query($data);
$url = "http://api.teegon.com/v1/withdrawal/list?".$data;
$ch = curl_init();
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_FRESH_CONNECT,1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
//curl_setopt($ch,CURLOPT_FORBID_REUSE,1);
//curl_setopt($ch,CURLOPT_TIMEOUT,1);
//curl_setopt($ch,CURLOPT_POST,1);
//curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
$re = curl_exec($ch);
curl_close($ch);
var_dump($re);

/*
返回值：
string(55) "{
  "result": {
    "Items": null,     // 各条分账信息
    "Count": 0         // 总条数
  }
}"
 */
