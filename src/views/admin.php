<?php
$pageTitle = "Admin";
include_once 'src/controllers/ProjectsController.php';
include_once 'src/controllers/ContactController.php';
include_once 'src/views/templates/head-template.php';
$contactModel = new ContactModel();
$contacts = $contactModel->getContacts();
$projectModel = new ProjectModel();
$projects = $projectModel->getProjects();

?>
<main class="container">
  <div class="banner">
    <h2>Admin Page</h2>
  </div>
<?php 
include_once 'src/views/templates/adminTable-template.php';
include_once 'src/views/templates/adminProject-template.php';
?>
</main>
<?php include_once 'src/views/templates/footer-template.php'?>