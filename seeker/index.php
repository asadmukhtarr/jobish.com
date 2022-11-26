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
    if(empty($_SESSION['name']) && empty($_SESSION['status']) && $_SESSION['status'] != 1){
        header('location:../login.php');
    }
?>
<body>
    <h1>Welcome <?php echo $_SESSION['status']; ?></h1>
</body>
</html>