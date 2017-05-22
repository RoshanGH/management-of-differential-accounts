<?php
$data = array(
    'client_id' => 'vk5pjq******4asdyzb7xl',
    'client_secret' => 'lutiiwp*******64q7f4xal542a3',
    'account_id'  => 'main',
);
$data = http_build_query($data);
$url = "http://api.teegon.com/v1/account/status?".$data;
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
    "all_amount": 0,         //所有资金
    "bank_stauts": 0,        //绑卡状态
    "can_use_amount": 0,     //可提现金额
    "today_amount": null,    //当日资金
    "today_order": "0"       //当日订单数
  }
}"
 */
