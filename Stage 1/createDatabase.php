<?php
    
  
    // variable declarations
    
    $host = "localhost";
    $userName = "root";
    $password = "";
    $createDatabase = "CREATE DATABASE hng_Internship";
    $dbName = "hng_Internship";

    // extablish connection
    
   $mySqlConnection =  @mysqli_connect($host, $userName, $password) or die("Connection could not be made <br>");
    echo("Connection successful <br>");

    // create database

    if($mySqlConnection->query($createDatabase) == true){
        echo ("database created successfully <br>");
    }else {
        echo ("Something went wrong <br>" . $mySqlConnection->error);
    }


?>