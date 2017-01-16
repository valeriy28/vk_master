<?php
include_once "const.php";

//groups_get_members.php



/*$fields = [
'pid',
'title',
'latitude',
'longitude',
'type',
'country',
'city',
'address',
];*/


$data =[
	'group_id' => 'elitturnir',
    'uid' => 160640085,
    'extended' => 1,
    'access_token' => ACCESS_TOKEN,
];

//'https://api.vk.com/method/
$url = METHOD_URI . 'groups.isMember?' .
    http_build_query($data);

$result = file_get_contents($url);

echo $result;