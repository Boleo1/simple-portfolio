<?php
$pageTitle = "Login";
include_once 'templates/head-template.php'

?>

<main class="container">
  <div class="banner">
    <h2>Login Page</h2>
  </div>
  <?php include_once __DIR__ .'/templates/loginform-template.php'?>

</main>

<?php include_once __DIR__.'/templates/footer-template.php'?>