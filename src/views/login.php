<?php
$pageTitle = "Login";
include_once 'templates/head-template.php';
include_once 'src/controllers/AuthController.php';
include_once 'src/models/AuthModel.php';
var_dump($_POST);
?>

<main class="container">
  <div class="banner">
    <h2>Login Page</h2>
  </div>
  <?php include_once __DIR__ .'/templates/loginform-template.php'?>

</main>

<?php include_once __DIR__.'/templates/footer-template.php'?>