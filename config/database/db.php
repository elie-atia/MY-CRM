<?php
$servername = "localhost";
$username = "elie";
$password = "joseph";
$dbname = "my_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




$sql = "CREATE TABLE contacts (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  phone VARCHAR(15),
  company VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);";



// if ($conn->query($sql) === TRUE){
//     echo "Table contacts created succesfully";
//     echo nl2br("\n");
// } else{
//     echo "Error When creating the table contacts: " . $con->error;
//     echo nl2br("\n");
// }



$sql = "DROP TABLE customers;";

// if ($conn->query($sql) === TRUE){
//     echo "delete table customers succesfully";
//     echo nl2br("\n");
// } else{
//     echo "Error When delete table customers" . $con->error;
//     echo nl2br("\n");
// }

$sql = "CREATE TABLE users (
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(50),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);";


// if ($conn->query($sql) === TRUE){
//     echo " succesfully";
//     echo nl2br("\n");
// } else{
//     echo "Error " . $con->error;
//     echo nl2br("\n");
// }

?>