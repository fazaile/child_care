<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header('Content-Type: application/json; charset=utf-8');

$serverHost = "localhost";
$user = "root";
$password = "";
$database = "child_care";

$connectNow = new mysqli($serverHost, $user, $password, $database);