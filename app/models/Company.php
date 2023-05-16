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


  public function createCompany($company_name, $city, $sector,$email,$creation_date,$user_id) {
    $stmt = $this->conn->prepare("INSERT INTO companies (company_name, city, sector, email, creation_date, user_id) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi",$company_name, $city, $sector,$email,$creation_date,$user_id);
    return $stmt->execute();
  }


  public function deleteCompany($id) {
    $stmt = $this->conn->prepare("DELETE FROM companies WHERE id=?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
  }
}
?>
