<?php 
    include('../extra_files/header.php'); 
    if(empty($_SESSION['name']) && !empty($_SESSION['status'])){
        header('Location:../login.php');
    } else {
        $status = $_SESSION['status'];
        if($status != 2){
            header('Location:../login.php');
        }
    }
?>
    <div class="container mt-2">
        <div class="card-header">
            Welcome to job  provider section, <b> <?php echo $_SESSION['name']; ?> </b>
        </div>
    </div>
<?php include('../extra_files/footer.php'); ?>