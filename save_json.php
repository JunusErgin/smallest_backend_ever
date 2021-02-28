<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");


$json = file_get_contents('php://input');
if (strlen($json) > 10000) {
    die('Payload is too long (Max. 10000 characters).');
}
$file = 'database.json';
file_put_contents($file, $json);
