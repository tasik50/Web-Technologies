<?php
session_start();
if (!isset($_SESSION["userid"])) {
    header("location:../view/registration.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="../css/styles.css">
<script src="../js/myjs.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 id="print">WELCOME</h1>

    <?php
        // Echo session variables that were set on previous page
        echo "User ID " . $_SESSION["userid"] . ".<br>";
        //echo "Password " . $_SESSION["Password"] . "<br>";
    ?>
    <a href="showuser.php" class="button-update">Show List</a><br><br>

    <a href="../control/session_logout.php" class="button-logout">Logout</a><br><br>
</body>

</html>