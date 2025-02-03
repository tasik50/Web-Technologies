<?php
include '../control/showuser_control.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../css/showuser.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee shift </title>
    
</head>
<body>
    <header class="page-heading">
        <h1>Employee Shift Information</h1>
    </header>

    <a href="../control/session_logout.php">Logout</a>
    <a href="../view/edituser.php">Update</a>
    <a href="../view/deleteuser.php">Delete</a>
    <a href="../view/searchuser.php">Search</a>

    <table border="1">
        <thead>
            <tr>
            <th>ID</th>
                    <th>UserID</th>
                    <th>From Date</th>
                    <th>To Date</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Shift Time</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($shiftdata)) {
                foreach ($shiftdata as $row) {
                    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['userid']}</td>
                        <td>{$row['fromdate']}</td>
                        <td>{$row['todate']}</td>
                        <td>{$row['start_time']}</td>
                        <td>{$row['end_time']}</td>
                        <td>{$row['shift_time']}</td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No payroll records found.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
