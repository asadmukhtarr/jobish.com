<?php 
    # this variable is getting name from from ..
    $name = $_POST['name'];
    # email ..
    $email = $_POST['email'];
    # password  ..
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $status = $_POST['status'];
    // if password will be same then condition will be true otherwise condition will be false
    if($password == $cpassword){
        # connecting my software (jobish.com) with databse (jobish) ..
        include('cn.php'); // connection file ..
        $q = "SELECT * FROM `users` WHERE email='$email'";
        $result = mysqli_query($cn,$q) or die("Query Can't run".mysqli_error($cn));
        $row = mysqli_num_rows($result);
        if($row >= 1){
            $error = "Email already exist";
            // header function will be redirect to register.php where form is working ..
            header('location:../register.php?error='.$error);
        } else {
             // # Query ..
            $query = "INSERT INTO `users`(name,email,password,status) VALUES ('$name','$email','$password','$status')";
            // var_dump($query); # this function is use for check query working ..
            //mysqli_error($cn) it will display error if it will be in connection
            mysqli_query($cn,$query) or die('Cant Run Query'.mysqli_error($cn));
            // redirecting to login
            header('Location:../login.php');
        }
    } else {
        $error = "Your Password Is Match, Try Again";
        // header function will be redirect to register.php where form is working ..
        header('location:../register.php?error='.$error);
    }
?>
