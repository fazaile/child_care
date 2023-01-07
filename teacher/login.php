<?php
include '../connection.php';

//POST = send/save data to mysql db
//GET = retrieve/read data from mysql db

$adminEmail = $_POST['teacher_email'];
$adminPassword = ($_POST['teacher_password']); 

$sqlQuery = "SELECT * FROM teacher_table WHERE teacher_email = '$adminEmail' AND teacher_password = '$adminPassword'";

$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery->num_rows > 0) //allow admin to login 
{
    $teacherRecord = array();
    while($rowFound = $resultOfQuery->fetch_assoc())
    {
        $teacherRecord[] = $rowFound;
    }

    echo json_encode(
        array(
            "success"=>true,
            "teacherData"=>$teacherRecord[0],
        )
    );
}
else //Do NOT allow user to login 
{
    echo json_encode(array("success"=>false));
}
