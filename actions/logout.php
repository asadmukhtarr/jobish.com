<?php 
    session_start();
    // unset($_SESSION['name]);
    // unset($_SESSION['status']);
    session_destroy();
    header('Location:../login.php');
?>