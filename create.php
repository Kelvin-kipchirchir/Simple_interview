<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Add New Book</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<header class="d-flex justify-content-between my-4">
			<h1>Add New Book</h1>
			<div>
				<a href="booklist.php" class="btn btn-primary  ">Back</a>
			</div>
			
		</header>
		<form action="process.php" method="post">
			<div class="form-element my-4">
				<input type="text" class="form-control" name="title" placeholder="Book Title:">
			</div>
			<div class="form-element my-4">
				<input type="text"  class="form-control" name="author" placeholder="Author Name:">
			</div>
			<div class="form-element my-4">
				<select name="type" class="form-control">
					<option value="">Select Book Type</option>
					<option value="Adventure">Adventure</option>
					<option value="Fantasy">Fantasy</option>
					<option value="SciFi">SciFi</option>
					<option value="Horror">Horror</option>
				</select>
			</div>
			<div class="form-element my-4">
				<input type="text"  class="form-control" name="description" placeholder="Book Description:">
			</div>
				<div class="form-element">
				<input type="submit" class="btn btn-success" value="Add Book" name="create">
			</div>

		</form>
	</div>

</body>
</html>