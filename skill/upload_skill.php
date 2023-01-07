<?php
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'message' => 'invalid_method',
    ]);

    return;
}

$cid = $_POST['children_id'];
$cmn = $_POST['communication'];
$rdg = $_POST['reading'];
$ctg = $_POST['counting'];
$art = $_POST['art'];

$sqlQuery = "INSERT INTO skill_table 
    SET children_id = '$cid',
    communication = '$cmn',
    reading = '$rdg',
    counting = '$ctg',
    art = '$art'";

$resultOfQuery = $connectNow->query($sqlQuery);

if ($resultOfQuery) {
    echo json_encode(array("success" => true));
} else {
    echo json_encode(array("success" => false));
}
