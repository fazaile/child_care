<?php
include '../connection.php';

$child_id = $_POST['children_id'];

$sqlQuery = "DELETE FROM children_table WHERE children_id = '$child_id'";

$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery)
{
    echo json_encode(array("success"=>true));
}
else
{
    echo json_encode(array("success"=>false));
}

