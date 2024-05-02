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
    <div class="homeAPI weather-container">
    <?php if (isset($weatherData['error'])): ?>
        <p class="weather-error"><?= htmlspecialchars($weatherData['error']) ?></p>
    <?php else: ?>
        <h3 class="weather-heading">Current Weather in <?= htmlspecialchars($weatherData['location']['name']) ?></h3>
        <div class="weather-details">
            <p>Temperature: <span class="weather-temp"><?= htmlspecialchars($weatherData['current']['temp_c']) ?>°C</span></p>
            <p>Condition: <span class="weather-condition"><?= htmlspecialchars($weatherData['current']['condition']['text']) ?></span></p>
            <p>Wind Speed: <span class="weather-wind"><?= htmlspecialchars($weatherData['current']['wind_kph']) ?> kph</span></p>
            <p>Humidity: <span class="weather-humidity"><?= htmlspecialchars($weatherData['current']['humidity']) ?>%</span></p>
        </div>
    <?php endif ?>
</main>

<?php include_once __DIR__.'/templates/footer-template.php'?>
