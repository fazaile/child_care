<?php
include '../connection.php';

$id = $_POST['skill_id'];

$sqlQuery = "DELETE FROM skill_table WHERE skill_id = '$id'";

$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery)
{
    echo json_encode(array("success"=>true));
}
else
{
    echo json_encode(array("success"=>false));
}

