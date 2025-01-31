<?php
include '../control/deleteuser_control.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Delete User</h1>
    <form action="../control/deleteuser_control.php" method="post">
        <table>
        <tr>
        <td><label for="ID">ID:</label></td>
        <td><input type="hidden" name="id" value="<?php echo $id;?>"></tr></td>

       <tr><td> <label for="userid">$Userid:</label> <?php echo $userid;?></tr></td>

       <tr><td><label for="fromdate">fromDate:</label> <?php echo $fromdate;?></tr></td>

       <tr><td> <label for="todate">todate:</label> <?php echo $todate;?></tr></td>
       <tr><td><label for="start_time">startTime:</label> <?php echo $start_time;?></tr></td>

       <tr><td><label for="end_time">endTime:</label> <?php echo $end_time;?></tr></td>

       <tr><td> <label for="shift_time">shiftTime:</label> <?php echo $shift_time;?></tr></td>

       
</table>
    <input type="submit" value="Delete" name = "delete">
    </form>
</body>
</html>
