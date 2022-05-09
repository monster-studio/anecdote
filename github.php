<?php

$_POST = json_decode(file_get_contents("php://input"), true);
include_once 'config.php';

echo json_encode($result);