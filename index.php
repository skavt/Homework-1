<?php

require_once 'request.php';
require_once 'Response.php';

$data = "mgoni gagebuli davaleba";

$getResponse = getResponse($data, 200, 'application/json');

echo $getResponse;

?>