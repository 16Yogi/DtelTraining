<?php
    // Database connection parameters
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database_name = 'your_database_name';
    
    // Create a connection
    $con = new mysqli($host, $username, $password);
    
    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    
    // Query to show all databases
    $showDatabases = "SHOW DATABASES";
    $result = $con->query($showDatabases);
    
    // Flag to check if the database exists
    $databaseExists = false;
    
    // Check if the database exists
    while ($row = $result->fetch_assoc()) {
        if ($row['Database'] === $database_name) {
            $databaseExists = true;
            break;
        }
    }
    
    // If the database does not exist, create it
    if (!$databaseExists) {
        $createDatabase = "CREATE DATABASE $database_name";
        if ($con->query($createDatabase) === TRUE) {
            echo "Database '$database_name' created successfully.<br>";
        } else {
            echo "Error creating database: " . $con->error;
        }
    }
    
    // Now, connect to the new or existing database
    $con->select_db($database_name);
    
    // Close the connection
    $con->close();

?>