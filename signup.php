<!DOCTYPE html>
<html lang="en">
<?php
  include "./comp/head.php"
?>
<body>
<section class="login-signup">
    <div class="login-signup-container">
      <form action="./includes/signup.inc.php" class="login-signup-form" method="post"> 
        <input type="text" placeholder="Username" class="login-input" name = "username" required>
        <input type="email" placeholder="Email" class="login-input" name="email"required>
        <input type="password" placeholder="Password" class="login-input" name="password" required>
        <input type="password" placeholder="Repeat password" class="login-input" name="rpt-password" required>
        <input type="submit" placeholder="login" class="btn btn-primary login-btn" value="Signup" name="submit">
      </form>
    </div>
  </section>
</body>
</html>