<?php
echo "Logged in status: " . ($_SESSION['logged_in'] ? 'Yes' : 'No') . "<br>";
echo "User: " . ($_SESSION['user'] ?? 'None');
$pageTitle = "About";
include_once 'templates/head-template.php'?>
<main class="container">
  <div class="banner">
    <h2>About Page</h2>
    
  </div>
  <div class="aboutIntro">
    <div class="aboutPicture">
      
    </div>
    <div class="aboutMe">
      <h3>About me</h3>
      <p>
        My name is Anthony Beaulieu, I am from the Red Lake Ojibwe tribe, I was born in Red Lake and grew up there.
        I am a CIS and a Business analytics information sytems major, with a minor in computer science.
        I've always been around technology my whole life being a gamer and even taking my own mom's home network into my own hands
        since our local ISP is 30 minutes away and I didnt feel like putting my internet into other peoples hands. I built a good majority of my friends computers that I game with. Currently I am employed
        for my tribe as PC technician with hopes of opening my own doors on developing software and improving on all aspects of information security for my tribe.
      </p>
    </div>
  </div>
  <div class="aboutSkills">
    <h2>Skills</h2>
    <div class="sectionSkills">
      <ul>
        <h3>Skills</h3>
        <li>Business Analytics</li>
        <li>Computer information systems</li>
        <li>Business Administration</li>
        <li>Can troubleshoot mobile devices and PC's</li>
        <li>Can troubleshoot networking issues</li>
        <li>Web development (full stack)</li>
        <li>Game development</li>
      </ul>
    </div>
    <div class="sectionLanguages">
      <ul>
        <h3>Languages:</h3>
        <li>C++</li>
        <li>Python</li>
        <li>PHP</li>
        <li>HTML</li>
        <li>CSS</li>
      </ul>
    </div>
    <div class= "sectionSoftSkills">
      <ul>
        <h3>Soft skills</h3>
        <li>Time management</li>
        <li>Organization</li>
        <li>Can work well in a team or solo</li>
        <li>Coachable</li>
        <li>Customer service</li>
        <li>Able to lead</li>
      </ul>
    </div>
  </div>
  <div class="aboutAwards">
    <h3>Awards</h3>
    <ul>
      <li>Captain of basketball team</li>
      <li>7 Teachings award - Humility</li>
      <li>3x State partipant in basketball - highest placement 4th</li>
      <li>Internship with High School I.T department my Junior year</li>
      <li>State participant in History Day in middle school</li>
    </ul>
  
    </p>
  </div>
</main>




<?php include_once __DIR__.'/templates/footer-template.php'?>