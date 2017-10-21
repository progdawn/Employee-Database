<?php
    require_once("connect.php");
    $last = strip_tags($_REQUEST['last']);
    $first= strip_tags($_REQUEST['first']);
    $deptId = strip_tags($_REQUEST['deptid']);
    $sql= "INSERT INTO employee VALUES (NULL," .
                                        "'" . $last . "'," .
                                        "'" . $first . "'," .
                                        "'" . $deptId . "')";
	if ($conn->query($sql) == false) 
    {
        $errmsg = 'Wrong SQL: ' . $sql . ' Error: ' . $conn->error;
        trigger_error($errmsg, E_USER_ERROR);
    }
    else
    {
        $last_inserted_id = $conn->insert_id;
        $affected_rows = $conn->affected_rows;
        echo('<br />Last inserted Id: ' . $last_inserted_id);
        echo('<br />Affected rows: ' . $affected_rows . '<br />');
    }
    echo($last . " successfully added to the database.");                                    
    echo("SQL statement: " . $sql);
    echo("<br/>Go back to <a href='index.php'>main page.</a><br />");
?> 
