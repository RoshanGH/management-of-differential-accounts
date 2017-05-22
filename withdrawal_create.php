<?php
//$url = "http://api.test.teegon.ishopex.cn/v1/withdrawal/create";
$url = "http://api.teegon.com/v1/withdrawal/create";
$data = array(
    'client_id' => 'vk5pjqqwlpoefh4asdyzb7xl',
    'client_secret' => 'lutiiwptjs475jiqc664q7f4xal542a3',
    'account_id' => 'main',
    'amount'    => 0.01,
    'card_id'   => '80555vy9',
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

/**
返回值：
 string(289) "{
  "result": {
      "transaction_no":8236487236482,    //提现编号
  }
}"    */
