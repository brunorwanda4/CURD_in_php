<?php

$DB_Server = "localhost";
$DB_Username = "root";
$DB_Password = "";
$DB="school_management";
$happ_conn = mysqli_connect($DB_Server, $DB_Username, $DB_Password , $DB);

if (!$happ_conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// // Create database 😔

// $sql = "CREATE DATABASE IF NOT EXISTS school_management";
// if (mysqli_query($happ_conn, $sql)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($happ_conn);
// }

 // create table 😔😔

$sql = mysqli_query($happ_conn , "CREATE TABLE IF NOT EXISTS students (
  id INT AUTO_INCREMENT PRIMARY KEY,
  full_name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  age INT,
  course VARCHAR(255)
)");

// // to see if is ok 😔😔😔😔😔

if(!$sql) {
    echo " some thing wet ❤️";
} else {
    echo " connect to db 💚";
};



mysqli_close($happ_conn);
?>
