<!DOCTYPE html>
<?php
  include "./comp/head.php"
?>
<body>
<section class="login-signup">
    <div class="login-signup-container">
      <form action="" class="login-signup-form"> 
        <input type="text" placeholder="Username" class="login-input" name="username" required>
        <input type="password" placeholder="Password" class="login-input" name="password" required>
        <p class="redirect-signup">Don't have an account? <a href="./signup.php">Sign Up</a></p>
        <input type="submit" placeholder="login" class="btn btn-primary login-btn" value="Login" name="submit">
      </form>
    </div>
  </section>
</body>
</html>