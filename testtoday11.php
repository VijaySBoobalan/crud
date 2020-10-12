<?php 
	$foo = 10;
	$bar = unset($foo);
	echo $bar;


	$ch = curl_init('https://coderbyte.com/api/challenges/json/age-counting');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	$data = curl_exec($ch);
  	curl_close($ch);

  	print_r(json_decode($data)['data']);
  	// foreach(json_decode($data, true)['data'] as $key=>$age){
  	//   print_r($age);
  	// }

?>

Input: ["12:15PM-02:00PM","09:00AM-10:00AM","10:30AM-12:00PM"]
Output: 00:30
Input: ["12:15PM-02:00PM","09:00AM-12:11PM","02:02PM-04:00PM"]
Output: 00:04