<?php
session_start();

if(isset($_SESSION['error'])){
   echo "<div class='error'>" . $_SESSION['error'] . "</div>";
   unset($_SESSION['error']);
}
if(isset($_SESSION['success'])){
   echo "<div class='success'>" . $_SESSION['success'] . "</div>";
   unset($_SESSION['success']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>
<style>
    /* signup login links in forms */
.form_links{
    font-size: 12px !important;
    margin: 10px;
}
</style>
<body>
    <h1>
        signup now!
    </h1>

    <form action="php/signup.php" method="post">
      <label for="">NAME:</label> <br>
      <input type="text" name="name"> <br>
      <?php
      if(isset($_SESSION['password_error'])){
        echo "<div class='success'>" . $_SESSION['success'] . "</div>";
        unset($_SESSION['success']);
     }
      ?>
      

      <label for="">EMAIL:</label> <br>
      <input type="email" name="email"> <br>

      <label for="">PASSWORD:</label> <br>
      <input type="password" name="password"> <br>

      <label for="">Re-Type Password:</label> <br>
      <input type="password" name="r_password"> <br>
       
      <input type="submit" value="sign up" name="signup"> <br>
      
      <div class="form_links">
      already have an account,
      <a href="login_form.php">Login now</a>
    </div>
    </form>
</body>
</html>