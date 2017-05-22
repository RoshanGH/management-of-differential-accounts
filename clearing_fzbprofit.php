<?php
//进行分账的主账号一定要有延时分账的权限
// 参与分账的金额一定要与订单金额一致
$url = "http://api.teegon.com/v1/clearing/fzbprofit";
$a = array(
    0 =>
    array (
        'account_id' => '17u*******i7',
        'amount' =>0.01,     // amount
        'fee' =>'',         //大于  amount * 0.01   小于 amount 就好
        'comment' => '',
    ),
//    1 =>
//     array (
//         'account_id' => 'gzcjia7l',
//         'amount' => 0.01,
//         'fee' => 0,
//         'comment' => '',
//     ),
//    2 =>
//    array (
//        'account_id' => 'xpkkn22e',
//        'amount' => '0.08',
//        'fee' => '0',
//        'comment' => '',
//    ),
);
$b =json_encode($a);
$data = array(
    'client_id' => 'vk5pjqqwl*******yzb7xl',
    'client_secret' => 'lutiiwp*******64q7f4xal542a3',
    'charge_id'    =>'870a29t2vfk2iguo790ntfai',   //charge_id
    'profit_content' => $b,
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
}"
*/
