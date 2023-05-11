<?php
require_once __DIR__ . '/../../config/database/db.php';
require_once __DIR__ . '/../models/Contact.php';

$contactModel = new Contact($conn);

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
  case 'GET':
    if(isset($_GET['id'])) {
      $id = $_GET['id'];
      $result = $contactModel->getContact($id);
      $row = mysqli_fetch_assoc($result);
      echo json_encode($row);
    } else {
      $result = $contactModel->getAllContacts();
      $rows = array();
      while($r = mysqli_fetch_assoc($result)) {
        $rows[] = $r;
      }
      echo json_encode($rows);
    }
    break;

  case 'POST':
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];

    if ($contactModel->createContact($name, $email, $phone, $company)) {
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
