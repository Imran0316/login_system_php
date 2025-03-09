<?php

session_start();

if(isset($_POST['signup'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $r_pass = $_POST['r_password'];

  
    $conn=mysqli_connect("localhost","root","","project2");

    $check_email="SELECT * FROM signup WHERE email='$email'";
    $email_result=mysqli_query($conn,$check_email);

    if(mysqli_num_rows($email_result) > 0){

        $_SESSION['error']="email already exist";
        header("location: ../signup_form.php");
        exit();

    }

    $password_error="";

    if (strlen($password) < 6) {
        $password_error = "Password must be at least 6 characters.";
    } elseif (!preg_match("/[A-Za-z]/", $password) || !preg_match("/[0-9]/", $password)) {
        $password_error = "Password must contain both letters and numbers.";
    }
    
    if($password !== $r_pass){
      $_SESSION['error']= "password do not match";
      header("location: ../signup_form.php");
      exit();
      
    }
    
    $insert_quer="INSERT INTO `signup`(`name`, `email`, `password`, `r_password`) VALUES ('$name','$email','$password','$r_pass')";
    $insert_run=mysqli_query($conn,$insert_quer);
   
    if($insert_run){

       $_SESSION['success'] = "Rgister successfuly";
       header("Location: ../login_form.php");
        exit();

    }else{
        $_SESSION['error'] = "Something went wrong. Try again!";
        header("Location: ../signup_form.php");
        exit();
    }    
    


    
}
?>