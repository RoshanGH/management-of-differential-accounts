<?php
$data = array(
    'client_id' => 'vk5pjqq*******asdyzb7xl',
    'client_secret' => 'lutiiwp*******64q7f4xal542a3',
    'account_id' => '17usbmi7',  //非必填参数，无此参数时可获取client所对应的主账号信息
);
$data = http_build_query($data);
$url = "http://api.teegon.com/v1/account/get?".$data;
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
string(309) "{
  "result": {
    "id": "a8b***e7e-nee***tx",           //子账号主键id
    "account_id": "ne***tx",            //子账号唯一标识
    "domain_id": "a8***7e",             //主账号唯一标识
    "mobile": "",                        //手机号
    "created": 1474616521,               //创建时间
    "bank_create_time": 1474616522,      //绑卡时间
    "alias": "ne***tx",                 //昵称
    "cust_acct_id": "888******94924881",   //银行对应的子账号id
    "clearing_status": 0,                //清分状态  0 开启 1 关闭
    "withdrawal_status": 0               //清分状态  0 开启 1 关闭
  }
}"
 */
