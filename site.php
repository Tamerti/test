<?php
require_once("SampQueryAPI.php"); 

$query = new SampQueryAPI('104.234.180.39', '7777'); 
$serverInfo = $query->getInfo(); 
$serverRules = $query->getRules(); 

echo('{"query":[{"number":3,"name":"[LS:RP] Los Santos Roleplay","ip":"104.234.180.39","port":7777,"online":'. $serverInfo['players'] .',"maxplayers":150,"password":false}]}');
