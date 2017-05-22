<?php
$data = array(
    'client_id' => 'lkjkhj*********ps5cuevwa',
    'client_secret' => '12354213fmuv******tigui3dl6o',
    'account_id' => 'main',
    'journal_type'  => '',
    'out_order_no'  => '1149******5625',
    'from_time'  => '',
    'to_lime'  => '',
    'offset'  => '',
    'limit'  => '',
);
$data = http_build_query($data);
$url = "http://api.teegon.com/v1/account/journal/list?".$data;
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

/**
返回值：
string(341) "{
    "result": {
    "Items": null,   //交易记录
    "Count": 0       //交易的总条数
  }
}"
 */
