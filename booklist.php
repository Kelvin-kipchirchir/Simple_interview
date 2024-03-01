<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Book List</title>
	 <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<header class="d-flex justify-content-between my-4">
			<h1>Book List</h1>
			<div>
				<a href="create.php" class="btn btn-primary  ">Add New Book</a>
			</div>
			
		</header>
		<?php
		session_start();
		if (isset($_SESSION['create'])) {
			?>
			<div class="alert alert-success">
				<?php
				echo $_SESSION["create"];
				unset($_SESSION["create"]);
				?>
			</div>
			<?php
		}

		?>
		<?php
		if (isset($_SESSION['update'])) {
			?>
			<div class="alert alert-success">
				<?php
				echo $_SESSION["update"];
				unset($_SESSION["update"]);
				?>
			</div>
			<?php
		}

		?>
		<?php
		if (isset($_SESSION['delete'])) {
			?>
			<div class="alert alert-success">
				<?php
				echo $_SESSION["delete"];
				unset($_SESSION["delete"]);
				?>
			</div>
			<?php
		}

		?>
		<table class="table table-bordered">
			<thead>
				<th>#</th>
				<th>Title</th>
				<th>Author</th>
				<th>Type</th>
				<th>Action</th>
			</thead>
			<tbody>
				 <?php
				 include("database.php");
				 $sql = "SELECT * FROM book";
				 $result = mysqli_query($conn,$sql);
				 while($row = mysqli_fetch_array($result)){
				 	?>
				 	<tr>
				 		<td><?php echo $row["id"]; ?></td>
				 		<td><?php echo $row["title"]; ?></td>
				 		<td><?php echo $row["author"]; ?></td>
				 		<td><?php echo $row["type"]; ?></td>
				 		<td>
				 			<a href="view.php?id=<?php echo $row["id"]; ?>" class="btn btn-info">Read More</a>
				 			<a href="edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-warning">Edit</a>
				 			<a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a>
				 		</td>
				 	</tr>
				 	<?php
				 }
				 ?>
			</tbody>
			
		</table>
</div>
</body>
</html>