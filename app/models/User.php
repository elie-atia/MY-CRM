<?php

class User {
  private $conn;

  public function __construct($conn) {
    $this->conn = $conn;
  }

  public function checkAlreadyExist($username,$email) {
    $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ? OR email = ? LIMIT 1");
    $stmt->bind_param("ss", $username,$email);
    $stmt->execute();
    return $stmt->get_result();
  }

  public function getUser($id) {
    $stmt = $this->conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->get_result();
  }

  public function getAllUsers() {
    $sql = "SELECT * FROM users";
    $result = $this->conn->query($sql);
    return $result;
  }

  public function createUser($username, $password) {
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
