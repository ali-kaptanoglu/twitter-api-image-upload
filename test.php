<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "uu/vendor/autoload.php";
# API DO TWITTER
use Abraham\TwitterOAuth\TwitterOAuth;

$consumer_key = '3rJOl**********';
$consumer_secret = '5jPoQ5kQv*******';
$accesstoken = '1290**********';
$accesstokensecret = 'mcKl2WB********';
 



# bağlantı
$connection = new TwitterOAuth($consumer_key,$consumer_secret, $accesstoken, $accesstokensecret);

#===============================================================================
$media_payload = [
    'media' => __DIR__ . '/next.jpg',
];
echo $media_payload['media'];
$response = $connection->upload('media/upload', $media_payload);
var_dump($response);



$status_payload = [
    'status' => 'Hello World ' . time(),
    'media_ids' => $response->media_id_string,
];
$response = $connection->post('statuses/update', $status_payload);
