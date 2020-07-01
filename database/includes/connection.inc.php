<?php
// Code for connecting to the database

// Set up for XAMPP
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";

// Depends on how the database is called in SQL
$dbName = "real_estate";

// Connection
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);