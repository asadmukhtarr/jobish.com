<?php
		// header file ...
		include_once('extra_files/header.php'); 
		include('actions/cn.php'); // connection ..
		$user_id = $_SESSION['id'];
		$query = "SELECT * FROM `job_list` ORDER BY jo_id DESC";
		$result = mysqli_query($cn,$query) or die('Cant Run Query');
?>
	<div class="jumbotron" style="height:564px; background-color:red; color:white;">
		<div class="container-fluid	">
			<div class="row">
				<div class="col-lg-7">
					<h3>I am heading</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
				<div class="col-lg-5">
					<img src="images/c.png" height="500px">
				</div>
			</div>
		</div>
	</div>
	<section id="jobs">
		<div class="container">
			<?php while($row=mysqli_fetch_array($result)){ ?>
			<!-- Jobs List -->
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
					</ul>
				</div>
			</div>
			<!-- Jobs List -->
			<?php } ?>
		</div>
	</section>
<?php 
	// file ..
	include_once('extra_files/footer.php'); 
?>

