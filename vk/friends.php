<?php
include_once "const.php";

//groups_get_members.php



$fields = [
'uid',
'first_name',
'last_name',
'nickname',
'sex', 
'bdate (birthdate)', 
'city', 
'country', 
'timezone', 
'photo', 
'photo_medium', 
'photo_big', 
'domain', 
'has_mobile', 
'rate', 
'contacts',
'education',
];


$data =[
    'uid' => 160640085,
    'name_case' => 'nom',
    'order' => 'hints',
    'count' => 10,
    'fields' => implode(',', $fields),
    'access_token' => ACCESS_TOKEN,
];

//'https://api.vk.com/method/
$url = METHOD_URI . 'friends.get?' .
    http_build_query($data);

$result = file_get_contents($url);

echo $result;