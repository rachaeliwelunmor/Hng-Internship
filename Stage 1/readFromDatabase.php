<?php

    // declare variables
    $host = "localhost";
    $userName = "root";
    $password = "";
    $createDatabase = "CREATE DATABASE hng_Internship";
    $dbName = "hng_Internship";


    //establish connection to db
    $mySqlConnection = new mysqli($host,$userName,$password,$dbName);

    if ($mySqlConnection->connect_error) {
        echo ("something went wrong" . $mySqlConnection->error . "<br>");
    }

    // create table

    $userTable = "CREATE TABLE User(
        id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstName VARCHAR(50) NOT NULL,
        lastName VARCHAR(50) NOT NULL,
        phone VARCHAR(20) ,
        email VARCHAR(30) ,
        stack VARCHAR(30) NOT NULL,
        team VARCHAR(30) NOT NULL,
        created_at TIMESTAMP
    )";

    if ($mySqlConnection->query($userTable) == true) {
        echo ("table successfully added <br>");
    } else {
        echo ("something went wrong" . $mySqlConnection->error . "<br>");
    }

    //  insert data

    $insertData = "INSERT INTO user (firstName, lastName, phone, email, stack, team) 
                   VALUES ('Rachael','Iwelunmor','080----', 'riwelunmor@yahoo.com','full Stack', 'team 8')";

    if ($mySqlConnection->query($insertData) == true) {
        echo ("data successfully added <br>");
    } else {
        echo ("something went wrong" . $mySqlConnection->error . "<br>");
    }

    // read data

    $readData = "SELECT firstName, lastName, email, stack, team FROM user";
    $theData = $mySqlConnection->query($readData);

    if ($theData->num_rows > 0) {
        while($row = $theData->fetch_assoc()) {

        echo "<br>". "Name: " . $row["firstName"].$row[" lastName"]. "<br>".
             "Contact: " . $row["email"]. "<br>".
             "Stack: " . $row["stack"]. "<br>".
             "team: " . $row["team"]. "<br>";

        }
    } else {
        echo ("0 Results");
    }
    

?>