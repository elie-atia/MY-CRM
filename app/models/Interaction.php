<?php

class Interaction {
  private $conn;

  public function __construct($conn) {
    $this->conn = $conn;
  }


  public function getInteractionOfCompany($company_id) {
    $stmt = $this->conn->prepare("SELECT * FROM interactions WHERE company_id = ?");
    $stmt->bind_param("i", $company_id);
    $stmt->execute();
    return $stmt->get_result();
  }

  public function getInteractionOfUser($user_id) {
    $stmt = $this->conn->prepare("SELECT * FROM interactions WHERE user_id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    return $stmt->get_result();
  }

  public function createInteraction($interaction_type, $interaction_date, $notes, $company_id, $user_id) {
    $stmt = $this->conn->prepare("INSERT INTO interactions (interaction_type, interaction_date, notes, company_id, user_id) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssii", $interaction_type, $interaction_date, $notes, $company_id, $user_id);
    return $stmt->execute();
  }


  public function deleteInteraction($id) {
    $stmt = $this->conn->prepare("DELETE FROM interactions WHERE id=?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
  }
}
?>
