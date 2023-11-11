<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>

	<div class="crud">
		<h1>CRUD OPERATION</h1>
	</div>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
				<div class="row">
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
						</div>
				</div>
				<br><br>
			
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>First_name</th>
						<th>Last_name</th>
						<th>Email</th>
						<th>Gender</th>
						<th>Phone</th>
						<th>Update</th>
						<th>Creat</th>
						<th>Action</th>
						
					</tr>
				</thead>
				<tbody>
			<?php
			require 'dbconn.php';
			$query = 'SELECT * FROM users';
			$mysqliquery = mysqli_query($conn, $query);
			while ($result = mysqli_fetch_assoc($mysqliquery)) {
				?>
				<tr>
					<td>
						<?php echo $result['first_name']; ?>
					</td>
					<td>
						<?php echo $result['last_name']; ?>
					</td>
					<td>
						<?php echo $result['email']; ?>
					</td>
					<td>
						<?php echo $result['gender']; ?>
					</td>
					<td>
						<?php echo $result['phones']; ?>
					</td>
					<td>
						<?php echo $result['update']; ?>
					</td>
					<td>
						<?php echo $result['creat']; ?>
					</td>
					<td>
						<a href="update.php?id=<?php echo $result['id']; ?>" class="edit"><i class="material-icons" data-toggle="tooltip" title="Update">&#xE254;</i></a>
						<a href="delete.php?ids=<?php echo $result['id']; ?>" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
					</td>
				</tr>
				<?php
			}
			?>		
				</tbody>
			</table>
			
	</div>        
</div>


<?php require 'add_user.php' ?>


<?php require 'update_model.php' ?>


</div>
</body>
</html>