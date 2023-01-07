<?php
include '../connection.php';


$teacherId = $_POST['teacher_id'];


$sqlQuery="SELECT * FROM `classroom_table` WHERE teacher_id ='$teacherId'";

$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery->num_rows > 0)
{
    $classRoomRecord = array();
    while($rowFound = $resultOfQuery->fetch_assoc())
    {
        $classRoomRecord[] = $rowFound;
    }

    echo json_encode(
        array(
            "success"=>true,
            "teacherClassroomData"=>$classRoomRecord,
        )
    );
}
else 
{
    echo json_encode(array("success"=>false));
}