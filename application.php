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
			<div class="col-lg-9">
				<div class="card">
					<div class="card-header"><i class="fa fa-user"></i> I am first job on jobish.com </div>
					<div class="card-body">
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
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<table class="table table-bordered">
							<tr>
								<th>Location</th>
								<td>Information Technology Information TechnologyInformation Technology Information Technology</td>
							</tr>
							<tr>
								<th>Deadline</th>
								<td>02 Oct 2022</td>
							</tr>
							<tr>
								<th>Job Category</th>
								<td>Information Technology</td>
							</tr>
							<tr>
								<th>Time</th>
								<td>3 Mints Ago</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<button type="button" class="btn btn-danger btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">Apply Now</button>
				<!-- Button trigger modal -->
				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Apply For Job</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form>
				        	<div class="form-group">
				        		<label>Cover Letter</label>
				        		<textarea class="form-control" rows="10"></textarea>
				        	</div>
				        	<div class="form-group">
				        		<label>Upload Resume</label>
				        		<input type="file" name="">
				        	</div>
				        	<div class="form-group">
				        		<button class="btn btn-danger float-right">Submit</button>
				        	</div>

				        </form>
				      </div>
				    </div>
				  </div>
				</div>
				<p class="mt-4">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
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