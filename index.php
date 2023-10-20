<?php


$json = file_get_contents('php://input');
$json = json_decode($json, true);

if( !empty($json['id']) ) {
    session_id($json['id']);
}

session_start();

if( !empty($json['data']) ) {
    $_SESSION['data'] = $json['data'];
}

// return json
header('Content-Type: application/json');
echo json_encode($_SESSION['data']);

