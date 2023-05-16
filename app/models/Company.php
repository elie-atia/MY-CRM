<?php

class Company {
  private $conn;

  public function __construct($conn) {
    $this->conn = $conn;
  }


  public function getAllUserCompanies($user_id) {
    $stmt = $this->conn->prepare("SELECT * FROM companies WHERE user_id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    return $stmt->get_result();
  }


  public function createCompany($username, $password) {
    $stmt = $this->conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);
    return $stmt->execute();
  }

  public function updateUser($id, $username, $password) {
    $stmt = $this->conn->prepare("UPDATE users SET username=?, password=? WHERE id=?");
    $stmt->bind_param("ssi", $username, $password, $id);
    return $stmt->execute();
  }

  public function deleteUser($id) {
    $stmt = $this->conn->prepare("DELETE FROM users WHERE id=?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
  }
}
?>
