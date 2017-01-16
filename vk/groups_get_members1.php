<?php
include_once "const.php";

//groups_get_members.php



$fields = [
'pid',
'title',
'latitude',
'longitude',
'type',
'country',
'city',
'address',
];


$data =[
    'uid' => 160640085,
    'extended' => 1,
    'filter' => 'groups',
    'count' => 30,
    'fields' => implode(',', $fields),
    'access_token' => ACCESS_TOKEN,
];

//'https://api.vk.com/method/
$url = METHOD_URI . 'groups.get?' .
    http_build_query($data);

$result = file_get_contents($url);

echo $result;