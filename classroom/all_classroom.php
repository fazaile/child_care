<?php
include '../connection.php';


$sqlQuery="SELECT * FROM classroom_table ORDER BY classroom_id  DESC";

$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery->num_rows > 0)
{
    $classroomRecord = array();
    while($rowFound = $resultOfQuery->fetch_assoc())
    {
        $classroomRecord[] = $rowFound;
    }

    echo json_encode(
        array(
            "success"=>true,
            "classroomData"=>$classroomRecord,
        )
    );
}
else 
{
    echo json_encode(array("success"=>false));
}