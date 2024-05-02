<?php
include_once 'src/models/ContactModel.php';
class ContactController {
    private $contactModel;

    public function __construct() {
        $this->contactModel = new ContactModel();
    }

    public function submitForm() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name' => $_POST['contactName'],
                'email' => $_POST['contactEmail'],
                'message' => $_POST['contactMessage']
            ];

            if ($this->contactModel->addContact($data)) {
                header("Location: " . BASE_URL.'contact');
            } else {
                die('Something went wrong');
            }
        }
    }


    public function deleteContact() {
      if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
      $id = $_POST['id'];
      if ($this->contactModel->deleteContact($id)) {
          header('Location: ' . BASE_URL . 'admin');
          exit;
      } else {
          echo "Error deleting contact.";
      }
  }
  }
  
}
