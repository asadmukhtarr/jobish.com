<?php 
    # this variable is getting name from from ..
    $name = $_POST['name'];
    # email ..
    $email = $_POST['email'];
    # password  ..
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    // if password will be same then condition will be true otherwise condition will be false
    if($password == $cpassword){
        # connecting my software (jobish.com) with databse (jobish) ..
        $cn = mysqli_connect('localhost','root','','jobish') or die('Cant Connect With Database');
        $q = "SELECT * FROM `users` WHERE email='$email'";
        $result = mysqli_query($cn,$q) or die("Query Can't run".mysqli_error($cn));
        $row = mysqli_num_rows($result);
        if($row >= 1){
            $error = "Email already exist";
            // header function will be redirect to register.php where form is working ..
            header('location:../register.php?error='.$error);
        } else {
             // # Query ..
            $query = "INSERT INTO `users`(name,email,password) VALUES ('$name','$email','$password')";
            // var_dump($query); # this function is use for check query working ..
            //mysqli_error($cn) it will display error if it will be in connection
            mysqli_query($cn,$query) or die('Cant Run Query'.mysqli_error($cn));
        }
    } else {
        $error = "Your Password Is Match, Try Again";
        // header function will be redirect to register.php where form is working ..
        header('location:../register.php?error='.$error);
    }
?>