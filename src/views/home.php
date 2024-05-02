<?php
$pageTitle = "Home";
include_once 'templates/head-template.php';
?>


<main class="container">
  <div class="banner">
    <h2>Home page</h2>
  </div>
  <div class="bodyContainer">
    <div class="homeCard">
      <img class ="homeImage" src='public/img/header.jpg'>
      <div class ="homeCardBody">
        <h4>Anthony Beaulieu</h4>
        <p>B.A Computer Information Systems <br>B.A Information Systems Analytics <br>Computer Science minor</p>
      </div>
    </div>
    <div class="homeIntro">
      <h3>Introduction</h3>
      <p>
        My name is Anthony Beaulieu, I currently am junior going into my senior year at Bemidji State University.
        I am majoring in both Computer Information Systems and Business Analytics Information Systems with a minor in computer science.
      </p>
    </div>
<div class="homeAPI">

</div>
</main>

<?php include_once __DIR__.'/templates/footer-template.php'?>
