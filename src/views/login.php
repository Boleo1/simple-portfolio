<?php include_once 'templates/head-template.php'?>
<div class="banner">
  <h2>Login Page</h2>
</div>
<div class="loginFormContainer">
  <form class ="loginForm">
    <div class="loginFormFields">
      <label>Username</label>
      <input type="email" name="loginUsername">
    </div>
    <div class="contactFormFields">
      <label>Password</label>
      <input type="password" name="loginPassword">
    </div>
    <button name="contactBtn" type="submit">Submit</button>
  </form>
</div>

<?php include_once __DIR__.'/templates/footer-template.php'?>