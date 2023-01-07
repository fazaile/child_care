<?php
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'message' => 'invalid_method',
    ]);

    return;
}

// Children Parameter
$childrenName = $_POST['name'];
$childrenAge = $_POST['age'];
$childrenImage = $_POST['image'];

// Foreign Key Parameter
$user_id = !empty($_POST['user_id']) ? $_POST['user_id'] : 0;
$classroom_id = !empty($_POST['classroom_id']) ? $_POST['classroom_id'] : 0;

$sqlQuery = "INSERT INTO children_table 
    SET name = '$childrenName', age = '$childrenAge', image='$childrenImage',
    user_id = '$user_id', classroom_id = '$classroom_id'";

$resultOfQuery = $connectNow->query($sqlQuery);

if ($resultOfQuery) {
    echo json_encode(array("success" => true));
} else {
    echo json_encode(array("success" => false));
}
