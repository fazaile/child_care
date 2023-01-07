<?php
include '../connection.php';

$id = $_POST['activity_id'];

$sqlQuery = "DELETE FROM activity_table WHERE activity_id = '$id'";

$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery)
{
    echo json_encode(array("success"=>true));
}
else
{
    echo json_encode(array("success"=>false));
}

