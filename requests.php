<?php
//GET功能
$username = "39c557ab-70ea-4a02-82cc-2c46d01f5360-bluemix";
$password = "d9e39186721710d06be3bdcfb9927c300626ec378b1a134adcf687febef39ae4";

//Send request to cloudant
$curl = curl_init();
curl_setopt_array($curl, [
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_URL => "https://39c557ab-70ea-4a02-82cc-2c46d01f5360-bluemix.cloudantnosqldb.appdomain.cloud/vocabulary/fc09aa324a8f8ed25d6b67c49c3bb778",
	CURLOPT_HTTPHEADER => array("Content-Type: application/json"),
	CURLOPT_USERPWD => $username . ":" . $password
]);

//Retrieve response
$resp = curl_exec($curl);
$objstr = json_decode($resp, true);

//Random number generator
$object = new stdClass();
$numArr = pushRandomNumberToArray(0, 3141);

foreach($numArr as $key=>$index){
	$objstrkey = strval($key);
	$key = strval($objstr[$objstrkey]["word"]);
	$object->$key = $objstr[$objstrkey]["ch"];
}

$result = json_encode($object, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);

echo $result;
curl_close($curl);


//functions
function pushRandomNumberToArray($min, $max){
	$numArr = array();
	for($i = 0; $i < 10; $i++){
		$num = rand($min, $max);
		while(array_key_exists($num, $numArr)){
			$num = rand($min, $max);
		}
		if(!array_key_exists($num, $numArr)){
			$numArr[$num] = $i;
		} 
	}
	return $numArr;
}

































?>