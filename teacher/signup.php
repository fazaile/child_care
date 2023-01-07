<?php
include '../connection.php';

//POST = send/save data to mysql db
//GET = retrieve/read data from mysql db

$teacherName = $_POST['teacher_name'];
$teacherEmail = $_POST['teacher_email'];
$teacherPassword = ($_POST['teacher_password']); 

$sqlQuery = "INSERT INTO teacher_table SET teacher_name = '$teacherName', teacher_email = '$teacherEmail', teacher_password = '$teacherPassword'";

$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery)
{
    echo json_encode(array("success"=>true));
}
else
{
    echo json_encode(array("success"=>false));
}

