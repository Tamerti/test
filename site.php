<?php
$str = file_get_contents('https://samp-stats.ru/web/api-18794.js');
$str = substr($str, strpos($str, "players"));
$str = substr($str, 0, strpos($str, ",maxplayers:"));
$str = preg_replace('/[^0-9 ,]/', '', $str);
if(!$str) $str = 0;
echo '{"query":[{"number":1,"name":"LSRP-VN","ip":"104.234.180.39","port":7777,"online":' .$str .',"maxplayers":150,"password":false}]}';
