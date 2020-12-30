<?php
include './FCM.php';

header('Content-Type: application/json');

$title = "OLI";
$data = [
    'type' => 'text',
    'value' => ''
];
$_POST['message']='Test from Oli';
$_POST['fcm_id']='';
echo FCMPush($title, $_POST['message'], $_POST['fcm_id'], $data);