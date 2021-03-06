
<?php

require_once('view_core.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Register form</title>
</head>
<body>



	<div class="col-md-6 m-auto">
		
		<div class="top-button mt-3">
		<a href="index.php" class="btn btn-success">Add Employee</a>
			<a href="view.php" class="btn btn-primary">View Employee</a>
		</div>
		
	<div class="employee list mt-3 " style="width: 100%;">
			

			<div class="">
				<h4 class="text-center employee" style="padding: 12px 0px; background: #f7f7f7;">Employee List</h4>
			
			
				<table class="table table-responsive table-bordered table-hover">
                    <thead class="thead-dark">
                        <th>ID</th>
                        <th>Employee Type</th>
                        <th>Full Name</th>
                        <th>Email Address</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Photo</th>
                        <th>Action</th>
                        
                    </thead>
                    <tbody>

                  
                      
                      
                    <?php   while($data=mysqli_fetch_assoc($runQuery)) {      ?>
                          
                         
                          
                     
                      
                      <tr> 
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['employee_type']; ?></td>
                            <td><?php echo $data['full_name']; ?></td>
                            <td><?php echo $data['email_addr']; ?></td>
                            <td><?php echo $data['phone']; ?></td>
                            <td><?php echo $data['address']; ?></td>
                            <td><img src="<?php echo $data['photo']; ?>" alt="" srcset="" style="width:120px; object-fit:cover"></td>
                            <td>
                                <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-success btn-sm mb-2"><i class="fas fa-edit"></i></a>  <a href="delete_core.php?id=<?php echo $data['id']; ?>"  class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
                            </td>
                        
                            
                        </tr>

                    <?php  }   ?>

                    </tbody>
                </table>
			
		</div>
	</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>