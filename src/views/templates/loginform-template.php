<div class="loginFormContainer">
    <form class ="loginForm" action="<?php echo BASE_URL. 'login/submit'?>" method="post">
      <div class="loginFormFields">
        <label>Username</label>
        <input type="text" name="username" required>
      </div>
      <div class="contactFormFields">
        <label>Password</label>
        <input type="password" name="password" required>
      </div>
      <button name="btn" type="submit">Submit</button>
    </form>
  </div>