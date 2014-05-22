<?php
$v = 'a:17:{s:11:"bank_billno";s:15:"201405163644724";s:9:"bank_type";s:4:"2022";s:8:"discount";s:1:"0";s:8:"fee_type";s:1:"1";s:13:"input_charset";s:5:"UTF-8";s:9:"notify_id";s:96:"HJ5QhcGicz-8RPj72k5vTObEj79gNdkDw2Wx0oVFV9GbsSfedvYCNeh-0W1Y7pH_6hBvZLQ3Z3mn0_k1s9R1K393r2ByUPWx";s:12:"out_trade_no";s:1:"8";s:7:"partner";s:10:"1218952101";s:11:"product_fee";s:1:"1";s:4:"sign";s:32:"946A215888A401850BC669CAE514CFCD";s:9:"sign_type";s:3:"MD5";s:8:"time_end";s:14:"20140516140241";s:9:"total_fee";s:1:"1";s:10:"trade_mode";s:1:"1";s:11:"trade_state";s:1:"0";s:14:"transaction_id";s:28:"1218952101201405163353951359";s:13:"transport_fee";s:1:"0";}';
$v1 = 'a:16:{s:9:"bank_type";s:4:"2022";s:8:"discount";s:1:"0";s:8:"fee_type";s:1:"1";s:13:"input_charset";s:5:"UTF-8";s:9:"notify_id";s:96:"HJ5QhcGicz-8RPj72k5vTObEj79gNdkDw2Wx0oVFV9GbsSfedvYCNe7oagE-xOrDWjFwRh9W1kv9bURRvaknvdWMuXW_khVw";s:12:"out_trade_no";s:1:"8";s:7:"partner";s:10:"1218952101";s:11:"product_fee";s:1:"1";s:4:"sign";s:32:"1A6A8B5EF75DB2796F1A9B2958774766";s:9:"sign_type";s:3:"MD5";s:8:"time_end";s:14:"20140516140241";s:9:"total_fee";s:1:"1";s:10:"trade_mode";s:1:"1";s:11:"trade_state";s:1:"0";s:14:"transaction_id";s:28:"1218952101201405163353951359";s:13:"transport_fee";s:1:"0";}';
$data = unserialize($v);
print_r($data);
$data = unserialize($v1);
var_dump($data);
//$a = unserialize('s:352:"<xml><OpenId><![CDATA[odEAYuD-3gV1JEXM9zO7KkyhoYds]]></OpenId>
//<AppId><![CDATA[wx5e07541dfbc5ee59]]></AppId>
//<IsSubscribe>1</IsSubscribe>
//<TimeStamp>1400222602</TimeStamp>
//<NonceStr><![CDATA[YJtaVyb4DceXRWjM]]></NonceStr>
//<AppSignature><![CDATA[3d30d8bde7fb9fa6b37fdef0e5bbd1775690aaa2]]></AppSignature>
//<SignMethod><![CDATA[sha1]]></SignMethod>
//</xml>";');
//var_dump($a);
//echo $a;
$xmlStr = '<xml><OpenId><![CDATA[odEAYuD-3gV1JEXM9zO7KkyhoYds]]></OpenId>
<AppId><![CDATA[wx5e07541dfbc5ee59]]></AppId>
<IsSubscribe>1</IsSubscribe>
<TimeStamp>1400222602</TimeStamp>
<NonceStr><![CDATA[YJtaVyb4DceXRWjM]]></NonceStr>
<AppSignature><![CDATA[3d30d8bde7fb9fa6b37fdef0e5bbd1775690aaa2]]></AppSignature>
<SignMethod><![CDATA[sha1]]></SignMethod>
</xml>';

$xml = simplexml_load_string($xmlStr);

//var_dump($xml);
echo $xml->OpenId;