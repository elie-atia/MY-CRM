<?php

class Contact {
  private $conn;

  public function __construct($conn) {
    $this->conn = $conn;
  }

  public function getContact($id) {
    $sql = "SELECT * FROM contacts WHERE id = $id";
    $result = $this->conn->query($sql);
    return $result;
  }

  public function getAllContacts() {
    $sql = "SELECT * FROM contacts";
    $result = $this->conn->query($sql);
    return $result;
  }

  public function createContact($name, $email, $phone, $company) {
    $sql = "INSERT INTO contacts (name, email, phone, company) VALUES ('$name', '$email', '$phone', '$company')";
    return $this->conn->query($sql);
  }

  public function updateContact($id, $name, $email, $phone, $company) {
    $sql = "UPDATE contacts SET name='$name', email='$email', phone='$phone', company='$company' WHERE id=$id";
    return $this->conn->query($sql);
  }

  public function deleteContact($id) {
    $sql = "DELETE FROM contacts WHERE id=$id";
    return $this->conn->query($sql);
  }
}
?>
