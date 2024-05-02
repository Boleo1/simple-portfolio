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
            $_SESSION['user'] = $username;
            header("Location: " . BASE_URL . 'admin');
            exit;
        } else {
            header("Location: " . BASE_URL . 'login?=error');
            exit;
        }
    }
}


  // Handle Logout
  public function logout() {
      session_unset();
      session_destroy();
      header("Location: " . BASE_URL.'contact');
  }
}
