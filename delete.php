<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Employee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>
    <h1>Employee Deleted</h1>
    <?php
        require_once("connect.php");
        $id = strip_tags($_REQUEST['id']);

        $sql = "DELETE FROM employee WHERE empid='" . $id . "';";

        if ($conn->query($sql) === false) {
            trigger_error("Wrong SQL: " . $sql . 
                    "Error: " . $conn->error, E_USER_ERROR);
        } else {
            $affected_rows = $conn->affected_rows;
            echo('<br />' . $sql);
            echo('<br />Affected rows: ' . $affected_rows);
            echo('<br />User ' . $id . ' deleted from database.');
        }
        echo('<br />Return to <a href="index.php">Main Page</a>');
    ?>
</body>
</html>
