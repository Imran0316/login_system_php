<?php
session_start();

if(!isset($_SESSION['email'])){
    header("location: login_form.php");
    exit();
}

?>

<h1>
    index page
</h1>
<p>
    <a href="php/logout.php">Logout</a>
</p>