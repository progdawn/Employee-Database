<?php
    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DB_NAME", "employees");
    
//    define("HOSTNAME", "db638974450.db.1and1.com");
//    define("USERNAME", "dbo638974450");
//    define("PASSWORD", "161-F-S15");
//    define("DB_NAME", "db638974450");
    
    $conn = new mysqli(HOSTNAME, USERNAME, PASSWORD, DB_NAME);
    
    //if you can't connect to the database, then DIE!
    if($conn->connect_errno)
    {
        echo("<br/>Failed to connect to MySQL:(" . $conn->connect_errno . ")" . $conn->connect_error);
        die('<br/>Program Terminated');
    }
?>