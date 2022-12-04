<?php 
    include('../extra_files/header.php');  // header ..
    include('../actions/cn.php'); // connection ..
    $user_id = $_SESSION['id'];
    $query = "SELECT * FROM `job_list` WHERE user_id='$user_id' ORDER BY jo_id DESC";
    $result = mysqli_query($cn,$query) or die('Cant Run Query');
?>
<div class="container">
<section id="jobs">
    <div class="container">
        <?php while($row=mysqli_fetch_array($result)){ ?>
        <!-- Jobs List -->
        <?php 
            if(!empty($_GET['message'])){
        ?>
            <div class="alert alert-danger mt-2">
                <b>Alert!</b> <?php echo $_GET['message']; ?>
            </div>
        <?php
            }
        ?>
        <div class="card mt-2">
            <div class="card-header">
                <i class="fa fa-pencil"></i> <?php echo ucfirst($row['jo_title']); ?>
            </div>
            <div class="card-body">
                <p>
                    <?php echo $row['jo_des']; ?>
                </p>
                <a href="application.html">
                <button class="btn btn-outline-danger float-right"> <i class="fa fa-arrow-right"></i> Read More ..</button>
                </a>
            </div>
            <div class="card-footer">
                <ul class="card-footer-list">
                    <li>
                        <i class="fa fa-clock-o"></i> 3 Mints Ago
                    </li>
                    <li>
                        <i class="fa fa-list"></i> <?php echo $row['jo_cat']; ?>
                    </li>
                    <li>
                        <?php 
                            $usid = $row['user_id'];
                            $q = "SELECT * FROM `users` WHERE id='$usid'";
                            $r = mysqli_query($cn,$q) or die('Cant run query'.mysqli_error($cn));
                            $ro = mysqli_fetch_array($r);
                        ?>
                        <i class="fa fa-user"></i> <?php echo $ro['name']; ?>
                    </li>
                    <li>
                        <a href="../actions/delete.php?id=<?php echo $row['jo_id'] ?>">
                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Jobs List -->
        <?php } ?>
    </div>
</section>
</div>
<?php include('../extra_files/footer.php'); ?>