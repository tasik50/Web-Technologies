<?php
include '../control/edituser_control.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>

<body>
    <h1>Edit User</h1>
    <form action="../control/edituser_control.php" method="post" enctype="multipart/form-data">
    

        <table>
            <tr>
                <td><label for="id">ID:</label></td>
                <td><input type="text" id="ID" name="id" value="<?php echo $id; ?>" readonly></td>
            </tr>

            <tr>
                <td><label for="userid">$Userid:</label></td>
                <td><input type="text" id="userid" name="userid" value="<?php echo $Userid; ?>">
                </td></tr>
            

                <tr>
                <td><label for="fromdate">fromdate:</label></td>
                <td><input type="date" id="fromdate" name="fromdate" value="<?php echo $fromdate; ?>">
                </td></tr>
            

            
                <tr>
                <td><label for="todate">Date of Birth:</label></td>
                <td><input type="date" id="todate" name="todate" value="<?php echo $todate; ?>">
                </td></tr>

                <tr>
                <td><label for="start_time">Start Time:</label></td>
                <td>
                <input type="time" id="start_time" name="start_time" value="<?php echo htmlspecialchars($start_time); ?>">
                </td>
                  </tr>

            <tr>
                <td><label for="end_time">Start Time:</label></td>
                <td>
                <input type="time" id="end_time" name="end_time" value="<?php echo htmlspecialchars($end_time); ?>">
                </td>
                  </tr>
 
            <tr>
               <td><label for="shift_time">Start Time:</label></td>
               <td>
               <input type="time" id="shift_time" name="shift_time" value="<?php echo htmlspecialchars($shift_time); ?>">
               </td>
                 </tr>
 

        </table>

        <input type="submit" value="update" name="update">
    </form>
    <a href="showuser.php">Back to User List</a>
</body>

</html>