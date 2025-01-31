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
            $fromdate = $data["fromdate"];
            $todate = $data["todate"];
            $start_time = $data["start_time"];
            $end_time = $data["end_time"];
            $shift_time = $data["shift_time"];
        }
    } else {
        echo "No Data Available";
    }

    $conobj->close();
 } //else {
//     echo "Invalid ID provided.";
// }


if (isset($_POST["update"])) {
    $id = $_POST["id"];
    $userid = $_POST["userid"];
    $fromdate = $_POST["fromdate"];
    $todate = $_POST["todate"];
    $start_time = $_POST["start_time"];
    $end_time = $_POST["end_time"];
    $shift_time = $_POST["shift_time"];
    

    

    $mydb = new myDB();
    $conobj = $mydb->openCon();
    $update = $mydb->updateDataUser($id, $userid , $fromdate ,$todate, $start_time ,$end_time,$shift_time ,$conobj, "shift");

    if ($update === 1) {
        echo "Data updated successfully";
        header("Location:../view/showuser.php");
    } else {
        echo "Error updating data: " . $update;
    }
}

