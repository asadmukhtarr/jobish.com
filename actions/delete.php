<?php
    $id = $_GET['id'];
    include('cn.php'); // connection ..
    $query = "DELETE FROM `job_list` WHERE jo_id='$id'";
    mysqli_query($cn,$query) or die('cant run query'.mysqli_error($cn));
    $message = "Job Deleted Successfully";
    header('Location:../provider/jobs.php?message='.$message);
?>