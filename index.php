
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Register form</title>
</head>
<body>



	<div class="col-md-6 m-auto">
		
		<div class="register-wrapper m-auto">
		<div class="top-button mt-3">
		<a href="index.php" class="btn btn-success">Add Employee</a>
			<a href="view.php" class="btn btn-primary">View Employee</a>
		</div>
		
	<div class="card mt-3">

			<?php if(isset($_REQUEST['successMsg'])){ ?>
				<div class="alert alert-success text-center">
			<?php	echo $_REQUEST['successMsg']; ?>
				</div>
			<?php } ?>
			
			<?php if(isset($_REQUEST['errorMsg'])){ ?>
				<div class="alert alert-danger text-center">
			<?php	echo $_REQUEST['errorMsg']; ?>
				</div>
			<?php } ?>
			

			<div class="card-header">
				<h4 class="text-center">Register Employee</h4>
			</div>
			<div class="card-body">
				<form  action="register_core.php" method="POST" enctype="multipart/form-data">
					
				<label for="employee_type">Type:</label>
					<select name="employee_type" class="form-control" id="">
						<option selected value hidden>--Employee Type--</option>
						<option value="web_developer">Web Developer</option>
						<option value="graphics_designer">Graphics Designer</option>
						<option value="customer_support">Customer Support</option>
					</select><br>


					<label for="fname">Full Name:</label>
					<input type="text" name="full_name" class="form-control" id="" required>
					
					
					<label for="lname">Email:</label>
					<input type="email" name="email_addr" class="form-control" id="" required><br>

					<label for="lname">Phone Number:</label>
					<input type="text" name="phone" class="form-control" id="" required><br>

					<label for="lname">Address:</label>
					<textarea name="address" class="form-control" id="" cols="30" rows="5" ></textarea><br>

		
							<label for="photo">Photo</label>
							<input type="file" class="form-control" name="photo" id="" required>
							<small class="text-muted">your photo must be less than 5MB</small><br><br>
							
						
						
						<button type="submit" class="btn btn-primary form-control">Register</button>

					
					
				</form>
			</div>
		</div>
		</div>
	</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>