<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <title>Jobish.com</title>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a href="#" class="navbar-brand">
					<img src="images/logo.png" height="60px" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#asad" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="asad">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a href="index.html" class="nav-link"> <i class="fa fa-home"></i> Home</a>
						</li>
						<li class="nav-item">
							<a href="about.html" class="nav-link"><i class="fa fa-arrow-right"></i> About</a>
						</li>
						<li class="nav-item">
							<a href="jobs.html" class="nav-link"> <i class="fa fa-list"></i> Jobs</a>
						</li>
						<li class="nav-item">
							<a href="contact.html" class="nav-link"> <i class="fa fa-envelope"></i> Contact</a>
						</li>
						<li class="nav-item">
					        <div class="btn-group" style="margin-right:1px; margin-top:1px;">
							  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							     <i class="fa fa-user"></i> Login
							  </button>
							  <div class="dropdown-menu">
							    <a class="dropdown-item" href="login.html"> <i class="fa fa-arrow-right"></i> Login</a>
							    <a class="dropdown-item" href="register.html"> <i class="fa fa-arrow-right"></i> Registe Here </a>
							  </div>
							</div>
					    </li>
					   	<li class="nav-item dropdown" style="margin-top:1px;">
					       <a class="btn btn-warning" href="create_job.html" role="button"> <i class="fa fa-pencil"></i> Post A Job</a>
					    </li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-10">
				<div class="card">
					<div class="card-header"><i class="fa fa-user"></i> Post New Job </div>
					<div class="card-body">
						<form action="" method="post" >
							<div class="form-group">
								<label> <i class="fa fa-pencil"></i> Title </label>
								<input type="text" class="form-control" placeholder="Name" name="name" />
							</div>
							<div class="form-group">
								<label> <i class="fa fa-pencil"></i> Description </label>
								<textarea class="form-control" rows="4"></textarea>
							</div>
							<div class="form-group">
								<label> <i class="fa fa-envelope"></i> Email </label>
								<input type="text" class="form-control" placeholder="Name" name="name" />
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-6">
										<label> <i class="fa fa-list"></i> Category</label>
										<select class="form-control" name="category">
											<option>Select Category</option>
											<option>Category 1</option>
											<option>Category 2</option>
											<option>Category 3</option>
										</select>
									</div>
									<div class="col-lg-6">
										<label> <i class="fa fa-list"></i> Sub Category</label>
										<select class="form-control" name="category">
											<option>Select Sub Category</option>
											<option>Category 1</option>
											<option>Category 2</option>
											<option>Category 3</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-6">
										<label> <i class="fa fa-list"></i> Salary Type</label>
										<select class="form-control" name="salary_type">
											<option>Select Salary Type</option>
											<option>Weekly</option>
											<option>Yearly</option>
											<option>Monthly</option>
										</select>
									</div>
									<div class="col-lg-4">
										<label> <i class="fa fa-money"></i> Salary</label>
										<input type="number" class="form-control" name="salary">
									</div>
									<div class="col-lg-2">
										<label> <i class="fa fa-list"></i> Currency</label>
										<select class="form-control" name="salary_type">
											<option>PKR</option>
											<option>USD</option>
											<option>Euro</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-6">
										<label> <i class="fa fa-envelope"></i> Email </label>
										<input type="number" class="form-control" name="email">
									</div>
									<div class="col-lg-6">
										<label> <i class="fa fa-whatsapp"></i> Whats App </label>
										<input type="number" class="form-control" name="phone">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label> <i  class="fa fa-map-marker"></i> Location </label>
								<input type="text" class="form-control" name="location">
							</div>
							<div class="form-group">
								<button class="btn btn-danger float-right"> <i class="fa fa-arrow-right"></i> Post Job</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="mt-5">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a href="#">
					<img src="images/logo.png" height="60px" />
				</a>
			</div>
		</nav>
	</footer>
</body>
</html>