<?php
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'message' => 'invalid_method',
    ]);

    return;
}

$childrenId = $_POST['children_id']; 
$childrenName = $_POST['name']; 
$childrenAge = $_POST['age'];
$childrenImage = $_POST['image']; 

$sqlQuery = "UPDATE children_table SET name = '$childrenName', age = '$childrenAge', image='$childrenImage' WHERE children_id = '$childrenId'";
$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery)
{
    echo json_encode(array("success"=>true));
}
else
{
    echo json_encode(array("success"=>false));
}
