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
                'email' => $_POST['contactEmail'],
                'subject' => $_POST['contactSubject'],
                'message' => $_POST['contactMessage']
            ];

            if ($this->contactModel->addContact($data)) {
                header("Location: " . BASE_URL.'contact'); // Redirect to a thank-you page or back to the form with a success message
            } else {
                die('Something went wrong');
            }
        }
    }

    public function viewContacts() {
        $contacts = $this->contactModel->getContacts();
        require 'views/contact/view.php'; // This page would list all contacts
    }

    public function deleteContact($id) {
        if ($this->contactModel->deleteContact($id)) {
            header("Location: " . BASE_URL.'contact'); // Redirect back to the contact list page
        } else {
            die('Failed to delete the contact');
        }
    }
}
