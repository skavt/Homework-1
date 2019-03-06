<?php

require_once 'Request.php';
require_once 'Response.php';

$data = "mgoni gagebuli davaleba";

$getResponse = getResponse($data, 200, 'application/json');

echo $getResponse . "\n" . "\n";

$getRequest = getHeaders($_SERVER);

print_r($getRequest);

?>
