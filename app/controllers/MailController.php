<?php
require_once __DIR__ . '/../../config/database/db.php';
require_once __DIR__ . '/../models/Mail.php';

$MailModel = new Mail($conn);

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
  case 'GET':
    $result = $MailModel->getAllMails();
    $mails = array();
    while($row = mysqli_fetch_assoc($result)) {
      $mails[] = $row;
    }
    echo json_encode($mails);
    break;

  case 'POST':
    $mail_type = $_POST['type'];
    $mail_subject = $_POST['subject'];
    $mail_content = $_POST['content'];
    if ($MailModel->createMail($mail_type, $mail_subject, $mail_content)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $conn->error;
    }
    break;

  case 'PUT':
    parse_str(file_get_contents("php://input"),$_PUT);
    $id = $_PUT['id'];
    $name = $_PUT['name'];
    $email = $_PUT['email'];
    $phone = $_PUT['phone'];
    $company = $_PUT['company'];

    if ($contactModel->updateContact($id, $name, $email, $phone, $company)) {
      echo "Record updated successfully";
    } else {
      echo "Error: " . $conn->error;
    }
    break;

  case 'DELETE':
    parse_str(file_get_contents("php://input"),$_DELETE);
    $id = $_DELETE['id'];

    if ($contactModel->deleteContact($id)) {
      echo "Record deleted successfully";
    } else {
      echo "Error: " . $conn->error;
    }
    break;
}

$conn->close();
?>
