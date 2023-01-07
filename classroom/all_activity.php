<?php
include '../connection.php';


$sqlQuery="SELECT * FROM activity_table ORDER BY activity_id  DESC";

$resultOfQuery = $connectNow->query($sqlQuery);

if ($resultOfQuery) {
    $activityRecord = array();
    while ($rowFound = $resultOfQuery->fetch_assoc()) {
        $activityRecord[] = $rowFound;
    }

    echo json_encode(
        array(
            "success" => true,
            "activityData" => $activityRecord,
        )
    );
} else {
    echo json_encode(array("success" => false));
}