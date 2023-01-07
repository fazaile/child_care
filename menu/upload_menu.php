<?php
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'message' => 'invalid_method',
    ]);

    return;
}
$classroomId = $_POST['classroom_id'];
$menuName = $_POST['menu_name'];
$menuDate = $_POST['menu_date'];
$menuStart = $_POST['menu_start_time'];
$menuEnd = $_POST['menu_end_time'];

$sqlQuery = "INSERT INTO menu_table 
    SET classroom_id = '$classroomId', 
    menu_name = '$menuName', 
    menu_date='$menuDate', 
    menu_start_time='$menuStart', 
    menu_end_time='$menuEnd'";

$resultOfQuery = $connectNow->query($sqlQuery);

if ($resultOfQuery) {
    echo json_encode(array("success" => true));
} else {
    echo json_encode(array("success" => false));
}
