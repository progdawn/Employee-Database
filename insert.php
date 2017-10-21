<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Employee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>
    <h1>Create New Employee</h1>
    <p>Please enter the information for the new employee. Once completed, the new employee will be entered into the database.</p>
    <br />
    <form action="insertProcess.php" method="post">
        <p>Last Name<br/>
        <input type="text" name="last"/></p>
        <p>First Name<br/>
        <input type="text" name="first"/></p>
        <p>Department<br/>
            <select name="deptid">
                <option value="1">Dog Walking</option>
                <option value="2">Dog Sitting</option>
                <option value="3">Dog Grooming</option>
                <option value="4">Management</option>
            </select>
        </p>
        <input type="submit" value="Save Information" />
    </form>
</body>
</html>
