<?php
require_once "app/init.php";

$api = new ApiController();
$response = $api->listen();
echo $response->render();