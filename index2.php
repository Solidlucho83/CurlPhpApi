<?php
require_once ('app/classes/autoload.php');

header('Content-Type: application/json; charset=utf8');
$curl = new Curl('https://pokeapi.co/api/v2/');
$curl->init();
$curl->setOptions(CURLOPT_FOLLOWLOCATION ,true);
$curl->setOptions(CURLOPT_MAXREDIRS , 10);
$curl->setOptions(CURLOPT_TIMEOUT , 0);
$curl->setOptions(CURLOPT_FOLLOWLOCATION , true);
$curl->setOptions(CURLOPT_HTTP_VERSION , CURL_HTTP_VERSION_1_1);
/*$curl->setOptions(CURLOPT_HTTPHEADER , array(
  'Authorization: Bearer aquí',
  'Content-Type: application/json');*/
$curl->execute();
$curl->close();

return json_encode($curl);
