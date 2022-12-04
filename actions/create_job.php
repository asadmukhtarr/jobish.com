<?php 
	include('cn.php');
	session_start(); // session start ..
	if(isset($_POST["submit"]))
	{
		$title = $_POST['title'];
		$desc = $_POST['desc'];
		$name = $_POST['name'];
		$category = $_POST['category'];
		$subcategory = $_POST['subcategory'];
		$salary_type = $_POST['salary_type'];
		$salary = $_POST['salary'];
		$currency = $_POST['currency'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$location = $_POST['location'];
		$user_id = $_SESSION['id']; // user is getting from session ..
		$insert_rec = "INSERT INTO `job_list`(`jo_title`, `jo_des`, `jo_name`, `jo_cat`, `jo_sub_cat`, `jo_salary_ty`, `jo_salary`, `jo_currency`, `jo_email`, `jo_whatsappno`, `jo_location`,`user_id`) 
		VALUES ('$title','$desc ','$name','$category','$subcategory','$salary_type','$salary','$currency','$email','$phone','$location','$user_id')"; // inserting data into databse with userid ..

		if(mysqli_query($cn,$insert_rec)){
			// create job ..
			header('Location:../create_job.php');
			
		} else {			
				$error = "Job Is Not Post";
				header('Location:../create_job.php?error='.$error);
		}

	}

?>
