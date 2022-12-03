<?php 
    $email = $_POST['email']; // getting email ..
    $password = $_POST['password']; // password ..
    include('cn.php'); // connection file ..
    // query ..
    $query = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
    // result ..
    $result = mysqli_query($cn,$query) or die("Query Can't run".mysqli_error($cn));
    // checking number of rows
    $row = mysqli_num_rows($result);
    // checking if data is availeble in database ..
    if($row >= 1){
        // fetching data from database ..
        $r = mysqli_fetch_array($result);
        $status = $r['status'];
        session_start(); // starting session ..
        // checking if status is job seeker or provider ..
        $_SESSION['name'] = $r['name']; // name 
        $_SESSION['email'] = $r['email']; // name
        $_SESSION['id'] = $r['id']; // id 
        $_SESSION['status'] = $r['status'];  // status ..
        if($status == 1){          
            /// redirecting to job seekr 
            header('Location:../seeker/index.php');
        } else {
            /// redirecting to job provider 
            header('Location:../provider/index.php');
        }
    } else {
        $error = "Email or password is wrong!";
        echo header('Location:../login.php?error='.$error);
    }
?>