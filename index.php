<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>
    <h1>Employee Management Page</h1>
    <p>Here are the features available:</p>
    <ul>
        <li>Delete: Remove an employee from the database</li>
        <li>Update: Update information on the selected employee</li>
        <li>Add New: Insert a new employee into the database</li>
    </ul>
    <br />
    <a href='mail.php'>Click to visit the email page</a><br />
    <?php
    {
        require_once("connect.php");

        //Creating a statement to get all employee data from the table
        $sql = "SELECT * FROM employee";
        //storing the query's results into a variable
        $rs = $conn->query($sql);

        //if something went wrong...
        if($rs == false)
            trigger_error('Wrong SQL:' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
        //else, if it worked, then...--
        else
        {
            //counts the number of rows from the database
            $rows_returned = $rs->num_rows;
            //prints the number of rows
            echo("<br/>Number of employees: " . $rows_returned . "<br /><br />");
            //Print some html to create a table. I added in some borders and table healders
            echo("<table style='border: 1px solid black; border-collapse: collapse'>");
            echo("<tr>");
            echo("<th style='border: 1px solid black'>Employee ID</th>");
            echo("<th style='border: 1px solid black'>Last Name</th>");
            echo("<th style='border: 1px solid black'>First Name</th>");
            echo("<th style='border: 1px solid black'>Department</th>");
            echo("<th style='border: 1px solid black'>Delete</th>");
            echo("<th style='border: 1px solid black'>Update</th>");
            echo("</tr>");

            //While there are still rows to be fetched from the query results
            //Loop through each set of data, and print another html row in the table
            while($arr = $rs->fetch_array(MYSQLI_ASSOC))
            {
                echo("<tr>");
                echo("<td style='border: 1px solid black'>" . $arr['empid'] . "</td>" .
                     "<td style='border: 1px solid black'>" . $arr['lastname'] . "</td>" .
                     "<td style='border: 1px solid black'>" . $arr['firstname'] . "</td>" .
                     "<td style='border: 1px solid black'>" . $arr['deptid'] . "</td>" .
                     "<td style='border: 1px solid black'><a href='#' class='delete' onclick='deleteEmp(" . $arr['empid'] . ")'>Delete</a></td>" . 
                     "<td style='border: 1px solid black'><a href='updateForm.php?id=" . $arr['empid'] . "'>Update</a></td>");   
                echo("</tr>");
            }
            echo("</table>");
            echo("<br />");
            echo("<a href='insert.php'>Add New</a>");
        }
    }
    ?>
    <script src="js/custom.js"></script>
</body>
</html>
