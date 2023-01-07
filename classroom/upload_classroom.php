<?php
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'message' => 'invalid_method',
    ]);

    return;
}
$classroomName = $_POST['classroom_name'];
$classroomCapacity = $_POST['classroom_capacity'];

$sqlQuery = "INSERT INTO classroom_table 
    SET classroom_name = '$classroomName',
    classroom_capacity = '$classroomCapacity'";

$resultOfQuery = $connectNow->query($sqlQuery);

if ($resultOfQuery) {
    echo json_encode(array("success" => true));
} else {
    echo json_encode(array("success" => false));
}
