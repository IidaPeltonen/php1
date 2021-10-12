<?php
header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
print 'Hello from PHP server';

header('Content-Type: application/json');

$data = array (
    'message' => 'Hello from PHP server',
    'origin' => $_SERVER['HTTP_ORIGIN']
);
$json = json_encode($data,JSON_PRETTY_PRINT);
print $json;
