<?php

include '../model/db.php';

// Validate and sanitize the input
if (isset($_GET["id"])) {
    $id = intval($_GET["id"]); // Convert the id to an integer for safety

    $mydb = new myDB();
    $conobj = $mydb->openCon();
    $results = $mydb->getUserByID("shift", $conobj, $id);

    if ($results && $results->num_rows > 0) {
        while ($data = $results->fetch_assoc()) {
            $id = $data["id"];
            $Userid = $data["userid"];
            $fromdate = $data["fromDate"];
            $todate = $data["toDate"];
            $start_time = $data["startTime"];
            $end_time = $data["endTime"];
            $shift_time = $data["shiftTime"];

            
        }
    } else {
        echo "No Data Available";
    }

    $conobj->close();
} //else {
    //echo "Invalid ID provided.";
//}
if (isset($_POST["delete"])) {
    $id = $_POST["id"];

    $mydb = new myDB();
    $conobj = $mydb->openCon();
    $update = $mydb->deleteData($id, "shift", $conobj);
    if ($update === 1) {
        echo "Data delete successfully";
        header("Location:../view/showuser.php");
    } else {
        echo "Error deleteing data: " . $update;
    }
}
