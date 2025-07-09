<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="header">
  <h2>Registra</h2>
</div>
<form method="post" action="register.php">
  <?php include('errors.php'); ?>
  <div class="input-group">
    <label>Username</label>
    <input type="text" name="Username" value="<?php echo $Username; ?>">
  </div>
  <div class="input-group">
    <label>Email</label>
  <input type="email" name="email" value="<?php echo $email; ?>">
  </div>
  <div class="input-group">
      <label>password</label>
       <input type="password" name="password_1">
  </div>
    <div class="input-group">
      <label>confirm password</label>
       <input type="password" name="password_2">
  </div>
<div class="input-group">
  <button type="submit" class="btn" name="reg user">Register</button>
</div>
  <p>
    Already a member? <a href="login.php">sign in</a>
  </p>
</form>
</body>
</html>