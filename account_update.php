<?php
//此接口现在只能修改  昵称  alias
$url = "http://api.teegon.com/v1/account/update";
$data = array(
    'client_id' => 'vk5pjqqw******dyzb7xl',
    'client_secret' => 'lutiiwp*******64q7f4xal542a3',
    'account_id' => 'oa***k2x',
    'alias' => '凡刚大宝宝',  //     非必填参数
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
string(20) "{
  "result": "ok"          // 是否更新成功
}"   */
