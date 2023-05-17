<?php

class Mail {
  private $conn;

  public function __construct($conn) {
    $this->conn = $conn;
  }

  public function getMail($mail_type) {
    $stmt = $this->conn->prepare("SELECT * FROM mails WHERE mail_type = ?");
    $stmt->bind_param("s", $mail_type);
    $stmt->execute();
    return $stmt->get_result();
  }

  public function getAllMails() {
    $sql = "SELECT * FROM mails";
    $result = $this->conn->query($sql);
    return $result;
  }

  public function createMail($mail_type, $mail_subject, $mail_content) {
    $stmt = $this->conn->prepare("INSERT INTO mails (mail_type, mail_subject, mail_content) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $mail_type, $mail_subject, $mail_content);
    return $stmt->execute();
  }

  public function deleteUser($id) {
    $stmt = $this->conn->prepare("DELETE FROM mail WHERE id=?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
  }
}
?>
