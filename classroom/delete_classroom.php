<?php
include '../connection.php';

$classroomId = $_POST['classroom_id'];

$sqlQuery = "DELETE FROM classroom_table WHERE classroom_id = '$classroomId'";

$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery)
{
    echo json_encode(array("success"=>true));
}
else
{
    echo json_encode(array("success"=>false));
}

