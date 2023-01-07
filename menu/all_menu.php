<?php
include '../connection.php';

$sqlQuery = "SELECT * FROM menu_table ORDER BY menu_id  DESC";

$resultOfQuery = $connectNow->query($sqlQuery);

if ($resultOfQuery) {
    $menuRecord = array();
    while ($rowFound = $resultOfQuery->fetch_assoc()) {
        $menuRecord[] = $rowFound;
    }

    echo json_encode(
        array(
            "success" => true,
            "menuData" => $menuRecord,
        )
    );
} else {
    echo json_encode(array("success" => false));
}
