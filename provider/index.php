<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    session_start();
    if(empty($_SESSION['name']) && !empty($_SESSION['status'])){
        header('Location:../login.php');
    } else {
        $status = $_SESSION['status'];
        if($status != 2){
            header('Location:../login.php');
        }
    }
?>
<body>

</body>
</html>