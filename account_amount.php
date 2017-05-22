<?php
$data = array(
    'client_id' => 'asdasda*********5cuevwa',
    'client_secret' => 'qweqweqw*********gtigui3dl6o',
    'account_id' => 'rgvk2i2j',
);
$data = http_build_query($data);
$url = "http://api.teegon.com/v1/account/amount?".$data;
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
