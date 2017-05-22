<?php
$url = "http://api.teegon.com/v1/account/create";
$data = array(
    'client_id' => 'dfgsdf*********tqdtu4',
    'client_secret' => '123dasda*********n4tmbw3mux',
    'name' => '凡刚宝宝',//  非必填参数
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
    "id": "cvb***e-q***mje",   //子账号主键id
    "account_id": "cvb***e",    //子账号唯一标识
    "domain_id": "cvb***e",     //主账号唯一标识
    "mobile": "",                //手机号
    "created": 1474617608,       //创建时间
    "bank_create_time": 0,
    "alias": "凡刚宝宝",         //昵称
    "cust_acct_id": "",
    "clearing_status": 0,        //清分状态
    "withdrawal_status": 0
  }
}"    */
