<?php

include '../connection.php';

$teacherEmail = $_POST['teacher_email'];

$sqlQuery = "SELECT * FROM teacher_table WHERE teacher_email='$teacherEmail'";

$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery->num_rows > 0) 
{
    //num rows length == 1 --- email already in someone else use 
    echo json_encode(array("emailFound"=>true));
}
else
{
    //num rows length == 0 --- email is NOT already in someone else use
    // a user will allowed to signUp Successfully
    echo json_encode(array("emailFound"=>false));
}


//  01   |    John      |   john@gmail.com   |   WIOQEUSABHDAS
//  02   |  John Parker |   john22@gmail.com   |  eqweqWIOQEUSABHDAS

