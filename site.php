<?php
require_once("SampQueryAPI.php"); 

$query = new SampQueryAPI('46.174.51.153', '7777'); 
$serverInfo = $query->getInfo(); 
$serverRules = $query->getRules(); 

echo('{"query":[{"number":1,"name":"Cladman","ip":"46.174.51.153","port":7777,"online":'. $serverInfo['players'] .',"maxplayers":300,"password":false}]}');
