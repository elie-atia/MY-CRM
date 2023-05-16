<?php
require_once __DIR__ . '/db.php';

// Création de la table users
// $query = "CREATE TABLE users (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     username VARCHAR(30) NOT NULL,
//     email VARCHAR(50) NOT NULL,
//     password VARCHAR(255) NOT NULL,
//     token VARCHAR(255),
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
// )";
// $conn->query($query);

// Création de la table company
// $query = "CREATE TABLE companies (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     company_name VARCHAR(30) NOT NULL,
//     city VARCHAR(30),
//     sector VARCHAR(30),
//     email VARCHAR(50),
//     creation_date TIMESTAMP,
//     user_id INT(6) UNSIGNED,
//     FOREIGN KEY (user_id) REFERENCES users(id)
// )";
// $conn->query($query);

// Création de la table interactions
// $query = "CREATE TABLE interactions (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     interaction_type VARCHAR(30) NOT NULL,
//     interaction_date TIMESTAMP,
//     notes TEXT,
//     company_id INT(6) UNSIGNED,
//     user_id INT(6) UNSIGNED, 
//     FOREIGN KEY (user_id) REFERENCES users(id),  
//     FOREIGN KEY (company_id) REFERENCES companies(id),
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
// )";
// $conn->query($query);

// Création de la table mails
// $query = "CREATE TABLE mails (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     mail_type VARCHAR(50),
//     mail_subject VARCHAR(30) NOT NULL,
//     mail_content TEXT
// )";
// $conn->query($query);

// Création de la table sales
// $query = "CREATE TABLE sales (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     sale_amount DECIMAL(10, 2) NOT NULL,
//     sale_date TIMESTAMP,
//     contact_id INT(6) UNSIGNED,
//     FOREIGN KEY (contact_id) REFERENCES contacts(id),
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
// )";
// $conn->query($query);

// Création de la table support_tickets
// $query = "CREATE TABLE support_tickets (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     ticket_subject VARCHAR(50) NOT NULL,
//     ticket_status VARCHAR(15),
//     contact_id INT(6) UNSIGNED,
//     FOREIGN KEY (contact_id) REFERENCES contacts(id),
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
// )";
// $conn->query($query);

echo "Tables created successfully";

$conn->close();
?>
