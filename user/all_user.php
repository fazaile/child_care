<?php
include '../connection.php';

$sqlQuery = "SELECT user_id, user_name, user_email FROM users_table ORDER BY user_id  DESC";

$resultOfQuery = $connectNow->query($sqlQuery);

if ($resultOfQuery) {
    $userRecord = array();
    while ($rowFound = $resultOfQuery->fetch_assoc()) {
        $userRecord[] = $rowFound;
    }

    echo json_encode(
        array(
            "success" => true,
            "userData" => $userRecord,
        )
    );
} else {
    echo json_encode(array("success" => false));
}
