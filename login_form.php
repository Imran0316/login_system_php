
<?php
session_start();

if(isset($_SESSION['error'])){
  echo "<div class='error' >" . $_SESSION['error'] . "</div>";
  unset($_SESSION['error']);
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
    .form_links{
    font-size: 12px !important;
    margin: 10px;
}
</style>
<body>
    <h1>
        login
    </h1>
    <form action="php/login.php" method="post">
        <label for="">EMAIL:</label> <br>
        <input type="email" name="email"> <br>
        <label for="">PASSWORD:</label> <br>
        <input type="password" name="password">

        <input type="submit" value="Login" name="login">
       <div class="form_links">
        Don't have an account,
       <a href="signup_form.php">Signup now</a>
       </div>
    </form>
</body>
</html>