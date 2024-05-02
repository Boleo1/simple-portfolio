<div class="contactFormContainer">
  <form class ="contactForm" action="<?php echo BASE_URL. 'contact/submit'?>" method="post">
    <div class="contactFormFields">
      <label>Name</label>
      <input type="text" name="contactName" required>
    </div>
    <div class="contactFormFields">
      <label>Email</label>
      <input type="text" name="contactEmail" required>
    </div>
    <div class="contactFormFields">
      <label>Message:</label>
      <textarea name="contactMessage"></textarea>
    </div>
    <button class="contactFormBtn" name="contactBtn" type="submit">Submit</button>
  </form>
</div>