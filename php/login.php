<?php
session_start();

if(isset($_POST['login'])){
  $email=$_POST['email'];
  $pass=$_POST['password'];

  $conn=mysqli_connect("localhost","root","","project2");

  $quer="SELECT * FROM signup WHERE email = '$email'";
  $run=mysqli_query($conn,$quer);
  if(mysqli_num_rows($run) > 0){
     $data=mysqli_fetch_assoc($run);
     $db_pass=$data['password'];
     $_SESSION['email']=$data['email'];
     $_SESSION['password']=$data['password'];
     if($pass == $db_pass){
        header("location: ../index.php");
        exit();
     }else{
        $_SESSION['error']="invalid password";
        header("location: ../login_form.php");
        exit();
     }
  }else{
    $_SESSION['error']="Invalid Email";
    header("location: ../login_form.php");
  }

  
}
?>