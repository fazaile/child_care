<?php
include '../connection.php';

$id = $_GET['user_id'];

$sqlQuery="SELECT * FROM children_table WHERE user_id = '$id' ORDER BY children_id  DESC";

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