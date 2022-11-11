<?php

namespace src\services;

require_once 'vendor/autoload.php';

class ApiConfig
{
  public function instance($apiUrl = '', $method = '', $data = '')
  {

    $baseUrl = "http://localhost:8080/api";

    $curl = curl_init($baseUrl . $apiUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, strtoupper($method));
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    $result = curl_exec($curl);
    curl_close($curl);
    $response = json_decode($result);
    return $response;
  }
}
