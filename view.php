<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Book Details</title>
	 <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		.book-details{
			background: #f5f5f5;
			padding: 50px;
		}
	</style>
</head>
<body>
	<div class="container">
		<header class="d-flex justify-content-between my-4">
			<h1>Book Details</h1>
			<div>
				<a href="booklist.php" class="btn btn-primary  ">Back</a>
			</div>
		</header>
		<div class="book-details my-4">
			<?php
			  if(isset($_GET["id"])){
			  $id = $_GET["id"];
			  include("database.php");
			  $sql = "SELECT * FROM book WHERE id=$id";
			  $result = mysqli_query($conn,$sql);
			  $row = mysqli_fetch_array($result);
			  ?>
			  <h2>Title</h2>
			  <p><?php echo $row["title"]?></p>
			  <h2>Description</h2>
			  <p><?php echo $row["description"]?></p>
			  <h2>Type</h2>
			  <p><?php echo $row["type"]?></p>
			  <h2>Author</h2>
			  <p><?php echo $row["author"]?></p>
			  <?php
			}

			?>
		</div>
	</div>
	
</body>
</html>