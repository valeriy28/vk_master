﻿<?php

$access_token_request = array(

	);

$request_par = array(
	'q' => 'MCT',
	'auto_complete' => 1,
	'lyrics' => 0,
	'performer_only' => 1,
	'sort' => 2,
	'search_own' => 0,
	'offset' => 0,
	'count' => 123,
	'access_token' => '7e7c997a8a7c1ca95d7ff7eb5a052fb5617db88d0f664d27c14cfef631c4791ca29942535a606e7467dcd'
	);

$url = "https://api.vk.com/method/audio.search?" . http_build_query($request_par);

$result = file_get_contents($url);

print_r(json_decode($result, true));
//'7e7c997a8a7c1ca95d7ff7eb5a052fb5617db88d0f664d27c14cfef631c4791ca29942535a606e7467dcd'
//76864711bbcd4a57bd0db0874cae7cd90ee01762bb91430ab84c91ef9fadce7e09d5cef931f7184859c2e