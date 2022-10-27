<?php

function curl_get(string $full_path): string
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $full_path);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $respone = curl_exec($ch);
    curl_close($ch);
    return $respone;
}

$curl = curl_get('http://localhost/php_curl/json_person.php');
print_r($curl);
