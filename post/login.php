<?php 
if (isset($_POST["login"])){
  if($_POST["username"] == "hallo"  && $_POST["password"] = "123123"){
    header("Location: user.php?username=" . $_POST["username"]); //cari yg best practice
    exit;
  }else{
    $error = true;
  }}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
</head>
<body>
  <?php if (isset($error)) : ?>
<p style="color: red;">Username / Password salah !</p>
    <?php endif; ?>
  <h1>Login Form</h1>
  <form action="" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username"><br><br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password"><br><br>
    <button type="submit" name="login">Login</button>
  </form>
</body>
</html>