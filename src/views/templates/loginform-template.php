<div class="loginFormContainer">
    <form class ="loginForm" action="<?php echo BASE_URL. 'login/submit'?>" method="post">
    <div class="loginHeader">
      <h3>Login</h3>
    </div>
      <div class="loginFormFields">
        <label>Username:</label>
        <input type="text" name="username" required>
      </div>
      <div class="loginFormFields">
        <label>Password:</label>
        <input type="password" name="password" required>
      </div>
      <div class="loginFormFields">
      <button class="btn" name="btn" type="submit">Login</button>
      </div>
    </form>
  </div>