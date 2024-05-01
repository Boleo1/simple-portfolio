<?php include_once 'templates/head-template.php'?>
<div class="banner">
  <h2>Contact Page</h2>
</div>
<div class="contactFormContainer">
  <form class ="contactForm">
    <div class="contactFormFields">
      <label>Email</label>
      <input type="email" name="contactEmail">
    </div>
    <div class="contactFormFields">
      <label>Subject</label>
      <input type="text" name="contactSubject">
    </div>
    <div class="contactFormFields">
      <label>Message:</label>
      <textarea name="contactMessage"></textarea>
    </div>
    <button name="contactBtn" type="submit">Submit</button>
  </form>
</div>

<?php include_once __DIR__.'/templates/footer-template.php'?>