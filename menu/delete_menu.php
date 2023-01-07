<?php
include '../connection.php';

$id = $_POST['menu_id'];

$sqlQuery = "DELETE FROM menu_table WHERE menu_id = '$id'";

$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery)
{
    echo json_encode(array("success"=>true));
}
else
{
    echo json_encode(array("success"=>false));
}

