 <?php
    require_once("connect.php");
    $id = strip_tags($_REQUEST['id']);
    $last = strip_tags($_REQUEST['last']);
    $first= strip_tags($_REQUEST['first']);
    $deptId = strip_tags($_REQUEST['deptid']);
    $sql= "UPDATE employee SET " . 
            "lastname = '" . $last . "', " . 
            "firstname = '" . $first . "', " .
            "deptid = '" . $deptId . "' " . 
            "WHERE empid = '" . $id . "';";
    if ($conn->query($sql) == false) 
    {
        $errmsg = 'Wrong SQL: ' . $sql . ' Error: ' . $conn->error;
        trigger_error($errmsg, E_USER_ERROR);
    }
    else
    {
        echo('<br />' . $sql);
        $affected_rows = $conn->affected_rows;
        echo('<br />Affected rows: ' . $affected_rows);
    }
    echo("<br />User " . $id . " has been updated.");
    echo("<br/>Go back to <a href='index.php'>main page.</a><br />");
?>

