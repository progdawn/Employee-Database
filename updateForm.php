<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Employee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>
    <h1>Update Employee</h1>
    <p>This form will allow you to make any necessary changes to an employee's data.</p>
    <br />
    <?php
        require_once("connect.php");
        $id = strip_tags($_REQUEST['id']);
        $sql = "SELECT * FROM employee WHERE empid = '" . $id . "';";
        $rs = $conn->query($sql);
        if ($rs === false) 
        {
            trigger_error("Wrong SQL: " . $sql . 
                    "Error: " . $conn->error, E_USER_ERROR);
            die( " Select Error: " . $sql);
        } 
        else 
        {
            $arr = $rs->fetch_array(MYSQLI_ASSOC);
        }
        $conn->close();
    ?>
	<form action="updateProcess.php" method="post">
        <input type="hidden" name="id" value="<?php print($id); ?>" />
        <p>Last Name<br/>
        <input type="text" name="last" value="<?php print($arr['lastname']) ?>"/></p>
        
        <p>First Name<br/>
        <input type="text" name="first" value="<?php print($arr['firstname']) ?>"/></p>
        
        <p>Department<br/>
        <select name="deptid">
            <option value="1"
               <?php 
               if ($arr['deptid'] == 1) 
               {
                   print(' selected');
               }
               ?>
                   >Dog Walking</option>
            <option value="2"
               <?php 
               if ($arr['deptid'] == 2) 
               {
                   print(' selected');
               }
               ?>
                   >Dog Sitting</option>
			<option value="3"
               <?php 
               if ($arr['deptid'] == 3) 
               {
                   print(' selected');
               }
               ?>
                   >Dog Grooming</option>
            <option value="4"
               <?php 
               if ($arr['deptid'] == 4) 
               {
                   print(' selected');
               }
               ?>
                   >Management</option>
        </select>
        </p>
        <input type="submit" value="Update Information" />
    </form>
    <br />
    <a href="index.php">Return without updating</a>
</body>
</html>

