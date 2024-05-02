<?php
$pageTitle = "Contact";
include_once 'templates/head-template.php';
include_once 'src/controllers/ContactController.php';
include_once 'src/models/ContactModel.php';
?>
<main class="container">
  <div class="banner">
    <h2>Contact Page</h2>
  </div>
  <?php include_once __DIR__.'/templates/contactform-template.php'?>

</main>

<?php include_once __DIR__.'/templates/footer-template.php'?>