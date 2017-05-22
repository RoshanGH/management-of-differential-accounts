<?php
$url = "http://api.teegon.com/v1/account/card_list";
$data = array(
    'client_id' => 'vk5pjqqw*********yzb7xl',
    'client_secret' => 'lutiiwp*******64q7f4xal542a3',
//    'domain_id' => '6c02f0a7',
    'account_id' => 's178vzh6',
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
print_r($re);

/**
返回值：
{
  "result": [
      {
      "id": "1232212tcn",
      "account_id": "txcvw4sx2-edasd23vzh6",
      "cust_acct_id": "881231231234980",
      "name": "张三",
      "identity_type": 1,
      "identity_card": "43052123123406013765",
      "bank_type": 2,
      "bank_name": "中国工商银行",
      "sub_bank_name": "中国工商银行股份有限公司东莞厚街支行",
      "sub_bank_code": "102602002677",
      "super_bank_code": "",
      "card_no": "62122612312312312394956",
      "mobile": "13123123123605",
      "bind_time": 1484143988,
      "verify_status": 2,
      "verify_front_log_no": "1701111231235672",
      "notify_url": "",
      "notify_status": 0,
      "created": 0,
      "bind_type": "u",
      "from": "1233sx2",
      "update_time": 1484143932
    }
    ]
}
**/
