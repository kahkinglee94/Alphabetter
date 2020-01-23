<?php

if(isset($_GET['data'])){
    $query = implode(":", json_decode($_GET['data']));
} else {
    //set exception error
}

$username = "apikey";
$password = "BoAAk2gymn8NYG2YPThpTD-RbEpiomHy6WuNMKKD3pQB"; //api key
$environmentID = "884451ce-9a92-43be-98d2-e2c1c92783e4";
$collectionsID = "4a721998-0c34-4b4d-baba-678a756c9ffd";
$url = "https://api.us-south.discovery.watson.cloud.ibm.com/instances/d3a28e8a-6a79-4449-9d1c-cb4fc38b2305/v1/environments/{$environmentID}/collections/{$collectionsID}/query?version=2019-04-30&natural_language_query={$query}&count=3";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

curl_setopt($ch, CURLOPT_USERPWD, $username . ':' . $password);

$result = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}

echo $result;
curl_close($ch);