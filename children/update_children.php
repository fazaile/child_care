<?php
include '../connection.php';

$childrenName = $_POST['name']; 
$childrenAge = $_POST['age'];
$childrenImage = $_POST['image']; 

$sqlQuery = "UPDATE children_table SET name = '$childrenName', age = '$childrenAge', image='$childrenImage'";

$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery)
{
    echo json_encode(array("success"=>true));
}
else
{
    echo json_encode(array("success"=>false));
}
