<?php
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'message' => 'invalid_method',
    ]);

    return;
}
$classroomId = $_POST['classroom_id'];
$activityImage = $_POST['activity_image'];
$activityDescription = $_POST['activity_description'];
$activityDate = $_POST['activity_date'];
$activityStart = $_POST['activity_start'];
$activityEnd = $_POST['activity_end'];

$sqlQuery = "INSERT INTO activity_table 
    SET activity_image = '$activityImage',
    classroom_id = '$classroomId', 
    activity_description = '$activityDescription', 
    activity_date='$activityDate', 
    activity_start='$activityStart', 
    activity_end='$activityEnd'";

$resultOfQuery = $connectNow->query($sqlQuery);

if ($resultOfQuery) {
    echo json_encode(array("success" => true));
} else {
    echo json_encode(array("success" => false));
}
