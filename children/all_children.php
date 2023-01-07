<?php
include '../connection.php';

$sqlQuery="SELECT * FROM children_table ORDER BY children_id  DESC";

$resultOfQuery = $connectNow->query($sqlQuery);

if ($resultOfQuery) {
    $childrenRecord = array();
    while ($rowFound = $resultOfQuery->fetch_assoc()) {
        $childrenRecord[] = $rowFound;
    }

    echo json_encode(
        array(
            "success" => true,
            "childrenData" => $childrenRecord,
        )
    );
} else {
    echo json_encode(array("success" => false));
}