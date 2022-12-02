<?php 
    include('../extra_files/header.php'); 
    if(empty($_SESSION['name']) && empty($_SESSION['status']) && $_SESSION['status'] != 1){
        header('location:../login.php');
    }
?>
    <div class="container mt-2">
        <div class="card-header">
            Welcome to job  provider section, <b> <?php echo $_SESSION['name']; ?> </b>
        </div>
    </div>
<?php include('../extra_files/footer.php'); ?>