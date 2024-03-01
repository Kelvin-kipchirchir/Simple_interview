<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Edit Book</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<header class="d-flex justify-content-between my-4">
			<h1>Edit Book</h1>
			<div>
				<a href="booklist.php" class="btn btn-primary  ">Back</a>
			</div>
			
		</header>
		<?php
		if(isset($_GET["id"])){
		$id = $_GET["id"];
		include("database.php");
		$sql = "SELECT * FROM book WHERE id=$id";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result);
		?>
		<form action="process.php" method="post">
			<div class="form-element my-4">
				<input type="text" class="form-control" value="<?php echo $row['title'];?>" name="title" placeholder="Book Title:">
			</div>
			<div class="form-element my-4">
				<input type="text"  class="form-control" value="<?php echo $row['author'];?>" name="author" placeholder="Author Name:">
			</div>
			<div class="form-element my-4">
				<select name="type" class="form-control">
					<option value="">Select Book Type</option>
					<option value="Adventure" <?php if($row['type']=="Adventure"){echo "selected";}?>>Adventure</option>
					<option value="Fantasy" <?php if($row['type']=="Fantasy"){echo "selected";}?>>Fantasy</option>
					<option value="SciFi"<?php if($row['type']=="SciFi"){echo "selected";}?>>SciFi</option>
					<option value="Horror"<?php if($row['type']=="Horror"){echo "selected";}?>>Horror</option>
				</select>
			</div>

			<div class="form-element my-4">
				<input type="text"  class="form-control" value="<?php echo $row['description'];?>" name="description" placeholder="Book Description:">
			</div>
			<input type="hidden" name="id" value="<?php echo $row['id'];?>">
				<div class="form-element">
				<input type="submit" class="btn btn-success" value="Edit Book" name="edit">
			</div>

		</form>
		<?php

	}

		?>
		
	</div>

</body>
</html>