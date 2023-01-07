<?php
include '../connection.php';

$sqlQuery = "SELECT * FROM skill_table ORDER BY skill_id  DESC";

$resultOfQuery = $connectNow->query($sqlQuery);

if ($resultOfQuery) {
    $skillRecord = array();
    while ($rowFound = $resultOfQuery->fetch_assoc()) {
        $skillRecord[] = $rowFound;
    }

    echo json_encode(
        array(
            "success" => true,
            "skillData" => $skillRecord,
        )
    );
} else {
    echo json_encode(array("success" => false));
}
