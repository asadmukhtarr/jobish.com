<?php include_once('extra_files/header.php'); ?>
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-4">
				<div class="card">
					<div class="card-header"><i class="fa fa-user"></i>  Register Here </div>
					<div class="card-body">
						<form action="actions/register.php" method="post">
							<div class="form-group">
								<label> <i class="fa fa-user"></i> Name </label>
								<input type="text" class="form-control" placeholder="Name" name="name" />
							</div>
							<div class="form-group">
								<label> <i class="fa fa-envelope"></i> Email </label>
								<input type="text" class="form-control" placeholder="Name" name="email" />
							</div>
							<div class="form-group">
								<label> <i class="fa fa-key"></i> Password </label>
								<input type="Password" class="form-control" placeholder="Password" name="password" />
							</div>
							<div class="form-group">
								<label> <i class="fa fa-key"></i> Confirm Password </label>
								<input type="Password" class="form-control" placeholder="Password" name="cpassword" />
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-warning"> <i class="fa fa-arrow-right"></i> Register </button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include_once('extra_files/footer.php'); ?>