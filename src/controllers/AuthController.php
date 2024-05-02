<?php

include_once 'src/models/AuthModel.php';

class AuthController {
  private $authModel;

  public function __construct() {
      $this->authModel = new AuthModel();
  }

  // Handle Login
  public function submitLogin() {
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($this->authModel->verifyCredentials($username, $password)) {
            $_SESSION['logged_in'] = true;
            $_SESSION['user'] = $username;  // Store username in session for access control
            header("Location: " . BASE_URL . 'admin'); // Redirect to the admin page
            exit;
        } else {
            // Redirect back to the login page with an error message
            header("Location: " . BASE_URL . 'login?=error');
            exit;
        }
    }
}


  // Handle Logout
  public function logout() {
      session_unset(); // Remove all session variables
      session_destroy(); // Destroy the session
      header("Location: " . BASE_URL.'contact'); // Redirect to the login page
      exit;
  }
}
