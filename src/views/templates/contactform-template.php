<div class="contactFormContainer">
  <form class ="contactForm" action="<?php echo BASE_URL. 'contact/submit'?>" method="post">
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