<?php
    $hostname = "localhost"; // Replace with your hostname
    $username = "root";      // Replace with your username
    $password = "";          // Replace with your password
    $dbname = "authordb"; // Replace with your database name
    
    try {
        $pdo = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully to the database!";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    ?>